<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=montserrat:400,400i,700,700i,900,900i" rel="stylesheet" />
    @vite(["resources/css/app.scss"])
</head>
<body>

    {{ $slot }}
    <div class="tfb-footer-container">
        <footer id="site-footer" class="header-footer-group mt-20">
            <div class="section-inner max-w-4xl px-4 md:px-6 mx-auto">
                <div class="footer-credits flex border-t border-t-slate-400 gap-x-4 py-12">
                    <p class="footer-copyright font-bold">© <?= date("Y") ?> <a href="https://tamarafuniciello.ch/" class="!text-slate-700 !no-underline">Tamara Funiciello</a></p>
                    <p class="privacy-policy mt-0"><a class="privacy-policy-link" href="https://tamarafuniciello.ch/datenschutz/" rel="privacy-policy">Datenschutz</a></p>
                </div><!-- .footer-credits -->
            </div><!-- .section-inner -->
        </footer>
    </div>
    @vite(["resources/js/app.js"])
</body>
</html>
