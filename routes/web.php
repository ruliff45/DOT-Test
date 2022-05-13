<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', [LoginController::class, 'login']);

Route::get('/search', [SearchController::class, 'swapableImplementation']);

Route::get('/search_auth', [SearchController::class, 'authorizeSearch']);
