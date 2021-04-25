<?php

use App\Http\Controllers\IdentifierController;
use App\Http\Controllers\SunDockController;
use App\Http\Middleware\CheckMiddleware;
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

Route::get('/SunDock',  [SunDockController::class, 'show'])->middleware(CheckMiddleware::class);
Route::post('/SunDock/new',  [IdentifierController::class, 'makeIdentifier'])->middleware(CheckMiddleware::class);
Route::get('/SunDock/post',  [SunDockController::class, 'makeToPost'])->middleware(CheckMiddleware::class);
Route::post('/SunDock/post',  [SunDockController::class, 'post'])->middleware(CheckMiddleware::class);
Route::get('/SunDock/post/{uuid}',  [SunDockController::class, 'detail'])->middleware(CheckMiddleware::class);
Route::get('/', function () {
    return redirect("/SunDock");
})->middleware(CheckMiddleware::class);;
