<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetFromAPIController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/get_province', [GetFromAPIController::class, 'getProvince']);
Route::get('/get_city', [GetFromAPIController::class, 'getCity']);
Route::get('/get_specific_city/{id}', [GetFromAPIController::class, 'getSpecificCity']);
Route::get('/get_specific_province/{id}', [GetFromAPIController::class, 'getSpecificProvince']);
