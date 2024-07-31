<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('home');
});

// Route::get('/profile', function () {
//     return view('user-page');
// });
Route::group(['prefix' => '/register'], function(){
    Route::get('/', [UsersController::class, 'index'])-> name('user.index')->middleware('guest');
    Route::get('/create', [UsersController::class, 'create'])-> name('user.create');
    Route::post('/', [UsersController::class, 'store'])-> name('user.store');
    Route::get('/{id}', [UsersController::class, 'show'])-> name('user.show');
    Route::get('/{id}/edit', [UsersController::class, 'edit'])-> name('user.edit');
    // Route::put('/{id}', [UsersController::class, 'update'])-> name('user.update');
    // Route::delete('/{id}', [UsersController::class, 'destroy'])-> name('user.destroy');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
