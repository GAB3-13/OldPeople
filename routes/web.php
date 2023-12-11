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
//
use App\Http\Controllers\adminNavigationController;
use App\Http\Controllers\newRosterController;
//patients
use App\Http\Controllers\patientController;
use App\Http\Controllers\patientscheduleController;
use App\Http\Controllers\patienthubController;
use App\Http\Controllers\setAppointmentController;


//caregiver
use App\Http\Controllers\caregiverController;

//family
use App\Http\Controllers\familymemberController;
use App\Http\Controllers\familypaymentsController;



//doctor
use App\Http\Controllers\doctorController;
use App\Http\Controllers\potdController;

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
    return view('home/welcome');
});

Route::get('/register',[registerController::class,'register'])->name('register');
Route::post('/register-submit', [registerController::class, 'registerUser'])->name('register.submit');
Route::get('/roleInsertion',[roleInsertionController::class,'roleInsertion'])->name('roleInsertion');

Route::get('/login',[loginController::class,'login'])->name('login');
Route::post('/validateLogin', [loginController::class, 'validateLogin'])->name('validateLogin');

// Route::get('/dashboardRoute', [dashboardController::class, 'showdashboard'])->name('dashboard');

Route::get('/roleInsertion',[roleInsertionController::class,'roleInsertion'])->name('roleInsertion');



//admin route
Route::get('/adminNavigation',[adminNavigationController::class,'adminNavigation'])->name('adminNavigation');
Route::get('/adminNavigation/profileManager',[profileManagerController::class,'profileManager'])->name('profileManager');
Route::post('/adminNavigation/profileManager/updateStatus', [profileManagerController::class, 'updateStatus'])->name('updateStatus');
Route::post('/adminNavigation/profileManager/unapproveupdateStatus', [profileManagerController::class, 'unapproveupdateStatus'])->name('unapproveupdateStatus');
Route::get('/adminNavigation/userPayments',[userPaymentsController::class,'userPayments'])->name('userpayments');
Route::get('/adminNavigation/salaries',[salariesController::class,'salaries'])->name('salaries');
Route::post('/adminNavigation/salaries',[salariesController::class,'updateSalary'])->name('updateSalary');
Route::get('/adminNavigation/newRoster',[newRosterController::class,'newRoster'])->name('newRoster');
Route::post('/adminNavigation/saveRoster', [newRosterController::class, 'saveRoster'])->name('saveRoster');


//supervisor routes
Route::get('/supervisorNavigation',[supervisorController::class,'supervisorlogin'])->name('supervisorlogin');
Route::get('/supervisorNavigation/activity',[activityController::class,'activity'])->name('activity');
Route::get('/supervisorNavigation/roster',[rosterController::class,'roster'])->name('roster');
Route::get('/supervisorNavigation/profileManager',[profileManagerController::class,'profileManager'])->name('profileManager');
Route::post('/supervisorNavigation/profileManager/unapproveupdateStatus', [profileManagerController::class, 'unapproveupdateStatus'])->name('unapproveupdateStatus');
Route::post('/supervisorNavigation/profileManager/updateStatus', [profileManagerController::class, 'updateStatus'])->name('updateStatus');


// patients routes
Route::get('/patientNavigation',[patientController::class,'patientlogin'])->name('patientlogin');
Route::get('/patientNavigation/patientschedule',[patientscheduleController::class,'patientSchedule'])->name('patientSchedule');
Route::get('/patientNavigation/hub',[patienthubController::class,'hub'])->name('hub');
Route::get('/patientNavigation/setAppointment',[setAppointmentController::class,'setAppointment'])->name('setAppointment');
Route::post('/patientNavigation/search',[setAppointmentController::class,'search'])->name('search');
Route::get('/patientNavigation/search',[setAppointmentController::class,'search'])->name('search');
Route::post('/patientNavigation/submit',[setAppointmentController::class,'submit'])->name('submit');


//caregiver routes
Route::get('/caregiverNavigation',[caregiverController::class,'caregiverlogin'])->name('caregiverlogin');
Route::post('/caregiverNavigation/submit',[caregiverController::class,'createCheckUpdate'])->name('createCheckUpdate');


//family routes
Route::get('/familymemberNavigation',[familymemberController::class,'familymemberlogin'])->name('familymemberlogin');
Route::get('/familymemberNavigation/payments',[familypaymentsController::class,'familypayments'])->name('familypayments');


//Doctors
Route::get('/doctorNavigation',[doctorController::class,'doctorlogin'])->name('doctorlogin');
Route::get('/doctorNavigation/potd',[potdController::class,'potd'])->name('potd');
Route::post('/doctorNavigation/set',[potdController::class,'set'])->name('set');
// Route::get('/familymemberNavigation/payments',[familypaymentsController::class,'familypayments'])->name('familypayments');

// Route::get('/adminNavigation',[adminNavigationController::class,'adminNavigation'])->name('adminNavigation');
// Route::get('/dashboardRoute', [dashboardController::class, 'showdashboard'])->name('dashboard');

// Route::middleware(['auth', 'doctor'])->group(function () {
//     Route::get('/doctor/home', [DoctorHomeController::class, 'index'])->name('doctor.home');
//     Route::post('/doctor/submit-till-date', [DoctorHomeController::class, 'submitTillDate'])->name('doctor.submit-till-date');
// }
// Route::get('/dashboardRoute', [dashboardController::class, 'showdashboard'])->name('dashboard');

?>
