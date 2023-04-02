<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Labor extends Model
{
    use HasFactory;
    protected $table = "labores";
    protected $fillable = [ 'nomEmpresa', 'dir', 'usuario_id' ];

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'usario_id');
    }
}
