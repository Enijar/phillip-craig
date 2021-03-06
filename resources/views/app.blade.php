<!DOCTYPE html>

<html lang="en">
<head>
    @if (env('APP_ENV') === 'production')
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134347854-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());
            gtag('config', 'UA-134347854-1');
        </script>
    @endif
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta name="keywords" content="fashion, clothing, phillip, craig, shop, merchandise"/>
    <meta name="subtitle" content="Phillip Craig"/>
    <meta name="description" content="Breaching the norm. Shop official Phillip Craig merchandise. F/W available now"/>

    <meta property="og:image" content="{{ asset('img/share.jpg') }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Phillip Craig"/>
    <meta property="og:description" content="Breaching the norm. Shop official Phillip Craig merchandise. F/W available now"/>
    <meta property="og:url" content="https://phillipcraig.com"/>

    <meta name="twitter:card" content="summary_large_image"/>
    <meta property="twitter:image" content="{{ asset('img/share.jpg') }}"/>
    <meta property="twitter:title" content="Phillip Craig"/>
    <meta property="twitter:description" content="Breaching the norm. Shop official Phillip Craig merchandise. F/W available now"/>
    <meta property="twitter:url" content="https://phillipcraig.com"/>

    <title>Phillip Craig</title>
    <link rel="stylesheet" href="{{ asset("dist/app.css?v={$version}") }}"/>
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}"/>
    <base href="{{ url('/') }}">
    <script>
        window.APP = {
            url: '{{ url('/') }}',
            env: {
                APP_ENV: '{{ env('APP_ENV') }}',
                APP_DEBUG: '{{ env('APP_DEBUG') }}' === '1',
            },
            routes: JSON.parse('{!! json_encode($routes, JSON_HEX_QUOT|JSON_HEX_APOS) !!}'),
            version: '{{ $version }}',
            cdn: '{{ env('CDN_URL') }}',
            reCaptchaSiteKey: '{{ env('RECAPTCHA_SITE_KEY') }}',
        };
    </script>
</head>
<body>
<div id="root-app"></div>
<div id="root-notice"></div>
<div id="root-loading"></div>
<script src="{{ asset("dist/app.js?v={$version}") }}"></script>
@if (env('APP_ENV') === 'production')
    <script src="//rum-static.pingdom.net/pa-5c631abccea07b0016000ba4.js" async></script>
@endif
</body>
</html>
