<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Factura;
use App\models\Cliente;
use Faker\Generator as Faker;

$factory->define(Factura::class, function (Faker $faker) {
    return [
        'articulo'=> $faker->randomElement(['ajo', 'arroz','azucar','carne','jugo','ron','frutas']),
        'precio'=> $faker->randomElement(['25000','55000','100000','12000','2000000']),
        'descuento'=>false,
        'cliente_id'=>Cliente::inRandomOrder()->value('id')
    ];
});
