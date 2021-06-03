<?php

use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\PlantsController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MyPlantsController;
use \App\Http\Controllers\Admin\AdminPlantsController;
use App\Http\Controllers\Admin\AdminUserController;

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

Route::resource('/myPlants',MyPlantsController::class);
Route::get('/plant/edit/{id}', [PlantsController::class, 'edit'])->name('plant.edit');
Route::put('/plant/post', [PlantsController::class, 'update'])->name('plant.update');
Route::get('/addFavor/{userId}/{plantId}', [MyPlantsController::class, 'addFavor'])->name('plant.addFavor');
Route::get('/removeFavor/{userId}/{plantId}', [MyPlantsController::class, 'removeFavor'])->name('plant.removeFavor');



Route::get('/deletePlant', [\App\Http\Controllers\TestController::class, 'deletePlant']);
Route::get('/addPlantToFavor/{userId}/{plantId}', [\App\Http\Controllers\TestController::class, 'addPlantToFavor'])->name('addPlantToFavor');
Route::get('/removePlantFromFavor/{userId}/{plantId}', [\App\Http\Controllers\TestController::class, 'removePlantFromFavor'])->name('removePlantFromFavor');
Route::get('/getFavorPlants', [\App\Http\Controllers\TestController::class, 'getFavorPlants'])->name('getFavorPlants');
Route::get('/getFavorCalendar', [\App\Http\Controllers\TestController::class, 'getFavorCalendar']);
Route::get('/calendar', [\App\Http\Controllers\TestController::class, 'testCalendar'])->name('calendar');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'role:admin']], function()
{   Route::get('/account', AccountController::class) // это как профиль
    ->name('account');
    Route::get('/logout', function(){
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');

    Route::group(['prefix' => '/admin', 'as' => 'admin.' ], //'middleware' => 'admin'
    function() {
    Route::resource('/plantList', AdminPlantsController::class);
    Route::resource('/users', AdminUserController::class);
    
    
    });

});
