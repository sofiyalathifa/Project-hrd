<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('magang', function (Blueprint $table) {
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
            $table->string('agama');
            $table->string('nik');
            $table->string('kk');
            $table->string('email_pribadi');
            $table->string('no_hp');
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
        Schema::dropIfExists('magang');
    }
}
