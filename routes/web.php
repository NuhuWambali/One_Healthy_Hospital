<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
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

// Route::get('/', [userController::class, 'home'])->name('home.show');

Route::get('/', [userController::class, 'index'])->name('index.show');

Route::get('/about', [userController::class, 'aboutUs'])->name('aboutUs.show');

Route::get('/doctors', [userController::class, 'doctors'])->name('doctors.show');

Route::get('/news', [userController::class, 'news'])->name('news.show');

Route::get('/contact', [userController::class, 'contact'])->name('contact.show');

Route::post('/make_appointment', [userController::class, 'make_appointment'])->name('make_appointment.store')->middleware('auth');

Route::get('/myAppointment', [userController::class, 'myAppointment'])->name('myAppointment.show');

Route::post('/cancel_appointment/{id}', [userController::class, 'cancel_appointment'])->name('cancel_appointment')->middleware('auth');

Route::delete('/delete_appointment/{id}', [userController::class, 'delete_appointment'])->name('delete_appointment')->middleware('auth');

Route::post('/contact_us', [userController::class, 'contact_us'])->name('contact_us.store');




Route::get('/login', [authController::class, 'login'])->name('login');

Route::get('/register', [authController::class, 'register'])->name('register.show');

Route::post('/register', [authController::class, 'postRegister'])->name('postRegister.store');

Route::post('/login', [authController::class, 'postLogin'])->name('postLogin.store');

Route::get('/logout', [authController::class, 'logout'])->name('logout');




Route::get('/admin', [adminController::class, 'adminIndex'])->name('admin.show');

Route::get('/addDoctors', [adminController::class, 'doctor'])->name('addDoctor.show');

Route::post('/addDoctors', [adminController::class, 'addDoctor'])->name('addDoctors.store');

Route::get('/viewDoctor', [adminController::class, 'viewDoctor'])->name('viewDoctor.show');

Route::delete('/deleteDoctor/{id}', [adminController::class, 'deleteDoctor'])->name('deleteDoctor.destroy');

Route::get('/appointment', [adminController::class, 'viewAppointment'])->name('appointment.show');

Route::put('/appointment/approve/{id}', [adminController::class, 'approve'])->name('approve');

Route::put('/appointment/cancel/{id}', [adminController::class, 'cancel'])->name('cancel');

Route::delete('/appointment/delete_appointment/{id}', [adminController::class, 'delete_appointment'])->name('delete_appointment');

Route::get('/patient',[adminController::class, 'viewPatient'])->name('patient.show')->middleware('auth');

Route::get('/message', [adminController::class, 'message'])->name('message')->middleware('auth');

Route::delete('/delete_message/{id}', [adminController::class, 'delete_message'])->name('delete_message')->middleware('auth');

Route::get('/allUser', [adminController::class, 'allUser'])->name('allUser.show')->middleware('auth');

Route::delete('/delete_user/{id}', [adminController::class, 'delete_user'])->name('delete_user')->middleware('auth');
