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
        Schema::create('detail_trashes', function (Blueprint $table) {
            $table->integer('idpengguna');
            $table->string('idTrash');
            $table->date('tglPembuangan');
            $table->integer('jumlahPoin');
            $table->enum('statusPoin', ['Belum Diverifikasi', 'Terverifikasi']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_trashes');
    }
};
