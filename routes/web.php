<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PanitiaController;
use App\Http\Controllers\ArisanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landingPage');
});
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);

Route::middleware('auth')->group(function () {
    Route::middleware('is_panitia')->group(function () {
        Route::prefix('panitia')->group(function () {
            Route::get('/', [PanitiaController::class, 'index']);
            Route::prefix('arisan')->group(function () {
                Route::get('/', [ArisanController::class, 'index']);
                Route::get('/tambah', [ArisanController::class, 'create']);
                Route::post('/tambah', [ArisanController::class, 'store']);
            });

            Route::prefix('profile')->group(function () {
                Route::get('/', [ProfileController::class, 'index']);
                Route::put('/', [ProfileController::class, 'update']);
            });
        });
    });
});
