<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, viewport-fit=cover">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Page Not Found</title>

        <meta name="description" content="description">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="apple-touch-startup-image" sizes="2048x2732" href="/apple_splash_2048.png">
        <link rel="apple-touch-startup-image" sizes="1668x2224" href="/apple_splash_1668.png">
        <link rel="apple-touch-startup-image" sizes="1536x2048" href="/apple_splash_1536.png">
        <link rel="apple-touch-startup-image" sizes="1125x2436" href="/apple_splash_1125.png">
        <link rel="apple-touch-startup-image" sizes="1242x2208" href="/apple_splash_1242.png">
        <link rel="apple-touch-startup-image" sizes="750x1334" href="/apple_splash_750.png">
        <link rel="apple-touch-startup-image" sizes="640x1136" href="/apple_splash_640.png">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0D0D0D">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="NET. Nonton">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="application-name" content="NET. Nonton">
        <meta name="msapplication-TileColor" content="#0D0D0D">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">
        <meta name="theme-color" content="#0D0D0D">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        <div id="app">
            <not-found></not-found>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
