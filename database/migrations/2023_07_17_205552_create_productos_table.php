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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",30);
            $table->string("descripcion",100);
            $table->string("precio",10);


            $table->bigInteger("id_categorias")->unsigned();
            $table->bigInteger("id_proveedores")->unsigned();


            $table->foreign("id_categorias")->references("id")->on("categorias")->onDelete("cascade");
            $table->foreign("id_proveedores")->references("id")->on("proveedores")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
