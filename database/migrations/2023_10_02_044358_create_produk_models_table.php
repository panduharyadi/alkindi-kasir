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
            $table->string('nama_barang');
            $table->string('kode_barang')->nullable();
            $table->string('satuan');
            $table->timestamp('tgl_masuk');
            $table->integer('stok_dus');
            $table->integer('stok_strip');
            $table->integer('total_isi');
            $table->integer('total_stok');
            $table->timestamp('tgl_kadaluarsa')->nullable();
            $table->string('keterangan'); 
            $table->string('info');
            $table->string('harga');

            $table->timestamps();
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
