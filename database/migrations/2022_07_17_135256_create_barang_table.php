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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            // $table->bigIncrements('id_barang');
            $table->string('jenis_barang');
            $table->string('nama_barang');
            $table->string('deskripsi');
            $table->string('kondisi_barang');
            $table->foreignId('kategori_id');
            $table->boolean('tersedia')->default(true);
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
        Schema::dropIfExists('barang');
    }
};
