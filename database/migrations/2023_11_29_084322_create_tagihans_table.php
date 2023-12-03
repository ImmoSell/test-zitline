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
        Schema::create('tagihans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->date('tanggal_jatuh_tempo');
            $table->enum('custom_invoice', ['yes', 'no'])->default('no');
            $table->string('jenis_paket')->nullable();
            $table->enum('status', ['lunas', 'belum lunas'])->default('belum lunas');
            $table->string('metode_pembayaran');
            $table->decimal('harga', 10, 2)->nullable();
            $table->string('periode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagihans');
    }
};
