<x-app-layout>
    <div class="px-4 md:px-6 py-4 bg-ochre">
        <x-app-logo />
    </div>
    <div class="tfb-header tfb-header--nogradient">
        <div class="tfb-header--inner px-4 md:px-6 py-8">
            <h1 class="text-red text-2xl md:text-3xl text-center max-w-lg mx-auto">Danke für deine Bestellung, {{$order->firstname}}!</h1>
        </div>
    </div>
    <div class="tfb-maincontent py-16">
        <div class="tfb-maincontent--inner max-w-lg mx-auto px-4 md:px-6">
            @if ($order->status == "pending_payment")
                <p>
                    <b>Danke, dass du mich unterstützt!</b> Bitte nutze das untenstehende Formular, um deine Bauchtasche zu bezahlen. Damit wir unsere Kosten decken können, kostet eine Bauchtasche CHF 15. Mit dem Soli-Preis von CHF 25 oder mehr hilfst du mir, mit meinem Wahlkampf noch mehr Menschen zu erreichen.
                </p>
                <div class="tfb-payment-form mt-12">
                    <div class="rnw-widget-container"></div>
                    <script src="https://tamaro.raisenow.com/tamar-49d0/latest/widget.js"></script>
                    <script>
                    window.rnw.tamaro.runWidget('.rnw-widget-container', {
                        paymentWidgetBlocks: [ //Schritt 1
                            "payment_amounts_and_intervals",
                            "payment_payment_methods",
                            "payment_profile",
                            "payment_address",
                            "payment_cover_fee"
                        ],
                        language: 'de',
                        amounts: [
                            {
                                "if": "paymentType() == onetime",
                                "then": [15,25,35,50],
                            },
                        ],
                        purposes: ["p1"],
                        translations: { //Schritt 3
                            de: {
                                purposes: {
                                    p1: 'Wir stören, bis sie uns hören! Bauchtasche',
                                }
                            },
                        },
                        showStoredCustomerStreetNumber: false,
                        showStoredCustomerStreet2: false,
                        showStoredCustomerMessage: false,
                        paymentFormPrefill: {
                            stored_orderId: "{{$order->orderId}}",
                            stored_hash: "{{$order->hash}}",
                            stored_customer_optin: {{$order->optin | false}},
                            stored_customer_donation_receipt: true,
                            stored_cover_transaction_fee: true,
                            stored_customer_firstname : "{{$order->firstname}}",
                            stored_customer_lastname : "{{$order->lastname}}",
                            stored_customer_email : "{{$order->email}}",
                            stored_customer_street : "{{$order->street}}",
                            stored_customer_zip_code : "{{$order->zip}}",
                            stored_customer_city : "{{$order->city}}",
                            stored_customer_country : "CH",
                            stored_customer_salutation: "none"
                        }
                    })

                    function setupCustomFieldValidation(event) {
                        var widget = window['widget'] = event.data.api;
                        var paymentValidations = window.rnw.tamaro.toJS(widget.computedConfig.paymentValidations);


                        let validAmounts = [...Array(99999).keys()];
                        validAmounts = validAmounts.slice(15);
                        console.log(validAmounts);

                        // adding rules for a custom field
                        paymentValidations['amount'] = {
                            in: validAmounts,
                        };

                        widget.config.paymentValidations = paymentValidations;
                    }

                        window.rnw.tamaro.events["afterCreate"].subscribe(setupCustomFieldValidation);
                    </script>
                </div>
            @else
                <p>
                    <b>Danke, dass du mich unterstützt!</b> Deine Zahlung ist bereits bei uns eingegangen. Wir werden deine Bauchtasche so schnell wie möglich verschicken.
                </p>
            @endif
        </div>
    </div>
</x-app-layout>
