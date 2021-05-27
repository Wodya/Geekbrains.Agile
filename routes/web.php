<?php

use App\Http\Controllers\PlantsController;
use App\Http\Controllers\ShowController;
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

Route::resource('/test', ShowController::class);

//Route::get('/onePlant', [TestController::class, 'onePlant']) ->name('onePlant');

Route::group([
    'prefix' => '/',
    'as' => 'plants::',
//    'middleware' => ['auth']
], function () {
    Route::get('/plants', [ShowController::class, 'index'])
        ->name('plantList');

    Route::get('/onePlant/{id}', [ShowController::class, 'onePlant'])
        ->name('onePlant');

    Route::get('/create', [PlantsController::class, 'createView'])
        ->name('createView');

    Route::post('/create', [PlantsController::class, 'create'])
        ->name('create');

    Route::get('/update/{id}', [PlantsController::class, 'updateView'])
        ->name('updateView');

    Route::post('/update/{id}', [PlantsController::class, 'update'])
        ->name('update');

    Route::get('/delete/{id}', [PlantsController::class, 'delete'])
        ->name('delete');


});

Route::get('/onePlant/{id}', [ShowController::class, 'onePlant'])->name('onePlant');
Route::get('/Plants', [ShowController::class, 'index'])->name('Plant List');


