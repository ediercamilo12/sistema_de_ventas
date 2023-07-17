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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 40);
            $table->string("apellido",40);
            $table->string("email",100);
            $table->string("cedula",12);
            $table->string("telefono",15);
            $table->string("cargo",40);

            $table->bigInteger("id_ciudad")->unsigned();

            $table->foreign("id_ciudad")->references("id")->on("ciudad")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
