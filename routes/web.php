<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenericController;

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


Route::get('/', [GenericController::class, 'lending']);
Route::get('/generate-token', [GenericController::class, 'generateToken']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();


    Route::post('/oauth-access-tokens', [GenericController::class, 'generateToken'])->name('voyager.oauth-access-tokens.store ');


});
