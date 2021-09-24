<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index');

Route::get('/posts/show', function () {
    return view('frontend.posts.show');
})->name('frontend.posts.show');


Route::prefix('backend')
->name('backend.')
->namespace('Backend')
->middleware([])
->group(function(){
    // Route::get('dashboard', 'DashboardController@index')
    // ->name('dashboard.index');

    //Dashboard
    Route::resource('/dashboard', DashboardController::class);
    //Post
    Route::resource('posts', PostController::class)->only([
        'index', 'store', 'create','update','edit'
    ])->names([
        'create' => 'posts.add'
    ])->parameters([
        'posts' => 'posts_id'
    ]);
    //User
    Route::resource('users', UserController::class);
    //Category
    Route::resource('categories', CategoryController::class);
//    Route::resources([
//        'posts'=> PostController::class,
//     //    'users'=> UserController::class,
//    ]);
});