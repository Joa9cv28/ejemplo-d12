<?php

use  App\Http\Controllers\SitioController;
use  App\Http\Controllers\TareaController;
use App\Models\Contacto;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto/{tipo?}', [SitioController::class, 'contactoForm']);

Route::post('/contacto', [SitioController::class, 'contactoSave']);

Route::resource('tarea', TareaController::class);
//Route::get('/tarea', [TareaController::class, 'index']);
//Route::get('/tarea/create', [TareaController::class, 'create']);