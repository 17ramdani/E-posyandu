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
        Schema::create('timbangan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_anak');
            $table->integer('umur');
            $table->float('bb');
            $table->float('tb');
            $table->date('tgl_timbang');
            $table->string('status_gizi');
            $table->string('ket_timbang');
            $table->string('ind_naik');
            $table->tinyInteger('ind_t_lalu');
            $table->tinyInteger('ind_b_lalu');
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
        Schema::dropIfExists('timbangan');
    }
};
