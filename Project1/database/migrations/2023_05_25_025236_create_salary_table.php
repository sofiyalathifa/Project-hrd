<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('salary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('staff_id')->unsigned();
            $table->double('salary')->default(0);
            $table->double('uang_overtime')->default(0);
            $table->double('pot_bpjs')->default(0);
            $table->date('tgl_salary');
            $table->string('periode')->nullable();
            $table->string('transportasi')->nullable();
            $table->double('total')->nullable()->default(0);
            $table->string('status_gaji')->nullable();
            $table->string('status')->nullable();
            $table->string('jumlah_overtime')->nullable();
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('staff_id')->references('id')->on('staff')->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salary');
    }
}
