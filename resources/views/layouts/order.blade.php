<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <!-- Page Title  -->
    <title>Investment | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=2.7.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=2.7.0') }}">
    @livewireStyles
</head>

<body class="nk-body npc-invest bg-lighter ">
    <div class="nk-app-root">
        <div class="nk-wrap ">
            <div class="nk-content nk-content-lg nk-content-fluid">
                {{ $slot }}
            </div>
            @include('components.footer')
        </div>
    </div>

    @livewireScripts
    <script src="{{ asset('assets/js/bundle.js?ver=2.7.0') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=2.7.0') }}"></script>
    <script src="{{ asset('assets/js/charts/chart-invest.js?ver=2.7.0') }}"></script>
</body>

</html>
