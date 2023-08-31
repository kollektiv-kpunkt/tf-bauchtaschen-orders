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
                    <div id="go" class="dds-widget-container" data-widget="lema"></div><script language="javascript" src="https://widget.raisenow.com/widgets/lema/tamar-49d0/js/dds-init-widget-de.js" type="text/javascript"></script>
                    <script>
                    window.rnwWidget = window.rnwWidget || {};
                    window.rnwWidget.configureWidget = window.rnwWidget.configureWidget || [];
                    window.rnwWidget.configureWidget.push(function(options) {
                        options.translations.step_amount.onetime_amounts = [{text: '15', value: '1500'}, {text: '25', value: '2500'}, {text: '35', value: '3500'}, {text: '50', value: '5000'}];
                        options.defaults['stored_orderId'] = "{{$order->orderId}}";
                        options.defaults['stored_hash'] = "{{$order->hash}}";
                    });
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
