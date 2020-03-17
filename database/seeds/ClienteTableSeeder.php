<?php

use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(App\Models\Cliente::class,10)->create();
    }
}
