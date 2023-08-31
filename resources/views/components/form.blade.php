@php
    use App\Models\Order;

    $orders = Order::all();
    $count = $orders->count();
@endphp
<div class="tfb-order-form max-w-2xl mx-auto px-4 md:px-6 pt-12">
    <div class="tfb-order-form--inner bg-white p-8 shadow-xl">
        <h2 class="text-2xl text-red text-center">Jetzt Bauchtasche bestellen!</h2>
        <x-order-barometer />
        @if ($count < env("NO_PRODUCED", 400))
            <form action="{{ route('order.store') }}" class="mt-10" method="POST">
                @csrf
                <div class="tfb-form-group">
                    <label for="firstname">Vorname</label>
                    <input type="text" name="firstname" id="firstname" required>

                </div>
                <div class="tfb-form-group">
                    <label for="lastname">Nachname</label>
                    <input type="text" name="lastname" id="lastname" required>
                </div>
                <div class="tfb-form-group tfb-form-group__full">
                    <label for="email">E-Mail Adresse</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="tfb-form-group tfb-form-group__full">
                    <label for="street">Strasse, Nr.</label>
                    <input type="text" name="street" id="street" required>
                </div>
                <div class="tfb-form-group">
                    <label for="zip">PLZ</label>
                    <input type="text" name="zip" id="zip" required>
                </div>
                <div class="tfb-form-group">
                    <label for="city">Ort</label>
                    <input type="text" name="city" id="city" required>
                </div>
                <div class="tfb-form-group tfb-form-group__full">
                    <label for="phone">Telefonnummer</label>
                    <input type="text" name="phone" id="phone" placeholder="optional">
                </div>
                <div class="tfb-form-group tfb-form-group__full tfb-form-group__checkbox">
                    <input type="checkbox" name="optin" id="optin" checked value=1>
                    <label for="optin">Ich bin einverstanden, dass mich Tamara Funiciello auf dem Laufenden hält. <a href="https://tamarafuniciello.ch/datenschutz" target="_blank">Mehr Informationen im Datenschutz.</a></label>
                </div>
                <div class="tfb-form-group tfb-form-group__full">
                    <button type="submit" class="tfb-button w-full">
                        Bauchtasche bestellen
                    </button>
                </div>
            </form>
        @else
            <p class="text-center pt-8 text-xl">Leider sind alle Bauchtaschen ausverkauft!</p>
        @endif
    </div>
</div>
