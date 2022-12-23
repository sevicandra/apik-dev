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
        Schema::connection('mysql_bri')->create('tbl_transaksi', function (Blueprint $table) {
            $table->id('Id_transaksi');
            $table->string('virtual_account', 20);
            $table->decimal('jumlah', 17, 0);
            $table->string('kode_jurnal')->nullable();
            $table->date('tanggal');
            $table->date('tanggal_report');
            $table->string('report_by', 20)->default(0);
            $table->enum('status', ['NEW', 'OK', 'FAILED'])->default('NEW');
            $table->string('status_message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_transaksi');
    }
};
