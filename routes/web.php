<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;


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

Route::get('/login', [PageController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/loginPost', [LoginController::class, 'loginPost']);

Route::get('/admin', [PageController::class, 'admin']);
Route::get('/admin/create-account', [PageController::class, 'createAccount']);
Route::get('/admin/account-operator', [PageController::class, 'accountOperator']);
Route::get('/admin/stock-barang', [PageController::class, 'stockBarang']);
Route::post('/admin/createOperatorPost', [AdminController::class, 'createOperatorPost']);

Route::get('/operator', [PageController::class, 'operator']);
Route::get('/operator/pendataan-barang', [PageController::class, 'pendataanBarang']);
Route::get('/operator/stock-barang', [PageController::class, 'stockBarangOperator']);


