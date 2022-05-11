<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{


    //
    public function index()
    {
        $tickets = Ticket::all()->sortBy('category');
        return view('myTickets', compact('tickets'));
    }
    public function show($id)
    {
        $task = DB::table('tickets')->find($id);

        return view('showTicket', compact('ticket'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:15 | min:3|string'
        ]);
        $ticket = new Ticket();
        $ticket->name = $request->name;
        $ticket->save();
        return redirect()->back();
    }

}
