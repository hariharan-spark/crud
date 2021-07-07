<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;

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

    // Route::get('/', function () {
    //     return view('welcome');
    // });
 Route::get('/form', [CustomersController::class, 'index']);
Route::post('/form', [CustomersController::class, 'insert'])->name('form');
Route::get('/form/{id}', [CustomersController::class, 'show']); 
Route::POST('/customers-update', [CustomersController::class, 'update'])->name('customers-update');
Route::get('/customers-delete/{id}', [CustomersController::class, 'delete']);


