<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UpcomingMatchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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


// Admin
// Route::prefix('admin')
//     ->middleware(['auth', 'admin'])
//     ->namespace('Admin')
//     ->group(function(){
//         Route::get('/', [DashboardController::class, 'index'])
//             ->name('dashboard');

//         Route::get('admin/upcoming-match', [UpcomingMatchController::class, 'index'])->name('upcoming-match.index');

//         Route::get('admin/upcoming-match/create', [UpcomingMatchController::class, 'create'])->name('upcoming-match.create');

//         Route::get('admin/upcoming-match/{id}', [UpcomingMatchController::class, 'edit'])->name('upcoming-match.edit');

//         Route::delete('admin/upcoming-match/{id}', [UpcomingMatchController::class, 'destroy'])->name('upcoming-match.destroy');

//         Route::post('admin/upcoming-match', [UpcomingMatchController::class, 'store'])->name('upcoming-match.store');

//     });

Auth::routes(['verify' => true]);

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

    Route::get('/dashboard', [UserController::class, 'loadDashboard'])->name('dashboard');

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('admin/upcoming-match', [UpcomingMatchController::class, 'index'])->name('upcoming-match.index');

    Route::get('admin/upcoming-match/create', [UpcomingMatchController::class, 'create'])->name('upcoming-match.create');

    Route::get('admin/upcoming-match/{id}', [UpcomingMatchController::class, 'edit'])->name('upcoming-match.edit');
    
    Route::put('admin/upcoming-match/{id}', [UpcomingMatchController::class, 'update'])->name('upcoming-match.update');

    Route::delete('admin/upcoming-match/{id}', [UpcomingMatchController::class, 'destroy'])->name('upcoming-match.destroy');

    Route::post('admin/upcoming-match', [UpcomingMatchController::class, 'store'])->name('upcoming-match.store');

});