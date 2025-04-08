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
        Schema::create('data_reservations', function (Blueprint $table) {
            $table->id();
            $table->string('guest_name');
            $table->string('guest_email');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->string('room_type');
            $table->enum('status', ['belum di konfirmasi', 'sudah di konfirmasi'])->default('belum di konfirmasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_reservations');
    }
};
