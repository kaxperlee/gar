<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;

    protected $fillable = ['Fecha', 'InformarA','caracter_id','Descripcion','RiesgoA','InformarA','Remitente','canal_id',
    'FechaT','Propuesta','NivelRP','ComunicarA', 'Autoria', 'Observaciones','Propuestas','Estado'];

    public function delito(){

        return $this->belongsTo(Delito::class);
    }

    public function canal(){

        return $this->belongsTo(Canal::class);
    }

    public function caracter(){

        return $this->belongsTo(Caracter::class);
    }
}
