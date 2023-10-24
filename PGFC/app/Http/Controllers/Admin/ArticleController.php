<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ArticleRequest;
use App\Http\Requests\Admin\UpdateArticleRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $articles = Article::with('Category')->latest()->get();
    
            return DataTables::of($articles)
                //custom column
                ->addIndexColumn() //untuk menambahkan kolom index (id)
                ->addColumn('category_id', function ($articles){
                    return $articles->Category->name;
                })
                ->addColumn('status', function ($articles){
                   if ($articles->status == 0) {
                    return '<span class="badge bg-danger">Private</span>';
                   } else {
                    return '<span class="badge bg-success">Published</span>';
                   }        
                })
                ->addColumn('button', function ($articles){
                    return '<div class="text-center">
                                <a href="articles/'.$articles->id.'" class="btn btn-info btn-sm" 
                                style="margin-right: 5px;">
                                <i class="ri-eye-line text-light"></i>
                                </a>
                                <a href="articles/'.$articles->id.'/edit" class="btn btn-warning btn-sm"
                                style="margin-right: 5px;">
                                <i class="ri-pencil-line text-light"></i>
                                </a>
                                <a href="#" onclick="deleteArticle(this)" 
                                data-id="'.$articles->id.'" class="btn btn-danger btn-sm">
                                <i class="ri-delete-bin-line text-light"></i>
                                </a>
                           </div>';
                })
                //panggil custom column
                ->rawColumns(['category_id', 'status', 'button'])
                ->make();
        }
    
        return view('pages.admin.article.index');
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.article.create',[
            'categories' => Category::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $data = $request->validated();

        $file = $request->file('img'); // img
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); // jpg,jpeg,png
        $file->storeAs('public/admin/articles', $fileName); // storage/app/public/admin/articles/jksbcbsjkcb.jpg
        $data['img'] = $fileName;
        $data['slug'] = Str::slug($data['title']);

        Article::create($data);

        return redirect()->route('articles.index')->with('success', 'Article has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('pages.admin.article.show', [
            'article' => Article::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('pages.admin.article.edit', [
            'article'       => Article::find($id),
            'categories'    => Category::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, string $id)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $file = $request->file('img'); // img
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension(); // jpg,jpeg,png
            $file->storeAs('public/admin/articles', $fileName); // storage/app/public/admin/articles/jksbcbsjkcb.jpg

            //unlink img/delete old img
            Storage::delete('public/admin/articles/'. $request->oldImg);

            $data['img'] = $fileName;
        } else {
            $data['img'] = $request->oldImg;
        }
        
        $data['slug'] = Str::slug($data['title']);

        Article::find($id)->update($data);

        return redirect()->route('articles.index')->with('success', 'Article has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Article::find($id);
        Storage::delete('public/admin/articles/'. $data->img);
        $data->delete();

        return response()->json([
            'message' => 'Data article has been deleted'
        ]);
    }
}
