<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('compradores', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('correo')->nullable();

            $table->string('auto_comprado');
            $table->string('marca');
            $table->string('modelo');

            $table->integer('anio');

            $table->decimal('precio', 10, 2);

            $table->date('fecha_compra');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('compradores');
    }
};