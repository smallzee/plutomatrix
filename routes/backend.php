<?php
Route::prefix('panel')->group(function () {
    Route::resource('/login', \App\Http\Controllers\backend\AuthenticationController::class,['index']);
    Route::middleware(['IsAdmin','auth','verified'])->group(function (){
        Route::resource('/dashboard', \App\Http\Controllers\backend\DashboardController::class);
        Route::resource('/roles', \App\Http\Controllers\backend\RolesController::class);
        Route::resource('/clients', \App\Http\Controllers\backend\ClientsController::class);
        Route::resource('/administrative', \App\Http\Controllers\backend\AdminController::class);
        Route::resource('/payment-method', \App\Http\Controllers\backend\PaymentMethodController::class);
        Route::get('/logout', function () {
            auth()->logout();;
            return redirect(url('panel/login'))->with('alert_success','You have successfully logged out');
        });
    });
});
