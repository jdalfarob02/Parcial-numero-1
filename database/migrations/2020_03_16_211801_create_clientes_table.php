<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
   
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nom_cliente');
            $table->string('correo')->unique();
            $table->string('telefono');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
