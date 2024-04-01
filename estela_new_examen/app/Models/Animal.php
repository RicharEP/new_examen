<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'especie',
        'recinto',
        'cuidador'
    ];
    public function Especie()
    {
        return $this->elongsTo(Especie::class, 'especie_id');
    }
    public function Actividad()
    {
        return $this->hasMany(Actividad::class, 'actividad_id');
    }
    public function Recinto()
    {
        return $this->hasMany(Recinto::class, 'recinto_id'); 
    }
    public function Cuidador()
    {
        return $this->hasMany(Cuidador::class, 'cuidador_id');
    }
}
