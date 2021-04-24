<?php

use App\Http\Controllers\IdentifierController;
use App\Http\Controllers\SunDockController;
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

Route::get('/SunDock',  [SunDockController::class, 'show']);
Route::get('/SunDock/post',  [SunDockController::class, 'makeToPost']);
Route::post('/SunDock/post',  [SunDockController::class, 'post']);
Route::post('/SunDock/new',  [IdentifierController::class, 'makeIdentifier']);
Route::get('/', function () {
    return redirect("/SunDock");
});