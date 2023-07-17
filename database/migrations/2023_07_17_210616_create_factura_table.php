<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->id();
            $table->date("fecha");
            $table->string("cantidad",100);
            $table->string("precio,100");
            $table->string("iva,100");
            $table->string("descuento,100");
            $table->string("total,100");

            $table->bigInteger("id_clientes")->unsigned();
            $table->bigInteger("id_proveedores")->unsigned();
            $table->bigInteger("id_empleados")->unsigned();



            $table->foreign("id_clientes")->references("id")->on("clientes")->onDelete("cascade");
            $table->foreign("id_proveedores")->references("id")->on("proveedores")->onDelete("cascade");
            $table->foreign("id_empleados")->references("id")->on("empleados")->onDelete("cascade");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factura');
    }
};
