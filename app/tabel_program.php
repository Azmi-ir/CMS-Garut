<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tabel_kegiatan;

class tabel_program extends Model
{
    protected $fillable = ['nama_program', 'anggaran'];

    public function tabel_berita()
    {
    	return $this->hasMany(tabel_kegiatan::class,'id_program', 'id');
    }
}
