<?php

use App\Http\Controllers\Customer\CustomerAuthController;
use Illuminate\Support\Facades\Route; 

Route::middleware('auth:customer')->group(function () {
    Route::post('logout', [CustomerAuthController::class, 'logout'])->name('customer.logout');

    // Add other customer-protected routes here (e.g., dashboard, profile, etc.)
});
