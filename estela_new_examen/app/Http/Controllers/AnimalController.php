<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    //listar Animales
    public function index(){
        $animals=Animal::get();
        return $animals;
    }
    //ver un Animal
    public function show($id){
        $animals = Animal::find($id);
        if (is_null($animals)){
            return 'El animal buscado no existe';
        }
        return $animals;
    }
    //crear un Animal
    public function store(Request $request){
        
        $params = $request->all();
        $autors = Animal::create([
            'nombre'=>$params['nombre']
        ]);
        return $$animals;
    }
    # Actualizar Animal
    public function update($id, Request $request)
    {
        $params = $request->all();
        $autors = Animal::find($id)->update([
            'nombre' => $params['nombre'],
        ]);

        return $autors ? 'El Animal fue actualizado.': 'Error al actualizar.';
    }

    # Eliminar un Animal
    public function destroy($id)
    {
        $animals = Animal::find($id)->delete();

        if ($animals) {
            return 'Animal eliminado.';
        } else {
            return 'No se pudo eliminar.';
        }
    }
}