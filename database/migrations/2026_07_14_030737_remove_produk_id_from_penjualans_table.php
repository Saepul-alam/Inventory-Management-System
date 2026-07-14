<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('penjualans', function (Blueprint $table) {

            $table->dropForeign(['produk_id']);

            $table->dropColumn([
                'produk_id',
                'harga',
                'jumlah'
            ]);

        });
    }



    public function down(): void
    {
        Schema::table('penjualans', function (Blueprint $table) {

            $table->foreignId('produk_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->integer('harga');

            $table->integer('jumlah');

        });
    }

};