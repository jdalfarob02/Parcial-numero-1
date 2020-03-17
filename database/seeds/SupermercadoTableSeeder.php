<?php

use Illuminate\Database\Seeder;
use App\models\Supermercado;

class SupermercadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Supermercado::class,4)->create();
    }
}
