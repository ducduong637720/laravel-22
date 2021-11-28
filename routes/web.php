<?php

use App\Http\Controllers\Frontend\CartController;
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

Route::get('/', 'HomeController@index')->middleware(['auth'])->name('home');
Route::prefix('backend')
    ->name('backend.')
    ->namespace('Backend')
    ->middleware(['auth'])
    ->group(function () {
        //Dashboard
        Route::get('dashboard', 'DashboardController@index')
            ->name('dashboard.index');
        Route::resource('posts', PostController::class);
        //User
        Route::resource('users', UserController::class);
        Route::get('/users/delete', 'UserController@delete')
            ->name('users.delete');
        Route::get('/users/restore/{id}', 'UserController@restore')
            ->name('users.restore');
        //Category
        Route::resource('categories', CategoryController::class);
        Route::get('/categories/delete', 'CategoryController@delete')
            ->name('categories.delete');
        Route::get('/categories/restore/{id}', 'CategoryController@restore')
            ->name('categories.restore');
        //Tag
        Route::resource('tags', TagController::class);
        // Permission
        Route::resource('permissions', PermissionController::class);
        //Role
        Route::resource('roles', RoleController::class);
        Route::post('/login/user/{id}', 'UserController@loginWithUser')
            ->name('users.login');
        //Storage
        // Route::resource('storages', StorageController::class)->parameters(['storages' => 'id']);
        // Route::get('storages/download/{id}', 'StorageController@download')->name('storages.download');
        //Product
        Route::resource('products', ProductController::class);
        //Order
        Route::resource('orders', OrderController::class);
        //Image
        // Route::resource('images', ImageController::class);
         //Brand
         Route::resource('brands', BrandController::class);
         //ProdCategory
         Route::resource('prodcategories', ProdCategoryController::class);
    });
Route::name('frontend.')
    ->namespace('Frontend')
    ->middleware(['auth'])
    ->group(function () {
        //Post
        Route::get('posts/list', 'PostController@list')
            ->name('posts.list');
        Route::resource('posts', PostController::class);
        Route::get('posts/list/{id}', 'PostController@category_posts')
            ->name('posts.category_posts');
        //Product
        Route::resource('products', ProductController::class);
        Route::get('list', 'ProductController@list')
            ->name('products.list');
        Route::get('list/{id}', 'ProductController@prods_category')
            ->name('products.prods_category');
        //Cart
        Route::get('cart', 'CartController@index')
            ->name('cart.index');
        Route::get('cart/create/{id}', 'CartController@create')
            ->name('cart.create');
        Route::get('cart/remove/{rowId}', 'CartController@remove')
            ->name('cart.remove');
        Route::get('cart/increase/{rowId}', 'CartController@increase')
            ->name('cart.increase');
        Route::get('cart/decrease/{rowId}', 'CartController@decrease')
            ->name('cart.decrease');
        Route::get('pay', 'CartController@pay')
            ->name('cart.pay');
    });

Route::prefix('/')->namespace('Auth')->name('auth.')->group(function () {
    Route::get('/login', 'LoginController@create')
        ->middleware('guest')
        ->name('login');
    Route::post('/login', 'LoginController@authenticate')
        ->middleware('guest')
        ->name('login');
    Route::get('/register', 'RegisteredUserController@create')
        ->middleware('guest')
        ->name('register');
    Route::post('/register', 'RegisteredUserController@store')
        ->middleware('guest')
        ->name('register');
    Route::post('/logout', 'LoginController@logout')
        ->name('logout');
});
