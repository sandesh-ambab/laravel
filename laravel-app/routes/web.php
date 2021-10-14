<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;


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

Route::get('index',[CrudController::class, 'create']);
Route::get('index',[CrudController::class, 'show']);
Route::get('delete/{id}',[CrudController::class, 'destroy']);
Route::get('edit/{id}',[CrudController::class, 'edit']);
Route::post('update/{id}',[CrudController::class, 'update'])->name('update');
Route::post('index',[CrudController::class, 'store']);