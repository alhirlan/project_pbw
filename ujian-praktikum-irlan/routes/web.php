<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateProviderController;
use App\Http\Controllers\DataProviderController;

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

Route::get('/', [CreateProviderController::class, 'index'])->name('main/index');
Route::get('/show-detail/{provider}', [CreateProviderController::class, 'show'])->name('main/show');

Route::get('/provider', [CreateProviderController::class, 'provider'])->name('main/provider');
Route::post('/provider', [CreateProviderController::class, 'createProvider'])->name('provider/create');

Route::get('/edit-provider/{provider}', [CreateProviderController::class, 'editProvider'])->name('edit/provider');
Route::put('/edit-provider/{provider}', [CreateProviderController::class, 'prosesEditProvider'])->name('edit/provider/proses');

Route::delete('/delete-provider/{provider}', [CreateProviderController::class, 'deleteProvider'])->name('delete/provider');

Route::get('/data-provider', [CreateProviderController::class, 'dataProvider'])->name('main/data-provider');
Route::post('/data-provider', [DataProviderController::class, 'storeDataProvider'])->name('data-provider/create');
Route::get('/edit-data-provider/{dataprovider}-{provider}', [DataProviderController::class, 'editDataProvider'])->name('edit/data_provider');
Route::put('/edit-data-provider/{dataprovider}-{provider}', [DataProviderController::class, 'prosesEditDataProvider'])->name('edit/data_provider/proses');

Route::delete('/delete-data-provider/{dataprovider}-{provider}', [DataProviderController::class, 'deleteDataProvider'])->name('delete/data_provider');
