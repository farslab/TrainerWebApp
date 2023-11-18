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
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name')->default('trainerName');
            $table->enum('specialty', ['kilo_aldirma', 'kilo_verdirme', 'kilo_koruma', 'kas_kazanma']);
            $table->text('experiences');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('pp_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainers');
    }
};
