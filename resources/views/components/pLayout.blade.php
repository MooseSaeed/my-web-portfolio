<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="High quality Web Development articles" />
    <meta property="og:title" content="Hands On Tech Blog" />
    <meta property="og:description" content="High quality Web Development articles" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://" />
    <meta property="og:url" content="https://" />
    <title>Hands On Tech Blog</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('/override.css') }}" />
    <link rel="stylesheet" href="{{ asset('/cardhover.css') }}" />
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script src="{{ asset('/darkcookies.js') }}" defer></script>

</head>

<body id="app" style="font-family: Open Sans, sans-serif" class="scroll-smooth">

    {{ $slot }}

</body>

</html>
