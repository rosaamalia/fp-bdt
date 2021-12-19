<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUndangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mongodb')->create('undangans', function (Blueprint $table) {
            $table->string('jenis_undangan');
            $table->bigInteger('id_user');
            $table->string('tema_undangan');
            $table->date('tanggal_mulai_acara');
            $table->date('tanggal_berakhir_acara');
            $table->time('waktu_mulai_acara', $precision = 0);
            $table->time('waktu_berakhir_acara', $precision = 0);
            $table->string('lokasi_acara');
            $table->string('alamat_acara');
            $table->string('slug')->nullable();
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
        Schema::connection('mongodb')->drop('undangans');
    }
}