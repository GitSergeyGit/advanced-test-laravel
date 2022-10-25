<?php

use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderByUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Oauth\GoogleController;
use App\Http\Controllers\Oauth\GitHubController;

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
Route::get('/oauth/github/callback', GitHubController::class)->name('oauth.github.callback');
Route::get('/oauth/google/callback', GoogleController::class)->name('oauth.google.callback');

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/{id}', [UserController::class, 'orders'])->name('user.orders');
Route::get('/user/order/{id}', OrderByUserController::class)->name('user.by.order');


Route::prefix('page')->group(function (){
    Route::get('/', [PageController::class, 'index'])->name('page');
    Route::get('/{id}', [PageController::class, 'show'])->name('page.show');
    Route::post('/comment/{id}', [PageController::class, 'addComment'])->name('page.add.comment');
});

Route::get('/comments', CommentController::class)->name('comments');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::middleware(['guest'])->group(function () {
    Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/auth/login', [AuthController::class, 'handleLogin'])->name('auth.handle.login');
});

//Route::middleware(['auth', 'can:store,App\Models\Order'])->group(function () {
Route::middleware(['auth'])->group(function () {
    Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

    Route::get('/admin', [PanelController::class, 'index'])->name('admin.panel');

    Route::get('/admin/order', [OrderController::class, 'index'])->name('admin.order');
    Route::get('/admin/order/create', [OrderController::class, 'create'])->name('admin.order.create')
        ->can('create', 'App\Models\Order');
    Route::post('/admin/order/store', [OrderController::class, 'store'])->name('admin.order.store');
    Route::get('/admin/order/{id}/edit', [OrderController::class, 'edit'])->name('admin.order.edit');
    Route::post('/admin/order/update', [OrderController::class, 'update'])->name('admin.order.update');
    Route::get('/admin/order/{id}/delete', [OrderController::class, 'destroy'])->name('admin.order.destroy');

    Route::get('/admin/product', [AdminProductController::class, 'index']);
    Route::get('/admin/product/{id}', [AdminProductController::class, 'show']);
});


