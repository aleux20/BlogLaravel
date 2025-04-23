<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use \App\Mail\ContactUsMailable;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', HomeController::class)->name('home');

Route::resource('cursos', CursoController::class);

Route::view('about', 'about')->name('about');

// Route::get('contact_us', function () {
//     Mail::to('hansalejandroca@gmail.com')->send(new ContactUsMailable);
//     return 'Email sent successfully';
// })->name('contact_us');

Route::get('contact_us', [ContactUsController::class, 'index'])->name('contact_us.index');
Route::post('contact_us', [ContactUsController::class, 'store'])->name('contact_us.store');
