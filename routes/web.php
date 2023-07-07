<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolyoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Singleproduct;
use App\Http\Controllers\UserController;
use App\Models\Portfolyo;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('main');
// });


// Route::get('/filter/{id}', [FrontController::class, 'filter'])->name('filter');

Route::get('/admin', [PageController::class, 'main'])->name('admin');

Route::get('cards', [PageController::class, 'cards']);
Route::get('filter', [ FrontController::class, 'update']);

Route::resource('single', FrontController::class);

Route::resource('/', FrontController::class);
// Route::get('/', [FrontController::class], 'index');

Route::resource('products', Singleproduct::class);
Route::get('/search', [FrontController::class, 'search'])->name('search');

// Route::get('show', [FrontController::class, 'show']);

Route::resource('contact', ContactController::class);



Route::get('signup', [PageController::class, 'signup']);

Route::get('forget-password', [PageController::class, 'forgetPassword']);

Route::get('404', [PageController::class, 'error404']);

Route::get('header',  [PageController::class, 'header']);

Route::get('/login',  [UserController::class, 'login']);

Route::post('login', [UserController::class, 'sign']);

Route::resource('/product', ProductController::class);

Route::resource('/category', CategoryController::class);
