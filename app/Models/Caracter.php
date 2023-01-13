<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracter extends Model
{
    use HasFactory;

    //Relacion uno a muchos
    public function incidencias(){
        return $this->hasMany(Incidencia::class);
    }
}
