<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Venta;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Venta::class, function (Faker $faker) {
    return [
        'user_id'=>function(){
            return factory(App\User::class)->create()->id;
        },
        'descripcion_venta'=>$faker->paragraph,
        'estado_venta'=>$faker->boolean(),
    ];
});
