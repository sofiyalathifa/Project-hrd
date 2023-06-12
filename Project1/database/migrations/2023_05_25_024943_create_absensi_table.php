<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('absensi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('bulan_ke');
            $table->integer('jumlah_overtime');
            $table->string('code');
            $table->enum('status', ['Staff','Magang']);
            $table->date('tanggal_absen');
            $table->time('waktu_masuk');
            $table->time('waktu_keluar');
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
        Schema::dropIfExists('absensi');
    }
}
