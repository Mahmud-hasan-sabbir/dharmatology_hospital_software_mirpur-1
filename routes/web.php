<?php

use App\Http\Controllers\AppointController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PatientController;
use App\Http\Controllers\vaccineController;
use App\Http\Controllers\doctorsetupController;
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
    return view('auth.login');
});

Route::get('/dashboard', [doctorsetupController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['middleware' => ['auth']], function() {


    Route::get('/doctor_setup_index', [doctorsetupController::class, 'doctorSetupIndex'])->name('doctor_setup_index');
    Route::get('/doctor_setup', [doctorsetupController::class, 'doctorSetup'])->name('doctor_setup');
    Route::post('/store_doctor_setup', [doctorsetupController::class, 'storeDoctorSetup'])->name('store_doctor_setup');
    Route::get('/doctorsetup_edit/{id}', [doctorsetupController::class, 'doctorsetupEdit'])->name('doctorsetup_edit');
    Route::post('/update_doctor_info/{id}', [doctorsetupController::class, 'updateDoctorInfo'])->name('update_doctor_info');
    Route::get('/doctorsetup_delete', [doctorsetupController::class, 'doctorsetupDelete'])->name('doctorsetup_delete');

    // patient registration

    Route::get('/patient_registration',[doctorsetupController::class,'patientRegistration'])->name('patient_registration');
    Route::post('/store_patientregistration',[doctorsetupController::class,'storePatientregistration'])->name('store_patientregistration');
    Route::get('/searchPatientregistration',[doctorsetupController::class,'searchPatientregistration'])->name('search_patientregistration');

    // daily report

    Route::get('/daily_report',[doctorsetupController::class,'dailyReport'])->name('daily_report');
    Route::get('/daily_report_filter',[doctorsetupController::class,'dailyreportfilter'])->name('daily_report_filter');
    Route::post('/daily_report_print',[doctorsetupController::class,'dailyReportPrint'])->name('daily_report_print');
    Route::get('/get_doctor_room',[doctorsetupController::class,'getDoctorRoom'])->name('get_doctor_room');


});

require __DIR__.'/auth.php';
