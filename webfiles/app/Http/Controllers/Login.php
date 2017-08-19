<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
	public function login()
    {
		session(['Login' => 'Yes']);

        return view('pages.index');
    }

	public function logout()
    {
		session(['Login' => 'No']);

        return view('pages.index');
    }
}
