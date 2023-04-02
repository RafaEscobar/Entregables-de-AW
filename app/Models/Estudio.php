<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    use HasFactory;

    protected $fillable = [ 'universidad', 'grado', 'carrera', 'usuario_id' ];

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'usario_id');
    }
}
