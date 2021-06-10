<?php

use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\PlantsController;

use App\Http\Controllers\ShowController;

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MyPlantsController;
use \App\Http\Controllers\Admin\AdminPlantsController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\SocialiteController;

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
Route::resource('/myPlants',MyPlantsController::class);


Route::get('/plant/edit/{id}', [PlantsController::class, 'edit'])->name('plant.edit');
Route::put('/plant/post', [PlantsController::class, 'update'])->name('plant.update');
Route::get('/addFavor/{userId}/{plantId}', [MyPlantsController::class, 'addFavor'])->name('plant.addFavor');
Route::get('/removeFavor/{userId}/{plantId}', [MyPlantsController::class, 'removeFavor'])->name('plant.removeFavor');
Route::get('/setUserPlantDone/{userId}/{plantId}/{actionId}/{date}', [MyPlantsController::class, 'setUserPlantDone'])->name('plant.setUserPlantDone');
Route::get('/resetUserPlantDone/{userId}/{plantId}/{actionId}/{date}', [MyPlantsController::class, 'resetUserPlantDone'])->name('plant.resetUserPlantDone');

Route::get('/deletePlant', [\App\Http\Controllers\TestController::class, 'deletePlant']);
Route::get('/addPlantToFavor/{userId}/{plantId}', [\App\Http\Controllers\TestController::class, 'addPlantToFavor'])->name('addPlantToFavor');
Route::get('/removePlantFromFavor/{userId}/{plantId}', [\App\Http\Controllers\TestController::class, 'removePlantFromFavor'])->name('removePlantFromFavor');
// Route::get('/getFavorPlants', [\App\Http\Controllers\TestController::class, 'getFavorPlants'])->name('getFavorPlants');

Route::get('/calendar', [\App\Http\Controllers\MyPlantsController::class, 'calendar'])->name('calendar');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'],
     function()
{   Route::get('/account', AccountController::class) // это как профиль
    ->name('account');
    Route::resource('/myPlants',MyPlantsController::class);
    Route::get('/calendar', [\App\Http\Controllers\TestController::class, 'testCalendar'])->name('calendar');
    Route::get('/logout', function(){
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');

    Route::group(['prefix' => '/admin', 'as' => 'admin.', 'middleware' => 'role:admin'],
    function(){
    Route::resource('/plantList', AdminPlantsController::class);
    Route::resource('/users', AdminUserController::class);

    });

});

Route::group(['middleware'=>'guest', 'prefix'=>'socialite'], function() {
    Route::get('/auth/vk', [SocialiteController::class, 'init'])->name('vk.init');
    Route::get('/auth/vk/callback', [SocialiteController::class, 'callback'])->name('vk.callback');
});

