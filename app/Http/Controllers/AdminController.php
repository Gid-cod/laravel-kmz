<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdminOrderResource;
use App\Models\File;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;
use App\Models\Order;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.dashboard', compact('user'));
    }

    public function news()
    {
        $user = Auth::user();
        $news = News::get();
        return view('admin.news.index', compact('news', 'user'));
    }

    public function report()
    {
        $user = Auth::user();
        $files = File::get();
        return view('admin.files.index', compact('user', 'files'));
    }

    public function items()
    {
        $user = Auth::user();
        $items = Item::get();
        return view('admin.items.index', compact('items', 'user'));
    }

    public function categories()
    {
        $user = Auth::user();
        $categories = Category::get();
        return view('admin.categories.index', compact('categories', 'user'));
    }
    public function types()
    {
        $user = Auth::user();
        $types = Type::get();
        return view('admin.types.index', compact('user','types'));
    }

    public function orders(Request $request)
    {
        $user = Auth::user();
        $status = $request->get('status', null);
        $orders = Order::all();

        if ($status) {
            $orders = $orders->where('status', $status);
        }

        $orders = AdminOrderResource::collection($orders);

        return view('admin.orders.index', compact('orders', 'status', 'user'));
    }

    public function categoriesCreate()
    {
        $user = Auth::user();
        return view('admin.categories.create', compact('user'));
    }
    public function typesCreate()
    {
        $user = Auth::user();
        $types = Type::get();
        return view('admin.types.index', compact('user','types'));
    }

    public function newsCreate()
    {
        $user = Auth::user();
        $types = Type::get();
        return view('admin.news.create', compact('types', 'user'));
    }

    public function newsUpdate(News $news, Request $request)
    {
        $user = Auth::user();
        $types = Type::get();
        return view('admin.news.edit', compact('news', 'types', 'user'));
    }

    public function itemsCreate()
    {
        $user = Auth::user();
        $categories = Category::get();
        return view('admin.items.create', compact('categories', 'user'));
    }

    public function itemsUpdate(Item $item, Request $request)
    {
        $user = Auth::user();
        $categories = Category::get();
        return view('admin.items.edit', compact('item', 'categories', 'user'));
    }

    public function filesCreate(Request $request)
    {
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();

        // Сохраняем файл в хранилище, например, в папку storage/app/uploads
        $path = $request->file('file')->storeAs('uploads', $filename);

        // Сохраняем информацию о файле в базу данных
        $file = new File;
        $file->filename = $filename;
        $file->filepath = $path;
        $file->save();

        return redirect()->back()->with('success', 'Файл успешно загружен!');
    }

    public function filesShow($id)
    {
        $file = File::find($id);

        return view('admin.files.index', ['file' => $file]);
    }

    public function filesDownload($id)
    {
        $file = File::find($id);

        // Проверяем, что файл существует
        if (!$file || !Storage::exists($file->filepath)) {
            abort(404);
        }

        // Выгружаем файл
        return Storage::download($file->filepath, $file->filename);
    }

    public function delete(File $file)
    {
        $file->delete();
        return redirect()->route('admin.files.index');
    }


}
