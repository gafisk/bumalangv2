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
        Schema::create('jumlah_awardees', function (Blueprint $table) {
            $table->id();
            $table->enum('kategori_awardee', ['Sarjana', 'Magister', 'Doktor']);
            $table->char('total_awardee', 25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jumlah_awardees');
    }
};
