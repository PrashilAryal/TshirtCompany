<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OutdoorController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [OutdoorController::class, 'index']);

Route::post('/save-record', [OutdoorController::class, 'saveRecord'])->name('saveRecord');
Route::get('delete/{id}', [OutdoorController::class,'destroy']);
Route::get('edit/{id}', [OutdoorController::class,'edit']);
Route::post('/edit', [OutdoorController::class, 'updateRecord'])->name('updateRecord');