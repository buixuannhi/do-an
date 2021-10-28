<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\ProductController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdProductController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\AuthenticationController;


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
Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/Bodysuits',[ProductController::class, 'bodysuits'])->name('bodysuit');
Route::get('/Crotchless',[ProductController::class, 'Crotchless'])->name('Crotchless');
Route::get('/Corset',[ProductController::class, 'Corset'])->name('Corset');
Route::get('/Bustier',[ProductController::class, 'Bustier'])->name('Bustier');
Route::get('/Babydoll',[ProductController::class, 'Babydoll'])->name('Babydoll');
Route::get('/More',[ProductController::class, 'More'])->name('More');
Route::get('/UrbeBikini',[ProductController::class, 'UrbeBikini'])->name('UrbeBikini');
Route::get('/Tankini',[ProductController::class, 'Tankini'])->name('Tankini');
Route::get('/Monokini',[ProductController::class, 'Monokini'])->name('Monokini');
Route::get('/Trikini',[ProductController::class, 'Trikini'])->name('Trikini');
Route::get('/Burqini',[ProductController::class, 'Burqini'])->name('Burqini');
Route::get('/BestGym',[ProductController::class, 'BestGym'])->name('BestGym');
Route::get('/SwimSpin',[ProductController::class, 'SwimSpin'])->name('SwimSpin');
Route::get('/Teddy',[ProductController::class, 'Teddy'])->name('Teddy');
Route::get('/Blogs',[ProductController::class, 'Blogs'])->name('Blogs');


//backend
Route::group(['prefix'=>'backend','as'=>'admin.','middleware' => ['auth']], function(){
    Route::get('/',[AdminController::class, 'index'])->name('home');
    
    //brand
    Route::get('/listBrand',[BrandController::class, 'index'])->name('Brand.ListBrand');
    Route::get('/AddBrand',[BrandController::class, 'create'])->name('Brand.AddBrand');
    Route::post('/BrandStore',[BrandController::class,'store'])->name('Brand.store');
    
    //categories
    Route::get('/ListCategory',[CategoryController::class, 'index'])->name('category.listcategory');
    Route::get('/addcategory',[CategoryController::class, 'create'])->name('category.addcategory');
    Route::post('/CategoryStore',[CategoryController::class,'store'])->name('category.store');
    Route::get('/editcategory/{id}',[CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/UpdateCategory/{id}',[CategoryController::class, 'update'])->name('category.update');
    Route::get('/deleteCategory/{id}',[CategoryController::class, 'destroy'])->name('category.destroy');

    //product
    Route::get('/listProduct',[AdProductController::class, 'index'])->name('product.listProduct');
    Route::get('/AddProduct',[AdProductController::class, 'create'])->name('product.AddProduct');
    Route::post('/ProductStore',[AdProductController::class, 'store'])->name('product.store');
    Route::get('/EditProduct/{id}',[AdProductController::class, 'edit'])->name('Product.Edit');
    Route::post('/UpdateProduct/{id}',[AdProductController::class, 'update'])->name('Product.update');
    Route::get('/deleteProuct/{id}',[AdProductController::class, 'destroy'])->name('Product.destroy');

});
Route::get('/login',[AuthenticationController::class, 'index'])->name('login');
Route::post('/login',[AuthenticationController::class, 'submidlogin'])->name('submidlogin');
Route::get('/NewRegister',[AuthenticationController::class, 'register'])->name('register');
Route::post('/register',[AuthenticationController::class, 'addregister'])->name('addregister');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
