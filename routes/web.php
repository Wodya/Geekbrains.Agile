<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LkController;

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

Route::resource('/test', TestController::class);

Route::get('/onePlant/{id}', [TestController::class, 'onePlant']) ->name('onePlant');
Route::get('/testUpdate', [TestController::class, 'testUpdate']);
Route::get('/lk', [LkController::class, 'index'])->name('lk');
Route::delete('/lk/delete', [LkController::class, 'destroy'])->name('lk.delete');
