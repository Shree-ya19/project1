<?php

use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UploadController;
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

//Route::get('/', function () {
 //   return view('welcome');
//});




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
Route::get('about_us', [FrontendController::class, 'about_us'])->name('about_us');
Route::get('form_of_interest', [FrontendController::class, 'form_of_interest'])->name('form_of_interest');
Route::post('storeInterestForm', [FrontendController::class, 'storeInterestForm'])->name('storeInterestForm');
Route::get('reviewall', [FrontendController::class, 'reviewall'])->name('frontend.reviewall');
Route::get('give_review', [FrontendController::class, 'give_review'])->name('frontend.give_review');
Route::post('storeSubmitReview', [FrontendController::class, 'storeSubmitReview'])->name('storeSubmitReview');
Route::get('/search',[SearchController::class,'search'])->name('search');
Route::get('calander',[FrontendController::class,'calander'])->name('calander');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Ck editor
Route::post('upload', [UploadController::class, 'store'])->name('upload');

});
Route::get('customer/register',[CustomerAuthController::class,'registerPage'])->name('customer.register');
Route::post('customer/register',[CustomerAuthController::class,'register'])->name('customer.register');

Route::get('customer/login',[CustomerAuthController::class,'loginPage'])->name('customer.loginPage');
Route::post('customer/login',[CustomerAuthController::class,'login'])->name('customer.login');



Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'login']);
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');
});

require __DIR__.'/auth.php';
require __DIR__.'/customer.php';

