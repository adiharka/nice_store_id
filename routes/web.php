<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('client.home');
})->name('landing');
Route::get('/home', function () {
    return view('client.home');
})->name('home');

Route::middleware(['login'])->group(function(){
    Route::get('/login', [LoginController::class, 'showLogin']);
    Route::post('login', [LoginController::class, 'login'])->name('login');
});

Route::middleware(['auth'])->group(function(){
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware(['admin'])->group(function(){
    //Product
    Route::get('/dashboard/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/dashboard/product/add', [ProductController::class, 'create'])->name('product.create');
    Route::post('/dashboard/product/add', [ProductController::class, 'store'])->name('product.store');
    Route::get('/dashboard/product/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/dashboard/product/update/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/dashboard/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/dashboard/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    //Profile
    Route::get('/dashboard/profile', [UserController::class, 'edit'])->name('profile.edit');
    Route::put('/dashboard/profile', [UserController::class, 'update'])->name('profile.update');
    Route::get('/dashboard/profile/password', [UserController::class, 'password'])->name('profile.password');
    Route::put('/dashboard/profile/password', [UserController::class, 'changePassword'])->name('profile.changepassword');

    //Sales
    Route::get('/dashboard/sales', [SaleController::class, 'index'])->name('sales.index');
    Route::get('/dashboard/sales/{id}', [SaleController::class, 'show'])->name('sales.show');
    Route::get('/dashboard/sales/{id}', [SaleController::class, 'show'])->name('sales.confirmation');
    Route::delete('/dashboard/sales/{id}', [SaleController::class, 'destroy'])->name('sales.destroy');

    //Else
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    });

    Route::middleware(['user'])->group(function(){
        //User
        Route::get('/shop', [PagesController::class, 'shop'])->name('shop');
        Route::get('/cart', function () {
            return view('client.cart');
        })->name('cart');
        Route::get('/thanks', function () {
            return view('client.thanks');
        })->name('thanks');
        Route::get('/shop/{id}', [PagesController::class, 'shop_detail'])->name('shop_detail');
    });
});