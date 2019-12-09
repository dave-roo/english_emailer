<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datatemplate extends Model
{
    protected $fillable = [
		'dept',
		'type',
		'tone',
		'template'
	];

}