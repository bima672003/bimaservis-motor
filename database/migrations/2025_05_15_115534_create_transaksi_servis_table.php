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
        Schema::create('transaksi_servis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('antrian_id')->constrained('antrians')->onDelete('cascade');
            $table->decimal('total_biaya', 10, 2);
            $table->string('metode_pembayaran');
            $table->date('tanggal_pembayaran');
            $table->timestamps();
            $table->foreignId('layanan_id')->constrained()->onDelete('cascade');
            $table->foreignId('transaksi_id')->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_servis');
    }
};
