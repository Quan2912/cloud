<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Scheme;
use Illuminate\Support\Facades\Blueprint;
use App\Http\Controllers\CategoryController;


use App\Http\Controllers\SliderController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;

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

/*Route::group(['prefix'=>'client'], function(){*/
    Route::get('/', [FrontendController::class, 'index'])->name('client.index');
    
    Route::get('viewCategory/{name}',[FrontendController::class, 'viewCategory'])->name('client.category');
    Route::get('detail/{id}',[FrontendController::class, 'detail']) -> name('client.detail');

    Route::get('/about.', [FrontendController::class, 'about'])->name('client.about');
    Route::get('/menu', [FrontendController::class, 'menu'])->name('client.menu');
    Route::get('/order', [FrontendController::class, 'order'])->name('client.order');
    Route::get('/faq', [FrontendController::class, 'faq'])->name('client.faq');
    
    Route::get('/login', [LoginController::class, 'authenticated'])->name('login');


/*Route::get('/', function () {
    return view('welcome');
});*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');



Route::group(['prefix'=>'categories'], function(){
    Route::get('/', [CategoryController::class, 'Catindex'])->name('categories.index');
    Route::get('add/', [CategoryController::class, 'getAddCategory']);
    Route::post('add/', [CategoryController::class, 'postAddCategory'])->name('categories.add');
    Route::get('edit/{id}',[CategoryController::class,'getEditCategory']);
    Route::post('edit/{id}',[CategoryController::class,'postEditCategory'])->name('categories.edit');
    Route::get('delete/{id}',[CategoryController::class,'deleteCategory']);
});


Route::group(['prefix'=>'sliders'], function(){
    Route::get('/', [SliderController::class, 'index'])->name('sliders.index');
    Route::get('add/', [SliderController::class, 'getAddSlider']);
    Route::post('add/', [SliderController::class, 'postAddSlider'])->name('sliders.add');
    Route::get('edit/{id}',[SliderController::class,'getEditSlider']);
    Route::post('edit/{id}',[SliderController::class,'postEditSlider'])->name('sliders.edit');
    Route::get('delete/{id}',[SliderController::class,'deleteSlider'])->name('sliders.delete');
});
Route::group(['prefix'=>'products'], function(){
    Route::get('/', [ProductController::class, 'Prodindex'])->name('products.index');
    Route::get('add/', [ProductController::class, 'getAddProduct']);
    Route::post('add/', [ProductController::class, 'postAddProduct'])->name('products.add');
    Route::get('edit/{id}', [ProductController::class, 'getEditProduct']);
    Route::post('edit/{id}', [ProductController::class, 'postEditProduct'])->name('products.edit');
    Route::get('delete/{id}', [ProductController::class, 'deleteProduct'])->name('products.delete');

});
Route::group(['prefix'=>'users'], function(){
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('edit/{id}',[UserController::class,'getEditUser']);
    Route::post('edit/{id}',[UserController::class,'postEditUser'])->name('users.edit');
    
    Route::get('delete/{id}',[UserController::class,'deleteUser'])->name('users.delete');

});

 
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.from.cart');