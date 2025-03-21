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
        Schema::create('penguruses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_divisi')->constrained('divisis')->onDelete('cascade');
            $table->string('jabatan');
            $table->string('nama_pengurus');
            $table->string('univ_pengurus');
            $table->string('link_instagram');
            $table->string('link_linkedin');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penguruses');
    }
};
