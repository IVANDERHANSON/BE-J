<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\ShoeController;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact-us', function () {
    return view('contactUs');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/add-product', [ShoeController::class, 'create']);
Route::post('/add-product1', [ShoeController::class, 'create1']);
Route::get('/product', [ShoeController::class, 'view']);
Route::get('/edit-product/{id}', [ShoeController::class, 'edit']);
Route::patch('/update-product/{id}', [ShoeController::class, 'update']);
Route::delete('/delete-product/{id}', [ShoeController::class, 'delete']);

Route::get('/add-category', [CategoryController::class, 'add']);
Route::post('/add-category1', [CategoryController::class, 'add1']);

Route::get('/add-shipment', [ShipmentController::class, 'add']);
Route::post('/add-shipment1', [ShipmentController::class, 'add1']);

Route::get('/add-order/{id}', [OrderController::class, 'add']);
Route::post('/add-order1', [OrderController::class, 'add1']);
