<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    //listar Usuario
    public function index(){
        $usuarios=Usuario::get();
        return $usuarios;
    }
    //ver un Usuario
    public function show($id){
        $usuarios = Usuario::find($id);
        if (is_null($usuarios)){
            return 'EL usuario buscado no existe';
        }
        return $usuarios;
    }
    //crear un Usuario
    public function store(Request $request){
        
        $params = $request->all();
        $usuarios = Usuario::create([
            'nombre'=>$params['nombre'],
            'contrasenia'=>$params['contrasenia'],
        ]);
        return $usuarios;
    }
    # Actualizar Usuario
    public function update($id, Request $request)
    {
        $params = $request->all();
        $usuarios = Usuario::find($id)->update([
            'nombre'=>$params['nombre'],
            'contrasenia'=>$params['contrasenia'],
        ]);

        return $usuarios ? 'El usuario fue actualizado.': 'Error al actualizar.';
    }

    # Eliminar un Usuario
    public function destroy($id)
    {
        $usuarios = Usuario::find($id)->delete();

        if ($usuarios) {
            return 'usuario eliminado.';
        } else {
            return 'No se pudo eliminar.';
        }
    }
}