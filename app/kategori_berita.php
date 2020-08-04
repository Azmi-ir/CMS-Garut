<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tabel_berita;

class kategori_berita extends Model
{
    //
    protected $fillable = ['nama_kategori', 'keterangan'];

    public function tabel_berita()
    {
    	return $this->hasMany(tabel_berita::class,'id_kategori', 'id');
    }
}
