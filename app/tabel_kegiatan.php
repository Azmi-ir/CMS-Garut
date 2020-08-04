<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tabel_program;

class tabel_kegiatan extends Model
{
	protected $fillable = ['id_program', 'nama_kegiatan', 'Anggaran'];

    public function tabel_program()
	{
		return $this->belongsTo(tabel_program::class, 'id_program', 'id');
	}
}
