<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

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

Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create']) ->name('cursos.create');

Route::get('cursos/{id}', [CursoController::class, 'show']) ->name('cursos.show');


Route::post('cursos',[CursoController::class,'store'])-> name('cursos.store') ;

Route::get('cursos/{curso}/edit',[CursoController::class,'edit']) ->name('cursos.edit');

Route::put('cursos/{curso}',[CursoController::class,'update'])-> name('cursos.update') ;

Route::delete('cursos/{curso}',[CursoController::class,'destroy'])-> name('cursos.destroy');

