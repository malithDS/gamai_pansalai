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
        Schema::create('pansal', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('review');
            $table->string('thero');
            $table->string('town');
            $table->string('details');
            $table->string('gallery');
            $table->string('history');
            $table->string('monk');
            $table->string('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pansal');
    }
};
