<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use JavaScript;

class HomeController extends Controller
{
	function home()
	{
		JavaScript::put([
			'username' => 'LuisMDeveloper',
			'age' => 24,
			'score' => array("HTML"=>"100", "CSS"=>"100", "Javascript"=>"100")
		]);

		return view('welcome');
    }
}
