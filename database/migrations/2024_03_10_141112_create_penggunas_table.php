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
        Schema::create('penggunas', function (Blueprint $table) {
            $table->id();
            $table->string('namapengguna');
            $table->enum('jkpengguna', ['Male', 'Female']);
            $table->string('alamatpengguna');
            $table->string('telppengguna');
            $table->string('emailpengguna');
            $table->string('usernamepengguna')->unique(); 
            $table->string('passwordpengguna');
            $table->integer('poinpengguna')->default(0);
            $table->string('fotopengguna')->nullable();
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunas');
    }
};
