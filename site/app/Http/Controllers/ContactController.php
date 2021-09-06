<?php

namespace App\Http\Controllers;

use App\Events\ContactEvent;
use App\Http\Requests\StoreContactForm;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(StoreContactForm $request)
    {
        $validatedData = $request->validated();

        event(new ContactEvent($validatedData));
        return redirect()->route('home.index');
    }
}
