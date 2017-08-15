<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

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
        return redirect()->route('tickets.create') ->with('success','Ticket added
successfully');
    }
}
