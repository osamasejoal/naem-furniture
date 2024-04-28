<?php

use App\Http\Controllers\{ProfileController, FrontendController, LoginController, LogoutController};
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



/*
|--------------------------------------------------------------------------
|                          LoginController
|--------------------------------------------------------------------------
*/
Route::get('login', [LoginController::class, 'login'])->name('login');



/*
|--------------------------------------------------------------------------
|                          LogoutController
|--------------------------------------------------------------------------
*/
Route::get('logout', [LogoutController::class, 'logout'])->name('logout');



/*
|--------------------------------------------------------------------------
|                          FrontendController
|--------------------------------------------------------------------------
*/
Route::get('/', [FrontendController::class, 'frontpage'])->name('frontpage');
