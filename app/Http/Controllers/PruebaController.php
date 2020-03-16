<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Producto;
use App\Venta;

class PruebaController extends Controller
{
    public function index(){
        $users=User::find(67);
        $users2=$users->email_password;
        return ($users2);
    }

    public function index2(){
        $producto2=Producto::all();
        return ($producto2);
    }

    public function index3(){
        $venta=Venta::find(35);
        $venta2= $venta->pre_venta;
        return $venta2;
    }


}
