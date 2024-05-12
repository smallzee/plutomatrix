<?php
// user route
Route::prefix('user')->group(function () {
    Route::middleware(['auth','verified'])->group(function (){
        Route::resource('/dashboard', \App\Http\Controllers\guest\DashboardController::class);
        Route::resource('/deposits', \App\Http\Controllers\guest\DepositController::class);
        Route::resource('/withdraw', \App\Http\Controllers\guest\WithdrawController::class);
        Route::resource('/referral', \App\Http\Controllers\guest\ReferralController::class);

        Route::get('/logout', function () {
            auth()->logout();
            return redirect('login')->with('alert_success','You have successfully logged out');
        });
    });
});
