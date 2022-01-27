<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    {{-- Head section --}}
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Title --}}
        <title>stampt | A Virtual Loyalty Card Wallet</title>

        {{-- Links --}}
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- Styles --}}
        <link rel="stylesheet" href="{{ asset('css/base.css')}}">

        {{-- Scripts --}}
        <script src="{{ asset('js/app.js') }}" defer></script> {{-- defer means script will only run after page is loaded--}}
    </head>

    {{-- Body section --}}
    <body class="antialiased">
        <div id="app" class="app">
            <div class="content">
                {{-- Renders Page content --}}
                <nav-header></nav-header>

                <index></index>
            </div>
        </div>
    </body>
</html>
