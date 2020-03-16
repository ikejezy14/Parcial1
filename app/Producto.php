<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable=[
        'nombre_producto','ventas_id','descripcion_producto','precio'
    ];

     protected $hidden = [
        'created_at','updated_at',
    ];  

    public function ventass(){
        return $this->belongsTo('App\Venta','ventas_id');
    }

    protected $casts = [
        'descripcion_producto'=>'array'
    ];

    public function setNombreProductoAttribute($value){
        $this->attributes['nombre_producto']=strtoupper($value);
    }
}
