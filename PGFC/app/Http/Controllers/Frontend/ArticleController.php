<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request) 
    {
        $keyword = $request->keyword;

        if ($keyword) {
            $articles = Article::with('Category')
                        ->whereStatus(1)
                        ->where('title','like','%' .$keyword. '%')
                        ->latest()
                        ->simplePaginate(3);
        } else {
            $articles = Article::with('Category')
                        ->whereStatus(1)
                        ->latest()
                        ->simplePaginate(3);
        }

        return view('pages.frontend.blog.index', [
            'latest_post' => Article::latest()->first(),
            'articles' => $articles,
            'keyword' => $keyword
        ]);
    }

    public function show($slug) 
    {
        return view('pages.frontend.blog.show', [
            'article' => Article::where('slug', $slug)->first(),
            'categories' => Category::latest()->get(),
        ]);
    }
}
