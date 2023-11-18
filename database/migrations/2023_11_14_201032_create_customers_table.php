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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('trainer_id')->constrained()->cascadeOnDelete();
            $table->enum('customer_target', ['kilo_aldirma', 'kilo_verdirme', 'kilo_koruma', 'kas_kazanma']);
            $table->date('birth_date');
            $table->string('gender');
            $table->string('phone_number');
            $table->string('pp_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
