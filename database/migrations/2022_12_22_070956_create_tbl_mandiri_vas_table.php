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
        Schema::connection('mysql_mandiri')->create('tbl_mandiri_va', function (Blueprint $table) {
            $table->id();
            $table->integer('id_unit_kerja');
            $table->string('status', 25)->default('IDLE');
            $table->string('mft_status', 25)->nullable();
            $table->integer('tgl_dipakai');
            $table->integer('masa_berlaku');
            $table->string('nomor_va', 20);
            $table->string('nama_rekening', 100);
            $table->integer('id_lelang');
            $table->integer('id_pengguna');
            $table->string('kode_lelang', 100);
            $table->string('nama_perserta', 100);
            $table->string('mft_info')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_mandiri_va');
    }
};
