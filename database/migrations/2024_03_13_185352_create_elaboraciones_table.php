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
        Schema::create('elaboraciones', function (Blueprint $table) {
            $table->id('id_elaboracion');
            $table->unsignedBigInteger('id_producto');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->foreign('id_usuario')->references('id')->on('users'); // Cambiado a 'users' en lugar de 'usuarios'
            $table->dateTime('fecha_elaboracion');
            $table->decimal('precio', 8, 2);
            $table->string('status');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elaboraciones');
    }
};
