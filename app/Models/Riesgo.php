<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riesgo extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre'];

    public function seguimiento(){
        return $this->belongsTo(Seguimiento::class);
    }
}
