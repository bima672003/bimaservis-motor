<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjaanServisTable extends Migration
{
    public function up(): void
    {
        Schema::create('pekerjaan_servis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('antrian_id');
            $table->string('deskripsi_pekerjaan');
            $table->decimal('biaya_pekerjaan', 10, 2);
            $table->timestamps();

            $table->foreign('antrian_id')->references('id')->on('antrians')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pekerjaan_servis');
    }
}
