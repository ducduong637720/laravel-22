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
});
Route::get('backend/categories/softDelete','Backend\CategoryController@softDelete')
->name('backend.categories.softDelete');