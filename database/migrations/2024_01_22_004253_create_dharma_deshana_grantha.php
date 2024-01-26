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
        Schema::create('dharma_deshana_grantha', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('details');
            $table->string('author');
            $table->string('book_pdf');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dharma_deshana_grantha');
    }
};
