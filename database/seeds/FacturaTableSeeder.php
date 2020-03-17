<?php

use Illuminate\Database\Seeder;

class FacturaTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(App\Models\Factura::class,7)->create();
    }
}
