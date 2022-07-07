<?php

use App\Http\Controllers\HomeController;
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

//RUTA PARA IR A LA SECCIÓN DE LOGUEADOS.
Route::middleware(['auth:sanctum','verified'])->get('/',[HomeController::class,'index'])->name('name');




