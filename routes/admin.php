<?php 
use Illuminate\Support\Facades\Route; 
Route::get('/dashboard', function () { 
return View('admin.dashboard'); 
})->middleware(['auth', 'verified'])->name('admin.dashboard'); 