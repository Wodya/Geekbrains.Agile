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
Route::resource('myPlants',MyPlantsController::class);

Route::get('/deletePlant', [\App\Http\Controllers\TestController::class, 'deletePlant']);
Route::get('/addPlantToFavor/{userId}/{plantId}', [\App\Http\Controllers\TestController::class, 'addPlantToFavor'])->name('addPlantToFavor');
Route::get('/removePlantFromFavor/{userId}/{plantId}', [\App\Http\Controllers\TestController::class, 'removePlantFromFavor'])->name('removePlantFromFavor');
Route::get('/getFavorPlants', [\App\Http\Controllers\TestController::class, 'getFavorPlants']);
Route::get('/getFavorCalendar', [\App\Http\Controllers\TestController::class, 'getFavorCalendar']);
Route::get('/calendar', [\App\Http\Controllers\TestController::class, 'getFavorCalendar'])->name('calendar');

