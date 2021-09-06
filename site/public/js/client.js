// A reference to Stripe.js initialized with your real test publishable API key.
var stripe = Stripe("pk_test_51HrkfhDzavvXLQKUufyTgRd85ZIqbrigN5H5kKYWaksKVsn6nH9Ea8CUq5lzYt1d47uuwPYwPDmTOi524EvBsXjW00ltzLjtb5");

document.querySelector(".card-btn").disabled = true;

var response = fetch('/secret').then(function(response) {
    return response.json();
}).then(function(responseJson) {
    var clientSecret = responseJson.client_secret;
    // Render the form to collect payment details, then
    // call stripe.confirmCardPayment() with the client secret.

    var elements = stripe.elements();

    var style = {
        base: {
            color: "#32325d",
            fontFamily: 'Source Sans Pro, sans-serif',
            fontSmoothing: "antialiased",
            fontSize: "16px",
            "::placeholder": {
                color: "#32325d"
            }
        },
        invalid: {
            fontFamily: 'Source Sans Pro, sans-serif',
            color: "#fa755a",
            iconColor: "#fa755a"
        }
    };

    var card = elements.create('card', {style: style, hidePostalCode: true});
    card.mount("#card-element");

    card.on('change', (event) => {
        // Disable the Pay button if there are no card details in the Element
        if (event.complete) {
            document.querySelector(".card-btn").disabled = event.empty;
        }
        document.querySelector("#card-error").textContent = event.error ? event.error.message : "";
    });

    var isSubmited = false;
    var form = document.getElementById("payment-form");
    form.addEventListener("submit", function(event) {
        if (!isSubmited) {
            event.preventDefault();
            isSubmited = true;

            // Complete payment when the submit button is clicked
            payWithCard(stripe, card, clientSecret);
        }
    });

});


// Calls stripe.confirmCardPayment
// If the card requires authentication Stripe shows a pop-up modal to
// prompt the user to enter authentication details without leaving your page.
var payWithCard = function(stripe, card, clientSecret) {
    loading(true);
    stripe
        .confirmCardPayment(clientSecret, {
            payment_method: {
                'card': card,
                'billing_details' : {
                    'name': document.querySelector('#name').innerHTML,
                }
            }
        })
        .then(function(result) {
            if (result.error) {
                // Show error to your customer
                showError(result.error.message);
            } else {
                // The payment succeeded!
                orderComplete(result.paymentIntent.id);
            }
        });
};
/* ------- UI helpers ------- */
// Shows a success message when the payment is complete
var orderComplete = function(paymentIntentId) {
    loading(false);
    document
        .querySelector(".result-message a")
        .setAttribute(
            "href",
            "https://dashboard.stripe.com/test/payments/" + paymentIntentId
        );
    document.querySelector(".result-message").classList.remove("hidden");
    document.querySelector("button").disabled = true;
};
// Show the customer the error from Stripe if their card fails to charge
var showError = function(errorMsgText) {
    loading(false);
    var errorMsg = document.querySelector("#card-error");
    errorMsg.textContent = errorMsgText;
    setTimeout(function() {
        errorMsg.textContent = "";
    }, 4000);
};
// Show a spinner on payment submission
var loading = function(isLoading) {
    if (isLoading) {
        // Disable the button and show a spinner
        document.querySelector("button").disabled = true;
        document.querySelector("#spinner").classList.remove("hidden");
        document.querySelector("#button-text").classList.add("hidden");
    } else {
        document.querySelector("button").disabled = false;
        document.querySelector("#spinner").classList.add("hidden");
        document.querySelector("#button-text").classList.remove("hidden");
    }
};
