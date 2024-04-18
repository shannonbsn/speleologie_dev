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
        Schema::create('homeforms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("email");
            $table->string("date");
            $table->string("activite");
            $table->string("site");
            $table->string("titre");
            $table->string("description");
            $table->string("reception_email");
            $table->string("avis");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homeforms');
    }
};
