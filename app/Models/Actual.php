<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actual extends Model
{
    use HasFactory;

    protected $fillable = ['Nombre', 'Responsable', 'clasecontrol_id','seguimiebto_id', 'Descripcion'];


    public function seguimiento(){
        return $this->belongsTo(Seguimiento::class);
    }

    public function clasecontrol(){
        return $this->belongsTo(Clasecontrol::class);
    }
}
