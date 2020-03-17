<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'Nom_cliente' =>$faker->name,
        'correo'=>$faker->email,
        'telefono'=> $faker->e164PhoneNumber

        
    ];
});
