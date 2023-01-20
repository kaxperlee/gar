<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
    use HasFactory;

    protected $fillable = ['Fecha','delito_id', 'manejo_id','calificacion_id','Observaciones'];

    //Relacion uno a muchos
    public function riesgos(){
        return $this->hasMany(Riesgo::class);
    }

    //Relacion uno a muchos
    public function controls(){
        return $this->hasMany(Control::class);
   }

   //Relacion uno a muchos
   public function actuals(){
    return $this->hasMany(Actual::class);
}

   public function delito(){
        return $this->belongsTo(Delito::class);
   }

   public function manejo(){
        return $this->belongsTo(Manejo::class);
   }

   public function calificacion(){
        return $this->belongsTo(Calificacion::class);
   }

   //Relación uno a muchos polimórfica
   public function files(){
    return $this->morphMany(File::class,'fileable');
}

}
