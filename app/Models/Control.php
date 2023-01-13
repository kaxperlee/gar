<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    use HasFactory;

    protected $fillable = ['Nombre', 'Responsable', 'seguimiebto_id', 'Descripcion'];

    public function seguimiento(){
        return $this->belongsTo(Seguimiento::class);
    }
}
