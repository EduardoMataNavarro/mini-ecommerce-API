<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenericFormController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ShipmentMethodController;
use App\Http\Controllers\PaymentMethodController;

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

/* Product routes  */ 
Route::get('/product', [ProductController::class, 'Index']);
Route::get('/product/{slug}', [ProductController::class, 'GetById']);
Route::post('/product', [ProductController::class, 'Create']);
Route::put('/product/{id}', [ProductController::class, 'Edit']);
Route::get('/product/{id}/images', [ProductController::class, 'GetWithImages']);

/* Product categories routes */
Route::resource('productcategory', ProductCategoryController::class)->except([
    'edit', 'create',
]);

/* shipment method routes */
Route::resource('shipmentmethod', ShipmentMethodController::class)->except([
    'edit', 'create',
]);

/* Payment method */
Route::resource('paymentmethod', PaymentMethodController::class)->except([
    'edit', 'create',
]);

/* Generic form routes */
Route::get('/genericform/{name}', [GenericFormController::class, 'GetByName']);



