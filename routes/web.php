<?php

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

Route::get('/', [\App\Http\Controllers\FrontendController::class,'index'])->name('home');
Route::get('/packages', [\App\Http\Controllers\FrontendController::class,'packages'])->name('packages');
Route::get('/services', [\App\Http\Controllers\FrontendController::class,'services'])->name('services');
Route::get('/hooks', [\App\Http\Controllers\HookController::class,'hooks'])->name('hooks');

require __DIR__.'/auth.php';
require __DIR__.'/guest.php';
require __DIR__.'/backend.php';
