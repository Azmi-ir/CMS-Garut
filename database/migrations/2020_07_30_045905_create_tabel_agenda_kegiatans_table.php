<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelAgendaKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_agenda_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_kegiatan');
            $table->string('jenis_kegiatan');
            $table->string('nama_kegiatan');
            $table->time('jam_mulai');
            $table->time('jam_akhir');
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
        Schema::dropIfExists('tabel_agenda_kegiatans');
    }
}
