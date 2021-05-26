<?php

use App\Http\Controllers\PlantsController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MyPlantsController;
use \App\Http\Controllers\Admin\AdminPlantsController;

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

Route::get('/onePlant/{id}', [PlantsController::class, 'onePlant']) ->name('onePlant');
Route::get('catalog', [PlantsController::class, 'index'])->name('catalog');
Route::get('/myPlants', [MyPlantsController::class, 'index'])->name('myPlants');

Route::get('/testUpdate', [AdminPlantsController::class, 'edit'])->name('testUpdate');
