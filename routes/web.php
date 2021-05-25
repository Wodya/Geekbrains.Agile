<?php

use App\Http\Controllers\TestController;
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

Route::resource('/test', TestController::class);

Route::get('/onePlant', [TestController::class, 'onePlant']) ->name('onePlant');

Route::group([
    'prefix' => '/plants',
    'as' => 'admin::',
    'namespace' => 'App\Http\Controllers\Admin',
    'middleware' => ['auth']
], function () {
    Route::get('/', 'NewsController@index')
        ->name('news');

    Route::get('/create', 'NewsController@createView')
        ->name('createView');

    Route::post('/create', 'NewsController@create')
        ->name('create');

    Route::get('/update/{id}', 'NewsController@updateView')
        ->name('updateView');

    Route::post('/update/{id}', 'NewsController@update')
        ->name('update');

    Route::get('/delete/{id}', 'NewsController@delete')
        ->name('delete');

    Route::get('parser', [ParserController::class, 'index'])
        ->name('parserNews');
//    Route::get('parserrr', [ParserController::class, 'currencyExchange'])
//        ->name('parserCurrency ');
});
