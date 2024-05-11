<?php
// user route
Route::prefix('user')->group(function () {
    Route::middleware(['auth','verified'])->group(function (){
        Route::resource('/dashboard', \App\Http\Controllers\client\DashboardController::class);
        Route::get('/logout', function () {
            auth()->logout();
            return redirect('login')->with('alert_success','You have successfully logged out');
        });
    });
});
