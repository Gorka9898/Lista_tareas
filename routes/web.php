<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorTareas;

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



Route::post('/tarea', [ControladorTareas::class, 'anadir']);
Route::get('/', [ControladorTareas::class, 'ensenar']);
Route::delete('/tarea/{id}', [ControladorTareas::class, 'borrar']);
