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
        Schema::create('vfa', function (Blueprint $table) {
            $table->id();
            $table->string('Grade');
            $table->decimal('minimal_vfa',8,4);
            $table->decimal('maksimal_vfa',8,4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vfa');
    }
};
