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
        Schema::connection('mysql_mandiri')->create('tbl_notif_online', function (Blueprint $table) {
            $table->id();
            $table->string('status', 25)->default('NEW');
            $table->string('statusMessage')->nullable();
            $table->dateTime('transactionTimeReport');
            $table->string('transactionID',19)->nullable();
            $table->date('transactionDate');
            $table->time('transactionTime');
            $table->string('transactionReference',20)->nullable();
            $table->string('transactionCode',4)->nullable();
            $table->string('transactionType',1)->nullable();
            $table->string('fromAccount',16)->nullable();
            $table->string('toAccount',16)->nullable();
            $table->bigInteger('amount')->nullable();
            $table->string('currency',3)->nullable();
            $table->string('branch',10)->nullable();
            $table->string('remark1',40)->nullable();
            $table->string('remark2',40)->nullable();
            $table->string('remark3',40)->nullable();
            $table->string('remark4',40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_notif_online');
    }
};
