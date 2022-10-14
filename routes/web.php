<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderByUserController;
use App\Http\Controllers\AdminPanelController;

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

Route::get('/', [HomeController::class, 'index'])->name('main');

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/{id}', [UserController::class, 'orders'])->name('user.orders');
Route::get('/user/order/{id}', OrderByUserController::class)->name('user.by.order');

Route::middleware(['guest'])->group(function () {
    Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/auth/login', [AuthController::class, 'handleLogin'])->name('auth.handle.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

    Route::get('/admin', [AdminPanelController::class, 'index'])->name('admin.panel');

    Route::get('/admin/order', [AdminOrderController::class, 'index'])->name('admin.order');
    Route::get('/admin/order/create', [AdminOrderController::class, 'create'])->name('admin.order.create');
    Route::post('/admin/order/store', [AdminOrderController::class, 'store'])->name('admin.order.store');
    Route::get('/admin/order/{id}/edit', [AdminOrderController::class, 'edit'])->name('admin.order.edit');
    Route::post('/admin/order/update', [AdminOrderController::class, 'update'])->name('admin.order.update');
    Route::get('/admin/order/{id}/delete', [AdminOrderController::class, 'destroy'])->name('admin.order.destroy');
});


