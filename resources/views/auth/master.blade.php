<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets') }}/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets') }}/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets') }}/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets') }}/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets') }}/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets') }}/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets') }}/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets') }}/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets') }}/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets') }}/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets') }}/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets') }}/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('assets') }}/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets') }}/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/vendors/simplebar.css">

    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets') }}/themes/prism.css">
    <link href="{{ asset('assets') }}/css/examples.css" rel="stylesheet">

    <script async="" src="{{ asset('assets') }}/js/gtag.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-118965717-1');

    </script>
    <link href="{{ asset('assets') }}/vendors/icons/css/free.min.css" rel="stylesheet">
</head>

<body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('assets') }}/js/coreui.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/simplebar/js/simplebar.min.js"></script>

    <script src="{{ asset('assets') }}/npm/prism.js"></script>
    <script src="{{ asset('assets') }}/npm/prism-autoloader.min.js"></script>
    <script src="{{ asset('assets') }}/npm/prism-unescaped-markup.min.js"></script>
    <script src="{{ asset('assets') }}/npm/prism-normalize-whitespace.js"></script>
    <script>
    </script>
</body>

</html>
