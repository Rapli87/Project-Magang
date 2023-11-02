<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class SideWidgetProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('includes.frontend.blog.side-widget', function ($view){
            // mengambil semua data
            // $category = Category::latest()->get();
            // mengambil 2 data terbaru
            $category = Category::latest()->take(2)->get();

            $view->with('categories', $category);
        });
    }
}
