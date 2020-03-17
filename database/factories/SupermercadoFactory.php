<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Supermercado;
use Faker\Generator as Faker;
use App\models\Factura;

$factory->define(Supermercado::class, function (Faker $faker) {
    return [
        'supermercado' => $faker->randomElement(['olimpica','sao','exito','supermercado corozal']),
        'caja'=>[
            "size" => $faker->randomElement(['Gracias por su compra', 'Hasta Pronto','Que tenga buen dia']),
            "ciudad" => $faker->randomElement(['Sincelejo','Corozal','tolu','cartagena','Bogota'])

        ],


        'factura_id'=>Factura::inRandomOrder()->value('id')

    ];
});
