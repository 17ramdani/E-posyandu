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
        Schema::create('anak', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_anak');
            $table->string('tempat_lhr');
            $table->date('tgl_lhr');
            $table->float('bb_lahir');
            $table->float('tb_lahir');
            $table->string('jenis_kelamin');
            $table->integer('anak_ke');
            $table->string('jenis_persalinan');
            $table->string('tempat_persalinan');
            $table->string('dokter');
            $table->string('NIK_anak')->nullable();
            $table->string('BPJS_anak')->nullable();
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
        Schema::dropIfExists('anak');
    }
};
