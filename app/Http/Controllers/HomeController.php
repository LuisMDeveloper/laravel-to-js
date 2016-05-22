<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
	function home()
	{
		$username = 'LuisMDeveloper';

		return view('welcome')->with('username', $username);
    }
}
