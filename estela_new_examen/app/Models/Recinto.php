<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recinto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'capacidad'
 
   
    ];
    public function Animal()
    {
        return $this->elongsTo(Animal::class, 'animal_id');
    }
    public function Especie()
    {
        return $this->hasMany(Especie::class, 'especie_id');
    }
    public function Cuidador()
    {
        return $this->elongsTo(Cuidador::class, 'cuidador_id');
    }
    
}
