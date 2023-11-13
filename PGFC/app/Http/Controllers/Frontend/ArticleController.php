<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
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
            'articles' => $articles,
            'keyword' => $keyword
        ]);
    }

    public function show($slug) 
    {
        $articles = Article::where('slug', $slug)->firstOrfail();
        $articles->increment('views');

        return view('pages.frontend.blog.show', [
            'article' => $articles,
        ]);
    }
}
