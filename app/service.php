<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class service extends Model
{
	use SoftDeletes;
    protected $primarykey ='$id';
    protected $fillable = ['name', 'price', 'detail'];
}
