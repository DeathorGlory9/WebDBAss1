<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\User;
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
			'firstName' => 'required|max:50',
			'lastName' => 'required|max:50',
			'email' => 'required|email|max:100',
            'issueTitle' => 'required|max:75',
            'os' => 'required|max:50',
            'description' => 'required',
        ]);

		$user = User::create($request->all());

		$ticket = [
			'userid' => $user->id,
			'issueTitle' => $request->issueTitle,
			'os' => $request->os,
			'description' => $request->description,];

        $ticket = Ticket::create($ticket);

		return redirect()->route('pages.viewticket', [$ticket->id]);
    }

	public function show($id)
    {
		$ticket = DB::table('tickets')->where('id', $id)->first();
		$user = DB::table('users')->where('id', $ticket->userid)->first();

		return view('pages.viewticket', ['ticket' => $ticket,'user' => $user] ) ;
    }

	public function showall()
    {
		$tickets = DB::table('tickets')->get();

		return view('pages.viewalltickets', ['tickets' => $tickets] ) ;
    }

    public function getAll()
    {
        $tickets = DB::table('tickets')->get();

        return view('pages.its', ['tickets' => $tickets]);
    }
}
