<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminOrderController;
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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/user', [\App\Http\Controllers\UserController::class, 'index']);
Route::get('/user/{id}', [\App\Http\Controllers\UserController::class, 'orders'])->name('user.orders');

Route::get('/admin/order', [AdminOrderController::class, 'index'])->name('admin.order');
Route::get('/admin/order/create', [AdminOrderController::class, 'create'])->name('admin.order.create');
Route::post('/admin/order/store', [AdminOrderController::class, 'store'])->name('admin.order.store');
Route::get('/admin/order/{id}/edit', [AdminOrderController::class, 'edit'])->name('admin.order.edit');
Route::post('/admin/order/update', [AdminOrderController::class, 'update'])->name('admin.order.update');
Route::get('/admin/order/{id}/delete', [AdminOrderController::class, 'destroy'])->name('admin.order.destroy');

