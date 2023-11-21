<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\additionalPInfoController;
use App\Http\Controllers\roleInsertionController;
use App\Http\Controllers\doctorAppointmentController;
use App\Http\Controllers\adminController;


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

Route::get('/register',[registerController::class,'register'])->name('register');

Route::post('/register-submit', [registerController::class, 'registerUser'])->name('register.submit');

Route::get('/login',[loginController::class,'login'])->name('login');

Route::post('/validateLogin', [loginController::class, 'validateLogin'])->name('validateLogin');

// Route::get('/dashboardRoute', [dashboardController::class, 'showdashboard'])->name('dashboard');

Route::get('/additionalPInfo',[additionalPInfoController::class,'additionalPInfo'])->name('additionalPInfo');

Route::get('/roleInsertion',[roleInsertionController::class,'roleInsertion'])->name('roleInsertion');

Route::get('/doctorAppointment',[doctorAppointmentController::class,'doctorAppointment'])->name('doctorAppointment');

Route::get('/adminNavigation',[adminNavigationController::class,'adminNavigation'])->name('adminNavigation');


//admin route
Route::get('/adminlogin',[adminController::class,'adminlogin'])->name('adminlogin');


//do all of the routes for all the different pages
// Route::get('/adminNavigation',[adminNavigationController::class,'adminNavigation'])->name('adminNavigation');
// Route::get('/adminNavigation',[adminNavigationController::class,'adminNavigation'])->name('adminNavigation');
// Route::get('/adminNavigation',[adminNavigationController::class,'adminNavigation'])->name('adminNavigation');
// Route::get('/adminNavigation',[adminNavigationController::class,'adminNavigation'])->name('adminNavigation');

