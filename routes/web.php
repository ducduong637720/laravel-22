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

// Route::get('/posts/show', function () {
//     return view('frontend.posts.show');
// })->name('frontend.posts.show');

Route::get('backend/users/delete','Backend\UserController@delete')->name('backend.users.delete');
Route::get('backend/users/restore/{id}','Backend\UserController@restore')->name('backend.users.restore');
Route::get('backend/categories/delete','Backend\CategoryController@delete')->name('backend.categories.delete');
Route::get('backend/categories/restore/{id}','Backend\CategoryController@restore')->name('backend.categories.restore');

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
    Route::resource('posts', PostController::class);
    //User
    Route::resource('users', UserController::class);
    //Category
    Route::resource('categories', CategoryController::class);
     //Tag
     Route::resource('tags', TagController::class);
});
Route::prefix('frontend')
->name('frontend.')
->namespace('Frontend')
->middleware([])
->group(function(){
    Route::get('home', function () {
        return view('frontend.home');
    })->name('index');
    Route::get('posts/index', function () {
        return view('frontend.posts.index');
    })->name('posts.index');

    Route::get('posts/category-posts', function () {
        return view('frontend.posts.category-posts');
    })->name('posts.category-posts');

    Route::get('posts/detail', function () {
        return view('frontend.posts.detail');
    })->name('posts.detail');

});
Route::prefix('auth')
->name('auth.')
->namespace('Auth')
->middleware([])
->group(function(){
    Route::get('login', function () {
    return view('auth.login');
})->name('login');
    Route::get('register', function () {
        return view('auth.register');
})->name('register');
});
