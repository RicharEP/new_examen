<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'especialidad'
 
   
    ];
    public function Animal()
    {
        return $this->hasMany(Animal::class, 'animal_id');
    }
    public function Recinto()
    {
        return $this->hasMany(Recinto::class, 'recinto_id');
    }
}
