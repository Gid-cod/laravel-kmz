<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function create(Request $request) {
        $path = $request->file('image')->store('public');
        $path = str_replace('public', '/storage', $path);

        $news = News::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'Short_description' => $request->Short_description,
            'info' => $request->info,
            'image' => $path,
        ]);

        return redirect()->route('admin.news.index');
    }

    public function edit(Request $request, News $news) {
        $params = [
            'category_id' => $request->category_id,
            'name' => $request->name,
            'Short_description' => $request->Short_description,
            'info' => $request->info,
        ];

        if ($request->image) {
            $path = $request->file('image')->store('public');
            $params['image'] = str_replace('public', '/storage', $path);
        }

        $news->update($params);

        return redirect()->route('admin.news.index');
    }

    public function delete(News $news) {
        $news->delete();
        return redirect()->route('admin.news.index');
    }
}
