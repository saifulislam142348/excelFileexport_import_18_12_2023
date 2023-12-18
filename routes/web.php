<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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
Route::get('/index', [UserController::class, 'index'])->name('import-view');
Route::post('/index/store', [UserController::class, 'store'])->name('store');
Route::post('/index/science', [UserController::class, 'science'])->name('science');
Route::get('/export-users', [UserController::class, 'exportUsers'])->name('export-data');
