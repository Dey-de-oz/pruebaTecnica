<?php

use App\Http\Controllers\PersonasController;//Se importa el controlador necesario
use Illuminate\Support\Facades\Route;

/**Ruta principal. Se define un nombre de ruta en caso de que la url asignada se cambie */
Route::get('/',[PersonasController::class,'index'])->name('personas.index');//se utiliza el metodo name para nombrar la ruta
/**Ruta para formulario de agregar usuario.*/
Route::get('/add',[PersonasController::class,'create'])->name('personas.add');
/**Ruta para ver informacion de un usuario.*/
Route::get('/user/{id}',[PersonasController::class,'showUser'])->name('personas.user');
/**Ruta para formulario de agregar usuario.*/
Route::get('/confirmDelete/{id}',[PersonasController::class,'show'])->name('personas.show');
/**Ruta para formulario de edicion usuario. Se pasa como parametro el ID de usuario con el mismo nombre que en elc ontrolador*/
Route::get('/edit/{id}',[PersonasController::class,'edit'])->name('personas.edit');
/**Ruta para agregar usuario. Se utiliza el metodo POST para enviar los datos*/
Route::post('/save',[PersonasController::class,'store'])->name('personas.save');
/**Ruta para editar usuario. Se utiliza el metodo PUT para enviar los datos*/
Route::put('/update/{id}',[PersonasController::class,'update'])->name('personas.update');
/**Ruta para eliminar usuario. Se utiliza el metodo DELETE para enviar los datos*/
Route::delete('/drop/{id}',[PersonasController::class,'destroy'])->name('personas.drop');

