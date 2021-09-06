<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Accepter un paiement | Marché des gourmets</title>
    <meta name="description" content="A demo of a card payment on Stripe" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="{{ asset('js/client.js') }}" defer></script>
</head>

<body class="special_body">
<x-header></x-header>
<!-- Display a payment form -->
<form id="payment-form" method="post" action="{{ route('payment.store') }}">
    <div class="card-info">
        <h2 aria-level="2" role="heading" id="name" class="card-info__title">
            {{ $payment['name'] }}
        </h2>
        <p id="email" class="sr-only">
            {{ $payment['email'] }}
        </p>
        <div class="card-info__payment">
            <table>
                <tr>
                    <th>
                        &nbsp;
                    </th>
                    <th>
                        &nbsp;
                    </th>
                    <th class="price">
                        Prix unité
                    </th>
                    <th class="price">
                        Total
                    </th>
                </tr>
                <tr>
                    <th>
                        Place Enfant
                    </th>
                    <td>
                        @if($payment['childTicket'] == 0 || $payment['childTicket'] == 1)
                            {{ $payment['childTicket'] }} place
                        @else
                            {{ $payment['childTicket'] }} places
                        @endif
                    </td>
                    <td class="price">
                        {{ $payment['childPrice'] }} &euro;
                    </td>
                    <td class="price">
                        {{ $payment['childTicket'] * $payment['childPrice'] }} &euro;
                    </td>
                </tr>
                <tr>
                    <th>
                        Place Adulte
                    </th>
                    <td>
                        @if($payment['parentPrice'] == 0 || $payment['parentPrice'] == 1)
                            {{ $payment['parentPrice'] }} place
                        @else
                            {{ $payment['parentPrice'] }} places
                        @endif
                    </td>
                    <td class="price">
                        {{ $payment['parentPrice'] }} &euro;
                    </td>
                    <td class="price">
                        {{ number_format(($payment['parentTicket'] * $payment['parentPrice']), 0, '', ' ') }} &euro;
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        &nbsp;
                    </td>
                    <td class="price total_price">
                        {{ number_format(($payment['childTicket'] * $payment['childPrice']) + ( $payment['parentTicket'] * $payment['parentPrice']), 0, '', ' ') }} &euro;
                    </td>
                </tr>
            </table>
        </div>
    </div>
    @csrf
    <div id="card-element" class="card-element">
        <!--Stripe.js injects the Card Element-->
    </div>
    <button id="submit" class="card-btn">
        <div class="spinner hidden" id="spinner"></div>
        <span id="button-text">Pay now</span>
    </button>
    <p id="card-error" role="alert"></p>
    <div class="result-message hidden">
        Paiement réussi, voir les résultats sur
        <a href="" target="_blank">Panneau Stripe.</a><br>
        <button id="formPost" class="result-message-a">Cliquez ici pour revenir sur le site.</button>
    </div>
</form>
<script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>
