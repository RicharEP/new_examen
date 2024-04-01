<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model

{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'nombre',
        'contrasenia'
    ];
    public function Animal()
    {
        return $this->hasMany(Animal::class, 'usuario_id');
    }
}