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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->increments('idVoucher');
            $table->integer('idpengguna');
            $table->integer('idHadiah');
            $table->date('tglKlaim');
            $table->integer('tglBatasAmbil');
            $table->enum('statusVoucher', ['Berlaku', 'Kadaluarsa']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
