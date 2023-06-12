<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->longText('alamat');
            $table->string('jenis_kelamin');
            $table->bigInteger('position_id')->unsigned();
            $table->bigInteger('departement_id')->unsigned();
            $table->string('domisili');
            $table->string('pendidikan');
            $table->string('status');
            $table->string('agama');
            $table->bigInteger('gaji_awal');
            $table->bigInteger('gaji_sekarang');
            $table->string('no_rekening');
            $table->string('bpjs_kesehatan');
            $table->string('bpjs_ketenagakerjaan');
            $table->string('nik');
            $table->string('npwp');
            $table->string('kk');
            $table->string('email_kantor');
            $table->string('email_pribadi');
            $table->string('no_hp');
            $table->string('status_kepegawaian');
            $table->date('tanggal_awal_pengangkatan');
            $table->date('tanggal_kontrak_berakhir');
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('position_id')->references('id')->on('position')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('departement_id')->references('id')->on('departement')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
