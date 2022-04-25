<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
Route::get('index',[StudentController::class,'index']);
Route::post('submit-form',[StudentController::class,'store'])->name('submit-form');
Route::get('get-id/{id}',[StudentController::class,'getid'])->name('get-id');
Route::get('show',[StudentController::class,'show'])->name('show');