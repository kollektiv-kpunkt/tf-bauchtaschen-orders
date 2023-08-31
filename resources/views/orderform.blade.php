<x-app-layout>

    <div class="px-4 md:px-6 py-4">
        <x-app-logo />
    </div>
    <div class="tfb-header">
        <div class="tfb-header--inner px-4 md:px-6 py-8">
            <h1 class="text-red text-3xl md:text-5xl text-center max-w-lg mx-auto">Bestelle deine Bauchtasche!</h1>
        </div>
        <div class="tfb-header--image px-4 md:px-6 max-w-4xl mx-auto">
            <img src="https://tamarafuniciello.ch/wp-content/uploads/DSC_0794-scaled.jpg" class="drop-shadow-2xl" alt="" decoding="async" srcset="https://tamarafuniciello.ch/wp-content/uploads/DSC_0794-scaled.jpg 2560w, https://tamarafuniciello.ch/wp-content/uploads/DSC_0794-300x200.jpg 300w, https://tamarafuniciello.ch/wp-content/uploads/DSC_0794-1024x683.jpg 1024w, https://tamarafuniciello.ch/wp-content/uploads/DSC_0794-768x513.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px">
            <p class="text-2xs mt-4"><i>Unsere Bauchtaschen: <b>Wir stören, bis sie uns hören!</b></i></p>
        </div>
    </div>
    <div class="tfb-maincontent bg-ochre py-16">
        <div class="tfb-maincontent--inner max-w-lg mx-auto px-4 md:px-6">
            <p>
                <b>Wir stören, bis sie uns hören!</b> Wir stören, bis wir alle zuhause und in der Öffentlichkeit sicher und frei sind. Wir stören, bis wir hingehen können, wo wir wollen, anziehen können, was wir wollen, und küssen, wen wir wollen. Wir stören, bis unsere Mütter in Würde altern können und gleicher Lohn für gleiche Arbeit endlich Realität ist.
            </p>
            <p>
                <b>Hilfst du mir, diese Botschaft in die Welt zu tragen?</b> Unterstütze meinen Wahlkampf und bestelle jetzt deine Bauchtasche.
            </p>
            <p>
                <b>Wir haben eine limitierte Auflage von 500 Bauchtaschen machen lassen.</b> Sichere dir jetzt dein Exemplar! Eine Bauchtasche kostet CHF 15. Mit dem Soli-Preis von CHF 25 hilfst du mir, mit meinem Wahlkampf noch mehr Menschen zu erreichen.
            </p>
        </div>
        <div class="tfb-order-form max-w-xl mx-auto px-4 md:px-6 pt-12">
            <div class="tfb-order-form--inner bg-white p-8 shadow-xl">
                <h2 class="text-2xl text-red text-center">Jetzt Bauchtasche bestellen</h2>
                <form action="{{ route('order.store') }}" class="mt-10" method="POST">
                    @csrf
                    <div class="tfb-form-group">
                        <label for="fname">Vorname</label>
                        <input type="text" name="fname" id="fname" required>
                    </div>
                    <div class="tfb-form-group">
                        <label for="lname">Nachname</label>
                        <input type="text" name="lname" id="lname" required>
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
                        <input type="checkbox" name="optin" id="optin" checked>
                        <label for="optin">Ich bin einverstanden, dass mich Tamara Funiciello auf dem Laufenden hält. <a href="https://tamarafuniciello.ch/datenschutz" target="_blank">Mehr Informationen im Datenschutz.</a></label>
                    </div>
                    <div class="tfb-form-group tfb-form-group__full">
                        <button type="submit" class="tfb-button w-full">
                            Bauchtasche bestellen
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
