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
        Schema::create('experience', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("email");
            $table->string("date");
            $table->string("activité");
            $table->string("site");
            $table->string("titre");
            $table->string("description");
            $table->boolean("reception_email");
            $table->string("avis");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience');
    }
};
