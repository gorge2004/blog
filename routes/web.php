<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
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
// indicando a la ruta el controller a usar . EN laravel 8

Route::get('/', HomeController::class);

Route::get('cursos',[CursoController::class, 'index']);
// laravel lee de arriba abajo . si creamos la ruta create de ultima 
//tomara  cursos/{cursos} como si fuera la create
Route::get('cursos/create', [CursoController::class, 'create']);

// simbolo ? indica parametro opcional 
Route::get('cursos/{curso}/{categoria?}', [CursoController::class, 'show']);



// indicando a la ruta el controller a usar . EN laravel versiones anteriores
//Route::get('/', 'HomeController@index');
