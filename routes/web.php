<?php

use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Store\HomeController as StoreHomeController;
use App\Http\Controllers\Store\Auth\LoginController as StoreLoginController;
use App\Http\Controllers\Subsidiary\Auth\LoginController as SubsidiaryLoginController;
use App\Http\Controllers\Subsidiary\DashboardController as SubsidiaryDashboardController;
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

Route::get('/', [StoreHomeController::class, 'index'])->name('home');

Route::controller(StoreLoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout')->name('logout');
});

Route::group(['prefix' => 'subsidiary', 'as' => 'subsidiary.'], function () {
    Route::controller(SubsidiaryLoginController::class)->group(function() {
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'login');
        Route::post('/logout', 'logout')->name('logout');
    });

    Route::middleware(['auth.subsidiary'])->group(function () {
        Route::get('/', [SubsidiaryDashboardController::class, 'index'])->name('dashboard');
    });
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::controller(AdminLoginController::class)->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'login');
        Route::post('/logout', 'logout')->name('logout');
    });

    Route::middleware(['auth.admin'])->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

        Route::controller(AdminProductController::class)->group(function() {
            Route::group(['prefix' => 'products', 'as' => 'product.'], function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/', 'store')->name('store');
                Route::get('/{product}/edit', 'edit')->name('edit');
                Route::put('/{product}', 'update')->name('update');
                Route::delete('/{product}', 'destroy')->name('destroy');
            });
        });
    });
});
