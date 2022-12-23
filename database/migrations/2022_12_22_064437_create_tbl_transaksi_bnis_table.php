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
        Schema::connection('mysql_bni')->create('tbl_transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('trx_id', 30);
            $table->string('nomor_va', 20);
            $table->decimal('payment_amount', 17, 0);
            $table->decimal('comulative_payment_amount', 17, 0);
            $table->string('payment_ntb', 30);
            $table->integer('datetime_payment');
            $table->integer('report_date');
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
