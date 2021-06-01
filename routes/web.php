<?php

use App\Http\Controllers\PlantsController;

use App\Http\Controllers\ShowController;

use App\Http\Controllers\TestController;
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


Route::resource('/test', TestController::class);

//Route::get('/onePlant', [TestController::class, 'onePlant']) ->name('onePlant');

Route::group([
    'prefix' => '/admin',
    'as' => 'admin::plants::',
//    'middleware' => ['auth']
], function () {
    Route::get('/plants', [AdminPlantsController::class, 'index'])
        ->name('plantList');

    Route::get('/onePlant/{id}', [AdminPlantsController::class, 'onePlant'])
        ->name('onePlant');

    Route::get('/create', [AdminPlantsController::class, 'createView'])
        ->name('createView');

    Route::post('/create', [AdminPlantsController::class, 'create'])
        ->name('create');

    Route::get('/update/{id}', [AdminPlantsController::class, 'updateView'])
        ->name('updateView');

    Route::post('/update/{id}', [AdminPlantsController::class, 'update'])
        ->name('update');

    Route::get('/delete/{id}', [AdminPlantsController::class, 'delete'])
        ->name('delete');


});


Route::get('/onePlant/{id}', [PlantsController::class, 'onePlant'])->name('onePlant');
Route::get('catalog', [PlantsController::class, 'index'])->name('catalog');
Route::resource('myPlants', MyPlantsController::class);

Route::get('/deletePlant', [\App\Http\Controllers\TestController::class, 'deletePlant']);
Route::get('/addPlantToFavor/{userId}/{plantId}', [\App\Http\Controllers\TestController::class, 'addPlantToFavor'])->name('addPlantToFavor');
Route::get('/removePlantFromFavor/{userId}/{plantId}', [\App\Http\Controllers\TestController::class, 'removePlantFromFavor'])->name('removePlantFromFavor');
Route::get('/getFavorPlants', [\App\Http\Controllers\TestController::class, 'getFavorPlants'])->name('getFavorPlants');
Route::get('/getFavorCalendar', [\App\Http\Controllers\TestController::class, 'getFavorCalendar']);
Route::get('/calendar', [\App\Http\Controllers\TestController::class, 'testCalendar'])->name('calendar');

Route::group([
    'prefix' => '/',
    'as' => 'plants::',

], function () {
    Route::get('/plants', [PlantsController::class, 'index'])->name('plants');
    Route::get('/onePlant', [PlantsController::class, 'onePlant'])->name('onePlant');
});

