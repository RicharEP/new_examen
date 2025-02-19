<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'dia',
        'horario'
    ];
    
    public function Animal()
    {
        return $this->hasMany(Animal::class, 'usuario_id');
    }

}
