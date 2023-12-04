<?php

use App\Http\Controllers\activityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\additionalPInfoController;
use App\Http\Controllers\roleInsertionController;
use App\Http\Controllers\doctorAppointmentController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\profileManagerController;
use App\Http\Controllers\rosterController;
use App\Http\Controllers\salariesController;
use App\Http\Controllers\supervisorController;
use App\Http\Controllers\userPaymentsController;




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
Route::get('/adminNavigation',[adminController::class,'adminlogin'])->name('adminlogin');
Route::get('/adminNavigation/profileManager',[profileManagerController::class,'profileManager'])->name('profileManager');
Route::post('/adminNavigation/profileManager/updateStatus', [profileManagerController::class, 'updateStatus'])->name('updateStatus');
Route::post('/adminNavigation/profileManager/unapproveupdateStatus', [profileManagerController::class, 'unapproveupdateStatus'])->name('unapproveupdateStatus');
Route::get('/adminNavigation/userPayments',[userPaymentsController::class,'userPayments'])->name('userpayments');
Route::get('/adminNavigation/salaries',[salariesController::class,'salaries'])->name('salaries');
Route::post('/adminNavigation/salaries',[salariesController::class,'updateSalary'])->name('updateSalary');



//supervisor routes
Route::get('/supervisorNavigation',[supervisorController::class,'supervisorlogin'])->name('supervisorlogin');
Route::get('/supervisorNavigation/activity',[activityController::class,'activity'])->name('activity');
Route::get('/supervisorNavigation/roster',[rosterController::class,'roster'])->name('roster');




// Route::get('/adminNavigation',[adminNavigationController::class,'adminNavigation'])->name('adminNavigation');
// Route::get('/adminNavigation',[adminNavigationController::class,'adminNavigation'])->name('adminNavigation');

