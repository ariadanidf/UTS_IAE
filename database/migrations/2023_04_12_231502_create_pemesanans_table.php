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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->string('no_hp');
            $table->string('email');
            $table->date('tanggal_CI');
            $table->date('tanggal_CO');
            $table->string('pembayaran');
            $table->foreignId('id_kamar')->constrained('kamars');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
