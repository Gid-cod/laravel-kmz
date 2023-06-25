<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdminOrderResource;

use App\Models\File;
use App\Models\News;
use App\Models\Order;
use App\Models\Type;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index(Request $request, Item $items)
    {
        $items = $this->user->carts->toArray();
        $finalCount = collect($items)->sum('available');
        $user = Auth::user();
        $news = News::orderByDesc('id')->limit(4)->get();
        $news-> created_at = $request-> get('created_at');
        $date = Carbon::parse($news->created_at);
        $types = Type::get();
        return view('pages.index', compact('news','items', 'user','finalCount','types','date'));
    }

    public function editprofil(){
        $user = Auth::user();
        return view('pages.editprofil',compact('user'));
    }
    public function new(Request $request)
    {
        $sort = $request->get('sort', 'id');
        $types = Type::get();
        $user = Auth::user();

        $news = News::orderByDesc('id')->get();
        $typeId = $request->get('type_id');

        $news-> created_at = $request-> get('created_at');
        $date = Carbon::parse($news->created_at);

        if ($typeId) {
            $news = $news->where('type_id', $typeId);
        }
        return view('pages.new', compact('news','user','types','typeId','sort','date'));
    }
    public function report()
    {
        $files = File::get();
        $user = Auth::user();
        return view('pages.report', compact('user','files'));
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();

        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->patronymic = $request->input('patronymic');
        $user->telephone = $request->input('telephone');
        $user->birthday = $request->input('birthday');
        $user->email = $request->input('email');
        $user->save();


        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/photos');
            $user->photo = basename($path);
        }
        if ($request->hasFile('photo_cover')) {
            $path = $request->file('photo_cover')->store('public/photos');
            $user->photo_cover = basename($path);
        }

        $user->save();

        return redirect()->route('profil', $id)->with('success', 'Информация успешно обновлена!');
    }
    public function profil(Request $request, Item $item)
    {
        $items = $this->user->carts->toArray();
        $finalPrice = collect($items)->sum('price');
        $finalCount = collect($items)->sum('available');
        $date = Carbon::now()->format('j F');
        $user = Auth::user();
        $orders = Order::all();
        $orders = AdminOrderResource::collection($orders);

        $count = $request->get('count', 0);


        return view('pages.profil',compact('user','items','finalCount','finalPrice','count','orders','date'));
    }
    public function add(Request $request, Item $item) {
        $count = $request->get('count', 0);

        $cartItem = $this->user->carts()->where('item_id', $item->id)->first();
        if ($cartItem) $count += $cartItem->count;

        $item->available -= $count;
        if ($item->available < 0) return ['message' => 'Недостаточно товара'];

        $cartItem = $this->user->carts()->firstOrCreate(['item_id' => $item->id], ['count' => 0]);
        $cartItem->count = $count;
        $cartItem->save();

        if ($cartItem->count < 1) {
            $cartItem->delete();
            return ['message' => 'Товар удалён из корзины'];
        }

        return ['message' => 'Товар добавлен'];
    }

    public function login()
    {
        return view('pages.login');
    }

    public function register()
    {
        return view('pages.register');
    }

    public function location()
    {
        $user = Auth::user();
        return view('pages.location', compact('user'));
    }

    public function dealers()
    {
        $user = Auth::user();
        return view('pages.dealers', compact('user'));
    }

    public function about()
    {
        $user = Auth::user();
        return view('pages.about', compact('user'));
    }

    public function list(Request $request)
    {
        $user = Auth::user();
        $sort = $request->get('sort', 'id');
        $type = $request->get('type', 'desc');
        $categoryId = $request->get('category_id', null);


        $categories = Category::get();

        $items = Item::orderBy($sort, $type);

        if ($categoryId) {
            $items = $items->where('category_id', $categoryId);
        }

        $items = $items->where('available', '>', 0)->simplePaginate(15);

        return view('pages.list', compact('sort', 'type', 'categoryId', 'categories', 'items', 'user'));
    }

    public function show(Item $item)
    {
        $user = Auth::user();
        return view('pages.show', compact('item', 'user'));
    }
}
