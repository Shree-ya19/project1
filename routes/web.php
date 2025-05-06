<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
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




Route::get('/', [FrontendController::class, 'home'])->name('welcome');
Route::get('programs', [FrontendController::class, 'programs'])->name('programs');
Route::get('admission', [FrontendController::class, 'admission'])->name('admission');
Route::get('news_events', [FrontendController::class, 'news_events'])->name('news_event');
Route::get('golden_family', [FrontendController::class, 'golden_family'])->name('golden_family');
Route::get('event_calander', [FrontendController::class, 'event_calander'])->name('event_calander');
Route::get('beyond_acedemics', [FrontendController::class, 'beyond_acedemics'])->name('beyond_acedemics');
Route::post('storeContactMessage', [FrontendController::class, 'storeContactMessage'])->name('storeContactMessage');
Route::get('contact_us', [FrontendController::class, 'contact_us'])->name('contact_us');
Route::get('core_values', [FrontendController::class, 'core_values'])->name('core_values');
Route::get('student_login', [FrontendController::class, 'student_login'])->name('student_login');
Route::get('student_register', [FrontendController::class, 'student_register'])->name('student_register');
Route::get('about_us', [FrontendController::class, 'about_us'])->name('about_us');
Route::get('form_of_interest', [FrontendController::class, 'form_of_interest'])->name('form_of_interest');
Route::post('storeInterestForm', [FrontendController::class, 'storeInterestForm'])->name('storeInterestForm');
Route::get('gallery', [FrontendController::class, 'gallery'])->name('gallery');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
