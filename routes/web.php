<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppointmentController;

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
//     return view('home');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('home', [HomeController::class, 'index'])->name('Home');

Route::get('about-us', [AboutController::class, 'index'])->name('About');
Route::get('contact-us', [HomeController::class, 'contact'])->name('Contact');

Route::get('Services', [ServicesController::class, 'index'])->name('Services');

Route::get('Blogs', [BlogsController::class, 'index'])->name('Blogs');
Route::get('admin', [DashboardController::class, 'index'])->name('Dashboard');

Route::get('/admin-services', [ServicesController::class, 'admin'])->name('Admin-Services');

Route::get('/admin-blogs', [BlogsController::class, 'admin'])->name('Admin-Blogs');

Route::get('/add-service', [ServicesController::class, 'create'])->name('Add-Service');

Route::post('/insert-service', [ServicesController::class, 'insert_services'])->name('Insert-Service');

Route::get('/add-blog', [BlogsController::class, 'create'])->name('Add-Blog');

Route::post('upload-blog', [BlogsController::class, 'upload_blog'])->name('Upload-Blog');

Route::get('admin-about', [AboutController::class, 'admin_about'])->name('Admin-About');

Route::get('add-about', [AboutController::class, 'create'])->name('Add-About');

Route::get('/edit-blog/{id}', [BlogsController::class, 'edit'])->name('Edit-Blog');

Route::get('/delete-service/{id}', [ServicesController::class, 'destroy'])->name('Delete-Service');



Route::get('/admin', [AppointmentController::class, 'index'])->name('appointments.index');
Route::get('appointments/book', [AppointmentController::class, 'bookAppointment'])->name('appointment.book');
Route::post('appointments/book', [AppointmentController::class, 'storeAppointment'])->name('appointment.store');
Route::get('appointments/confirmation/{appointmentNumber}/{name}/{age}/{address}', [AppointmentController::class, 'confirmation'])->name('appointment.confirmation');
Route::put('appointments/{id}/finish', [AppointmentController::class, 'finishAppointment'])->name('appointment.finish');

// Route::get('appointments/confirmation/{appointmentNumber}/{name}/{age}/{address}', [AppointmentController::class, 'confirmation'])->name('appointment.confirmation');
Route::get('appointments/download/{appointmentNumber}/{name}/{age}/{address}/{appointmentDate}', [AppointmentController::class, 'downloadConfirmation'])->name('appointment.downloadConfirmation');







// Route::get('Frontend/home',[HomeController::class, 'index'])->name('home');
