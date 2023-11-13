<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slugCategory)
    {
        return view('pages.frontend.blog.category.index', [
            'articles' => Article::with('Category')->whereHas('Category', function($q) use ($slugCategory) {
                $q->where('slug', $slugCategory);
            })->latest()->simplePaginate(3),
            'category' => $slugCategory    
        ]);
    }
}
