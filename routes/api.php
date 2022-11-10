<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Models\Product;
use App\Http\Controllers\API\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/product', [ProductController::class, 'index']);
Route::middleware('auth:sanctum')->get('/auth/logout', [AuthController::class, 'logout']);

Route::post('/token/create', [AuthController::class, 'createToken']);


//class ProductTrasform
//{
//    public static function transform($products){
//        $data = [];
//        foreach ($products as $product) {
//            $result = [
//                'id' => $product->id,
//                'title' => $product->title,
//            ];
//            if ($product->price < 50) {
//                $data[] = $result;
//            }
//        }
//        return $data;
//    }
//}
//
//
//
//Route::get('/product-transform', function () {
//    return ProductTrasform::transform(Product::all());
////    return \App\Models\Product::all();
//});
