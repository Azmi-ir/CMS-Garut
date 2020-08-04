<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\kategori_berita;

class tabel_berita extends Model
{
    protected $fillable = ['judul_berita','id_kategori', 'isi_berita'];

	public function kategori_berita()
	{
		return $this->belongsTo(kategori_berita::class, 'id_kategori', 'id');
	}

}
