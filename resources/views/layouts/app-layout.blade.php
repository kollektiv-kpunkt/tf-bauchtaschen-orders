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

    @vite(["resources/js/app.js"])
</body>
</html>
