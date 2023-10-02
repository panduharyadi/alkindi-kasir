<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_models', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang');
            $table->string('satuan');
            $table->timestamp('tgl_masuk');
            $table->string('nama_barang');
            $table->integer('stok_dus');
            $table->integer('stok_strip');
            $table->integer('total_stock');
            $table->integer('total_isi');
            $table->timestamp('tgl_kadaluarsa')->nullable();
            $table->string('keterangan');
            $table->string('info');
            $table->string('harga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk_models');
    }
};
