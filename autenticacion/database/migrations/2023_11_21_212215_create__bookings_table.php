<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('nro_reserva')->unique();
            $table->string('nro_habitacion');
            $table->foreignId('id_cliente');
            $table->date('fecha_entrada');
            $table->date('fecha_salida');
            $table->string('estado'); 
            $table->timestamps();

            $table->foreign('id_cliente')->references('id_cliente')->on('customer')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_bookings');
    }
};
