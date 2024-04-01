<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'recintoAsociado'
 
   
    ];
    public function Animal()
    {
        return $this->elongsTo(Animal::class, 'animal_id');
    }
    public function Recinto()
    {
        return $this->hasMany(Recinto::class, 'recinto_id');
    }
    
}
