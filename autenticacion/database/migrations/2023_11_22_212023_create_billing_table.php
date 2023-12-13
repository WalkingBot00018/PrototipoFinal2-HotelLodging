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
        Schema::create('billing', function (Blueprint $table) {
            $table->id();
            $table->string('nro_factura');
            $table->string('nro_reserva');
            $table->date('fecha_emision');
            $table->decimal('monto_total', 10,2);
            $table->foreignId('id_metodo_pago');

            $table->timestamps();

            $table->foreign('id_metodo_pago')->references('id_metodo_pago')->on('payment_method')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nro_reserva')->references('nro_reserva')->on('bookings')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billing');
    }
};
