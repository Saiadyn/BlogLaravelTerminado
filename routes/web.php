<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\MailController;

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

Route::get('/', InicioController::class);
Route::get('/biografia', function () {return view('biografia');});
Route::get('/libros', function () {return view('libros');});

    Route::get('/libro1', function () {return view('libro1');});
    Route::get('/libro2', function () {return view('libro2');});
    Route::get('/libro3', function () {return view('libro3');});
    Route::get('/libro4', function () {return view('libro4');});
    Route::get('/libro5', function () {return view('libro5');});
    Route::get('/libro6', function () {return view('libro6');});

Route::get('/mail', MailController::class);
Route::post("/mail",[MailController::class,"store"])->name("contacto.store");