<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Producto;
use App\Venta;
use Faker\Generator as Faker;

$factory->define(App\Producto::class, function (Faker $faker) {
    return [
        'nombre_producto'=>$faker->colorName(),
        'ventas_id'=>function(){
            return factory(App\Venta::class)->create()->id;
        },
        'descripcion_producto' => [
            'Color'=>$faker->colorName(),
             'Estado' =>$faker->randomDigit(0,1),
        ],
        'precio'=>$faker->randomNumber(),
    ];
});
