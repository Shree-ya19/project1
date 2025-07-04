<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdmissionController;
use App\Http\Controllers\Admin\BeyondAcademicController;
use App\Http\Controllers\Admin\BeyondAcedemicController; // <-- Check spelling here, is this intentional?
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\CoreValueController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\GoldenAbcMemberController;
use App\Http\Controllers\Admin\InterestFormController;
use App\Http\Controllers\Admin\LatestNewsController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\SystemSettingController;
use App\Http\Controllers\Admin\UpcomingEventsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WelcomeController;
use App\Models\Calendar;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('admin.dashboard');

Route::get('profile', [DashboardController::class, 'profile'])->name('profile');
Route::put('profile', [DashboardController::class, 'profileUpdate'])->name('profile.update');
Route::post('logout', [DashboardController::class, 'logout'])->name('profile.logout');

Route::resource('systemSetting', SystemSettingController::class);
Route::resource('calendar', CalendarController::class);
Route::resource('goldenmember', GoldenAbcMemberController::class);
Route::resource('contact', ContactMessageController::class);
Route::resource('interestform', InterestFormController::class);
Route::resource('latestnews', LatestNewsController::class);
Route::resource('upcomingevents', UpcomingEventsController::class);
Route::resource('beyondacademic', BeyondAcademicController::class);

Route::resource('user', UserController::class);
Route::resource('admission', AdmissionController::class);
Route::resource('corevalue', CoreValueController::class);
Route::resource('feature', FeatureController::class);
Route::resource('level', LevelController::class);
Route::resource('subject', SubjectController::class);
Route::resource('about', AboutController::class);
Route::resource('welcome', WelcomeController::class);
Route::resource('customer', CustomerController::class);
Route::resource('review', ReviewController::class);
Route::put('review/{review}/approve', [ReviewController::class, 'approve'])->name('review.approve');

