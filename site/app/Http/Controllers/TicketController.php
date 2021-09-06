<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TicketController extends Controller
{
    public function index()
    {
        return view('ticket.index');
    }

    public function store(StoreTicketForm $request)
    {
        $validatedData = $request->validated();

        //utiliser Session pour envoyer des infos
        Session::put('name', $request['name']);
        Session::put('email', $request['email']);
        Session::put('childTicket', $request['child_ticket']);
        Session::put('parentTicket', $request['parent_ticket']);

        Session::save();

        return redirect()->route('payment.index');
    }
}
