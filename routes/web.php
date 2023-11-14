<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;


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

Route::get('/registerUserRoute',[registerController::class,'registerUser'])->name('register');

Route::get('/loginUserRoute',[loginController::class,'loginUser'])->name('login');


// Route::get('/logInRoute', [LoginController::class, 'showLoginForm'])->name('logIn');

// Route::post('/logInRoute', [LoginController::class, 'logIn'])->name('logIn.submit');

// Route::get('/dashboardRoute', [dashboardController::class, 'showdashboard'])->name('dashboard');
