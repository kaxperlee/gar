<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasecontrol extends Model
{
    use HasFactory;

    //Relacion uno a muchos
    public function actuals(){
        return $this->hasMany(Actual::class);
    }
}
