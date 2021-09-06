<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStripePayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Cartalyst\Stripe\Stripe;
use Stripe\StripeClient;

class StripePaymentController extends Controller
{
    public function index()
    {
        $payment = [
            'name' => Session::get('name'),
            'email' => Session::get('email'),
            'childTicket' =>  Session::get('childTicket'),
            'parentTicket' => Session::get('parentTicket'),
            'childPrice' => 0,
            'parentPrice' => 6,
        ];

        return view('payment.index', compact('payment'));
    }

    public function secret() {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $parentPrice = 6;
        $childPrice = 0;

        $payment = [
            'childTicket' => Session::get('childTicket'),
            'parentTicket' => Session::get('parentTicket')
        ];

        $intent = \Stripe\PaymentIntent::create([
            'amount' => (($payment['parentTicket'] * $parentPrice) + ($payment['childTicket'] * $childPrice)) * 100,
            'currency' => 'eur',
            // Verify your integration in this guide by including this parameter
            'metadata' => ['integration_check' => 'accept_a_payment'],
        ]);


        return view('secret.index', compact( 'intent'));
    }

    public function store() {
        Session::remove('name');
        Session::remove('email');
        Session::remove('childTicket');
        Session::remove('parentTicket');

        Session::save();

        return redirect()->route('ticket.index');
    }

}
