<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Admin\UserAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\FrontendBlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

/* 
    TODO Overview 

    Two users one admin and other guest 
        -> Admin is the only one that has access to the dashbord 
        -> Guest has access to view the portfolio and the blog section without having the ability to change any content

    Directories/Files needed

        -> Frontend (Access => [guest,admin]) 
            -> index // Portfolio
            -> blog_page
            -> blog
        -> Admin (Access => [admin])
            -> dashboard
            ->blogs
                -> create 
                -> edit
                -> index
*/

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/', [FrontendBlogController::class, 'index']);
Route::get('/show/{blog:slug}', [FrontendBlogController::class, 'show'])->name('blog-show');



Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [UserAuthController::class, 'index'])->name('login-page');
    Route::post('/', [UserAuthController::class, 'login'])->name('login');
    Route::post('/logout', [UserAuthController::class, 'logout'])->name('logout');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('/blogs', BlogController::class);
    });
});
