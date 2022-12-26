<?php

use App\Http\Controllers\SeriesController;
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
    return redirect('/series');
});

Route::resource('/series', SeriesController::class)
    ->except(['show']);


/**
    Route::resource('/series', SeriesController::class)
        ->only([
            'index',
            'create',
            'edit',
            'store',
            'update',
            'destroy'
        ]);
 */

/**
    Route::controller(SeriesController::class)->group(function () {
        Route::get('/series', 'index')->name('series.index');
        Route::get('/series/create', 'create')->name('series.create');
        Route::get('/series/edit/{$id}', 'edit')->name('series.edit');
        Route::post('/series/store', 'store')->name('series.store');
        Route::post('/series/update/{$id}', 'update')->name('series.update');
        Route::delete('/series/destroy/{id}', 'destroy')->name('series.destroy');
    });
*/
