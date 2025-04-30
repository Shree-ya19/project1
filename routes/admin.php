<?php

use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GoldenAbcMemberController;
use App\Http\Controllers\Admin\InterestFormController;
use App\Http\Controllers\Admin\LatestNewsController;
use App\Http\Controllers\Admin\SystemSettingController;
use App\Http\Controllers\Admin\UpcomingEventsController;
use App\Models\Calendar;
use Illuminate\Support\Facades\Route; 


Route::get('/dashboard', function () { 
return View('dashboard'); 
})->middleware(['auth', 'verified'])->name('admin.dashboard'); 

Route::get('profile',[DashboardController::class,'profile'])->name('profile'); 
Route::put('profile',[DashboardController::class,'profileUpdate'])->name('profile.update'); 
Route::post('logout',[DashboardController::class,'logout'])->name('profile.logout'); 

Route::resource('systemSetting',SystemSettingController::class);
Route::resource('calendar',CalendarController::class);
Route::resource('goldenfamily',GoldenAbcMemberController::class);
Route::resource('contact',ContactMessageController::class);
Route::resource('interestform',InterestFormController::class);
Route::resource('latestnews',LatestNewsController::class);
Route::resource('upcomingevents',UpcomingEventsController::class);