<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('repair_record_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('repair_record_id');
            $table->text('issue_description');
            $table->text('repair_steps');
            $table->decimal('cost', 10, 2);
            $table->unsignedBigInteger('technician_id')->nullable();
            $table->enum('jenis_kerusakan_id', ['Hardware', 'Software'])->nullable();
            $table->foreign('technician_id')->references('id')->on('technicians')->onDelete('set null');
            $table->timestamps();
        });
    }


    public function down(): void
    {

        Schema::table('repair_record_details', function (Blueprint $table) {
            $table->dropForeign(['technician_id']);
            $table->dropColumn('technician_id');
        });

        Schema::dropIfExists('repair_record_details');
    }
};
