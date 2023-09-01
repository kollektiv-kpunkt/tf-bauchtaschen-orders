<x-app-layout>
    <div class="px-4 md:px-6 py-4 bg-ochre">
        <x-app-logo />
    </div>
    <div class="tfb-header tfb-header--nogradient">
        <div class="tfb-header--inner px-4 md:px-6 py-8">
            <h1 class="text-red text-2xl md:text-3xl text-center max-w-lg mx-auto">Admin</h1>
        </div>
    </div>
    <div class="tfb-maincontent py-16">
        <div class="tfb-maincontent--inner max-w-lg mx-auto px-4 md:px-6">
            <div class="flex tfb-admin-action">
                <a download="<?= now() ?>-orders.xlsx" class="tfb-button" href="/admin/orders/download">Bestellungen herunterladen</a>
            </div>
        </div>
    </div>
</x-app-layout>
