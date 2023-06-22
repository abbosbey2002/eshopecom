<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PageController::class, 'main']);

Route::get('cards', [PageController::class, 'cards']);

Route::get('buttons', [PageController::class, 'buttons']);

Route::get('charts', [PageController::class, 'charts']);

Route::get('tables', [PageController::class, 'tables']);


Route::get('signup', [PageController::class, 'signup']);

Route::get('forget-password', [PageController::class, 'forgetPassword']);

Route::get('404', [PageController::class, 'error404']);

Route::get('blank', [PageController::class, 'blank']);

Route::get('utilities-color', [PageController::class, 'utilitiescolor']);
Route::get('utilities-border', [PageController::class, 'utilitiesborder']);
Route::get('utilities-other', [PageController::class, 'utilitiesother']);
Route::get('utilities-animation', [PageController::class, 'utilitiesanimation']);


Route::get('login',  [UserController::class, 'login']);

Route::post('login', [UserController::class, 'sign']);


