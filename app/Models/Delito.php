<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delito extends Model
{
    use HasFactory;

    public function incidencias(){

        return $this->hasMany(Incidencia::class);
    }

    public function seguimiento(){

        return $this->hasOne(Seguimiento::class);
    }
}
