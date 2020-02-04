<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::with(['tickettype','coustmer','order'])->paginate(14);
        return view('admin.tickets.tickets')->with(['tickets' => $tickets]);
    }
}
