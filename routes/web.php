<?php

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

Route::get('home', function () {
    return view('home');
});


route::get('dashboard', [UserController::class, 'dashboard'])->middleware('can:admin');
route::get('login', [UserController::class, 'index'])->name('login');
route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom');
route::get('registration', [UserController::class, 'registration'])->name('register-user');
route::post('custom-registration', [UserController::class, 'customRegistration'])->name('register.custom');
route::get('signout', [UserController::class, 'signout'])->name('signout');
