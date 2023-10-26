<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/register',RegisterController::class);


Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');

Route::post('/login',[LoginController::class,'authenticate']);

// Route::get('/dashboard',function(){
//     return view('dashboard.index');
// });

Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');
