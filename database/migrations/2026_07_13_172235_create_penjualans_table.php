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
        Schema::create('penjualans', function (Blueprint $table) {

            $table->id();

            $table->foreignId('produk_id')
                ->constrained('produks')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->string('nomor_transaksi')->unique();

            $table->integer('jumlah');

            $table->decimal('harga',15,2);

            $table->decimal('total',15,2);

            $table->date('tanggal');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
