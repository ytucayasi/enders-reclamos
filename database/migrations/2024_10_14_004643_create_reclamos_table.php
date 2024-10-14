<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reclamos', function (Blueprint $table) {
            $table->id();
            $table->string('servicio');                         // select
            $table->string('nombre');                           // input
            $table->string('apellido');                         // input
            $table->string('departamento');                     // select
            $table->string('provincia');                        // select
            $table->string('distrito');                         // select
            $table->text('direccion');                          // input (textarea)
            $table->string('piso')->nullable();                 // input
            $table->string('oficina')->nullable();              // input
            $table->string('tipo_documento');                   // select
            $table->string('numero_documento');                 // input
            $table->string('telefono');                         // input
            $table->string('email');                            // input
            $table->text('datos_apoderado')->nullable();        // input (textarea)
            $table->enum('tipo', ['producto', 'servicio']);     // select (radio)
            $table->enum('moneda', ['soles', 'dolares']);       // select (radio)
            $table->decimal('monto_reclamado', 10, 2);          // input
            $table->text('descripcion_producto_servicio');      // input (textarea)
            $table->enum('tipo_reclamo', ['reclamo', 'queja']); // select (radio)
            $table->text('descripcion_reclamo');                // input (textarea)
            $table->text('solicitud');                          // input (textarea)
            $table->text('observaciones')->nullable();          // input (textarea)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamos');
    }
};
