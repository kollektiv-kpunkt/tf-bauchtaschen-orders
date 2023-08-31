<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Primary Meta Tags -->
    <title>Wir stören, bis sie uns hören | Bestelle deine Bauchtasche!</title>
    <meta name="title" content="Wir stören, bis sie uns hören | Bestelle deine Bauchtasche!" />
    <meta name="description" content="Hilfst du mir, diese Botschaft in die Welt zu tragen? Unterstütze meinen Wahlkampf und bestelle jetzt deine Bauchtasche." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://bauchtasche.tamarafuniciello.ch/" />
    <meta property="og:title" content="Wir stören, bis sie uns hören | Bestelle deine Bauchtasche!" />
    <meta property="og:description" content="Hilfst du mir, diese Botschaft in die Welt zu tragen? Unterstütze meinen Wahlkampf und bestelle jetzt deine Bauchtasche." />
    <meta property="og:image" content="https://bauchtasche.tamarafuniciello.ch/img/og.jpg" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://bauchtasche.tamarafuniciello.ch/" />
    <meta property="twitter:title" content="Wir stören, bis sie uns hören | Bestelle deine Bauchtasche!" />
    <meta property="twitter:description" content="Hilfst du mir, diese Botschaft in die Welt zu tragen? Unterstütze meinen Wahlkampf und bestelle jetzt deine Bauchtasche." />
    <meta property="twitter:image" content="https://bauchtasche.tamarafuniciello.ch/img/og.jpg" />

    <!-- Meta Tags Generated with https://metatags.io -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=montserrat:400,400i,700,700i,900,900i" rel="stylesheet" />

    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#e53033">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#e53033">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#e53033">
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
