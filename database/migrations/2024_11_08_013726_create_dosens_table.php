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
            Schema::create('dosens', function (Blueprint $table) {
                $table->string('nidn')->primary();
                $table->string('nama');
                $table->date('tanggal_lahir');
                $table->string('alamat');
                $table->string('kode_makul');
                $table->foreign('kode_makul')->references('kode_makul')->on('makuls')->onDelete('cascade');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makuls');
    }
};
