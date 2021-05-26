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

Route::get('/onePlant/{id}', [TestController::class, 'onePlant']) ->name('onePlant');
Route::get('catalog', [TestController::class, 'index'])->name('catalog');
Route::get('/testUpdate', [TestController::class, 'testUpdate'])->name('testUpdate');
Route::get('/myPlants', [LkController::class, 'index'])->name('myPlants');
