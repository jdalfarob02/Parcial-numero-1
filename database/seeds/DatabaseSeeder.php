<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); //desactivar la revision de llaves foraneas
        DB::table('clientes')->truncate();//vaciar la tabla
        DB::table('facturas')->truncate();
        DB::table('supermerados')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); //activar la revision de llaves foraneas
        // $this->call(UsersTableSeeder::class);
        $this->call(ClienteTableSeeder::class);
        $this->call(FacturaTableSeeder::class);
        $this->call(SupermercadoTableSeeder::class);
    }
}
