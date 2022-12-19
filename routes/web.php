<?php

use App\Http\Controllers\Frontstore\HomeController as FrontstoreHomeController;
use App\Http\Controllers\Store\Auth\LoginController as StoreLoginController;
use App\Http\Controllers\Store\DashboardController as StoreDashboardController;
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

Route::get('/', [FrontstoreHomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'loja', 'as' => 'store.'], function () {
    Route::get('/login', [StoreLoginController::class, 'index'])->name('login');
    Route::post('/login', [StoreLoginController::class, 'store']);

    Route::middleware(['auth:store'])->group(function () {
        Route::get('/', [StoreDashboardController::class, 'index'])->name('dashboard');
    });
});
