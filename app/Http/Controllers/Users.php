<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    function checkDb()
	{ 
		$user=DB::select('select * from users');
		print_r($user);
		echo "We are here";
	}
}
