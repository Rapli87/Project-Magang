<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.frontend.home.index');
    }

    public function blog()
    {
        return view('pages.frontend.blog.blog',[
            'latest_post' => Article::latest()->first(),
            'articles' => Article::with('Category')->whereStatus (1)->latest()->simplePaginate(5),
        ]);
    }

    // public function blog_single(Request $request)
    // {
    //     return view('pages.frontend.blog.blog-single',[
    //         'latest_post' => Article::latest()->first(),
    //         'articles' => Article::with('Category') ->whereStatus(1)->latest()->simplePaginate(5),
    //         'categories' => Category::latest()->get()
    //     ]);
    // }

    public function competition(Request $request)
    {
        return view('pages.frontend.competition.competition');
    }
    public function contact(Request $request)
    {
        return view('pages.frontend.contact.contact');
    }
    public function gallery(Request $request)
    {
        return view('pages.frontend.gallery.gallery');
    }
    public function klasmen(Request $request)
    {
        return view('pages.frontend.klasmen.klasmen');
    }
    public function about(Request $request)
    {
        return view('pages.frontend.about.about');
    }  
    public function result(Request $request)
    {
        return view('pages.frontend.result.result');
    }
    public function result_single(Request $request)
    {
        return view('pages.frontend.result.result-single');
    }
    public function team(Request $request)
    {
        return view('pages.frontend.team.team');
    }
    public function team_single(Request $request)
    {
        return view('pages.frontend.team-single.team');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
