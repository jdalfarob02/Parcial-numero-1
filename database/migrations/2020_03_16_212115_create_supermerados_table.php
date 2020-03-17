<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupermeradosTable extends Migration
{
    
    public function up()
    {
        Schema::create('supermerados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('supermercado');
            $table->json('caja');
            $table->bigInteger('factura_id')->unsigned();;
            $table->foreign('factura_id')->references('id')->on('facturas');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('supermerados');
    }
}
