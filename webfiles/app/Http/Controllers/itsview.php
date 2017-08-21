<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class itsview extends Controller
{
	public function display()
    {
		$tickets = DB::table('tickets')->get();
		
		return view('pages.viewalltickets', ['tickets' => $tickets] ) ;

    }
}
