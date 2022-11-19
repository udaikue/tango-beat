<?php

use App\Http\Controllers\TangoController;
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

Route::get('/', [TangoController::class, 'index']);
Route::get('/new', [TangoController::class, 'add']);
Route::post('/new', [TangoController::class, 'create']);
