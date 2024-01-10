<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PersonasController extends Controller
{

    public function index()
    {
        /*Funcion de l controlador que muestra todos los registros
        No requiere de parametros */

        //Crear el objeto Persona para obtener metodos de Eloquent
        $personas = Personas::all(); //Retorna todos los registros como un objeto
        //Retornar la vista
        return view('welcome', compact('personas')); //Se usa el  metodo compact para enviar el objeto a la vista
    }


    public function create()
    {
        /**Conrtolador para retornar la vista de agregar usuario */
        return view('addView');
    }


    public function store(Request $request)
    {
        /*Controlador para agregar usuario.
        Los datos los recibe por medio del objeto Request*/

        //Crear el objeto Personas para manejo de datos
        $personas = new Personas();
        $personas->nombre = $request->post('nombre'); //Se asigna los datos traidos desde el request->post
        $personas->correo = $request->post('correo');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        //Se utiliza la funcion save de Eloquent para guardar el objeto en la base de datos
        if ($personas->save()) { //Manejo de errores. En caso de error devuelve un mensaje al usuario
            return redirect()->route('personas.index')->with('message', 'Registro agregado con exito');
        } else {
            return redirect()->route('personas.index')->with('message', 'Error al agregar usuario');
        }
    }


    public function show($id)
    {
        //Obtiene un solo registro de la tabla
        $personas = Personas::find($id);
        return view('deleteView',compact('personas'));
    }
    public function showUser($id)
    {
        //Obtiene un solo registro de la tabla
        $personas = Personas::find($id);
        return view('userView',compact('personas'));
    }


    public function edit($id)
    {
        /*Controlador que regresa la vista de edicion de usuario
        El parametro que recibe es un id directo en la url*/
        $persona = Personas::find($id); //Se utiliza la funcion de Eloquent find oara traer datos de la base, tomando en cuenta de id
        /**El objeto se envia a la vista para su consulta utilizando el metodo compact() */
        return view('updateView', compact('persona'));
    }


    public function update(Request $request, $id)
    {
        /*Funciopn para editar el usuario dentro de la abse dedatos*/
        $personas = Personas::find($id);
        $personas->nombre = $request->post('nombre'); //Se asigna los datos traidos desde el request->post
        $personas->correo = $request->post('correo');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        //Se utiliza la funcion save de Eloquent para guardar el objeto en la base de datos
        if ($personas->save()) { //Manejo de errores. En caso de error devuelve un mensaje al usuario
            return redirect()->route('personas.index')->with('message', 'Registro editado con exito');
        } else {
            return redirect()->route('personas.index')->with('message', 'Error al editar usuario');
        }
    }


    public function destroy($id)
    {
        /*Funcion para eliminar un usuario*/
        $usuario = Personas::find($id);
        //Manejo de errores
        if ($usuario->delete()) {
            return redirect()->route('personas.index')->with('message', 'Usuario eliminado con exito');
        } else {
            return redirect()->route('personas.index')->with('message', 'Error al eliminar usuario');
        }
    }
}
