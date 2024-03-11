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
        Schema::create('repair_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('device_id');
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
            $table->unsignedBigInteger('technician_id');
            $table->foreign('technician_id')->references('id')->on('technicians')->onDelete('cascade');
            $table->dateTime('tanggal_perbaikan');
            $table->text('deskripsi_masalah');
            $table->text('langkah_perbaikan');
            $table->decimal('biaya', 10, 2);
            $table->string('status_perbaikan');
            $table->string('nomor_kode_service');
            $table->enum('jenis_kerusakan', ['Hardware', 'Software'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repair_records');
    }
};
