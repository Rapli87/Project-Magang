<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\UpcomingMatchController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use UniSharp\LaravelFilemanager\Lfm;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    // Client
Route::resource('/', HomeController::class);
    Route::get('about', [HomeController::class, 'about'])
        ->name('pages.about');
    Route::get('blog', [HomeController::class, 'blog'])
        ->name('pages.blog');
    Route::get('blog-single', [HomeController::class, 'blog_single'])
        ->name('pages.blog-single');
    Route::get('competition', [HomeController::class, 'competition'])
        ->name('pages.competition');
    Route::get('contact', [HomeController::class, 'contact'])
        ->name('pages.contact');
    Route::get('details-club', [HomeController::class, 'details_club'])
        ->name('pages.details-club');
    Route::get('gallery', [HomeController::class, 'gallery'])
        ->name('pages.gallery');
    Route::get('pgfc', [HomeController::class, 'pgfc'])
        ->name('pages.pgfc');
    Route::get('klasmen', [HomeController::class, 'klasmen'])
        ->name('pages.klasmen');
    Route::get('result', [HomeController::class, 'result'])
        ->name('pages.result');
    Route::get('result-single', [HomeController::class, 'result_single'])
        ->name('pages.result-single');
    Route::get('team', [HomeController::class, 'team'])
        ->name('pages.team');
    Route::get('team-single', [HomeController::class, 'team_single'])
        ->name('pages.team-single');
    // Route::get('404', [HomeController::class, 'error'])
    //     ->name('pages.404');

// refferal 
Route::group(['middleware' =>['is_login']], function(){
    Route::get('/register', [UserController::class, 'loadRegister'])->name('register');
    Route::post('/user-register', [UserController::class, 'registered'])->name('registered');

    Route::get('/referral-register',[UserController::class, 'loadReferralRegister']);
    Route::get('/email-verification/{token}',[UserController::class, 'emailVerification']);

    Route::get('/login', [UserController::class, 'loadLogin']);
    Route::post('/login', [UserController::class, 'userLogin'])->name('login');

});

Route::group(['middleware' =>['is_logout']], function(){

    //dashboard utama
    Route::get('admin/dashboard', [UserController::class, 'loadDashboard'])->name('dashboard');
    //dashboard blog
    Route::get('admin/dashboard-blog', [UserController::class, 'loadDashboardBlog'])->name('dashboard-blog')-> middleware('UserAccess:1');

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    //pages
    Route::resource('admin/upcoming-match', UpcomingMatchController::class)-> middleware('UserAccess:1');

    //cms panel
    Route::resource('admin/articles', ArticleController::class)-> middleware('UserAccess:1');
    Route::resource('admin/categories', CategoryController::class) -> middleware('UserAccess:1');

    //user admin
    Route::resource('admin/users', UserController::class);

    //route unisharp
    Route::group(['prefix' => 'laravel-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

});



