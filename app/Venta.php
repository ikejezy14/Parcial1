<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable=[
        'user_id','descripcion_venta','estado_venta', 
    ];

    protected $hidden=[
        'created_at','updated_at',
    ];
    protected $casts = [
        'estado_venta'=>'boolean',
    ];

    public function productoss(){
        return $this->hasMany('App\Producto','ventas_id');
    }
    public function users(){
        return $this->belongsTo('App\User','user_id');
    }

    public function getPreVentaAttribute(){
        return $this->users;
    }
    protected $appends=[
        'pre_venta'
    ];
}
