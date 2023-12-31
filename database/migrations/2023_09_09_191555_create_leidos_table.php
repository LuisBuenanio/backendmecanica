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
        Schema::create('leidos', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('mensaje_id')->nullable()->constrained('mensajes');
            $table->foreignId('chat_perfil_id')->nullable()->constrained('chat_perfils');
           
            $table->integer('estado')->default(1);
             
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leidos');
    }
};
