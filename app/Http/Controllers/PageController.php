<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class PageController extends Controller
{
    public function index()
    {
        $news = News::orderByDesc('id')->limit(4)->get();
        return view('pages.index', compact('news'));
    }
    public function new(News $news)
    {
        $news = News::orderByDesc('id')->get();
        return view('pages.new', compact('news'));
    }
//    public function new()
//    {
//        return view('pages.new');
//    }

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
        return view('pages.location');
    }

    public function dealers()
    {
        return view('pages.dealers');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function list(Request $request)
    {
        $sort = $request->get('sort', 'id');
        $type = $request->get('type', 'desc');
        $categoryId = $request->get('category_id', null);


        $categories = Category::get();

        $items = Item::orderBy($sort, $type);

        if ($categoryId) {
            $items = $items->where('category_id', $categoryId);
        }

        $items = $items->where('available', '>', 0)->simplePaginate(15);

        return view('pages.list', compact('sort', 'type', 'categoryId', 'categories', 'items'));
    }

    public function show(Item $item)
    {
        return view('pages.show', compact('item'));
    }
}
