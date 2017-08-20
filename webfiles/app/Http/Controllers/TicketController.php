<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use DB;

class TicketController extends Controller
{
    public function create()
    {
        $ticket = new Ticket();
        return view('pages.submitticket', ['ticket' => $ticket]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'issueTitle' => 'required',
            'os' => 'required',
            'description' => 'required',
        ]);
        Ticket::create($request->all());
        return redirect()->route('tickets.create') ->with('success','Ticket added successfully');
    }

	public function show($id)
    {
		$ticket = DB::table('tickets')->where('id', $id)->first();
		//$ticket = DB::select("select * from tickets", [1]);

		//return view('pages.viewticket');
		return view('pages.viewticket', ['ticket' => $ticket] ) ;
    }

    public function getAll()
    {
        $tickets = DB::table('tickets');

        return view('pages.its', ['tickets' => $tickets]);
    }
}
