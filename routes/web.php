<?php

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
