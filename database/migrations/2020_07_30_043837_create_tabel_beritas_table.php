<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelBeritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_beritas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_kategori');
            $table->string('judul_berita');
            $table->bigInteger('publisher')->nullable();
            $table->string('alias')->nullable();
            $table->Longtext('isi_berita');
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
        Schema::dropIfExists('tabel_beritas');
    }
}
