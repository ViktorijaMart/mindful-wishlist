<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mindful Wishlist</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=open-sans:500,700" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        @include('layouts.header')
        <div class="welcome-container">
            <div class="welcome_text">
                <h1>Welcome to Mindful Wishlist</h1>
                <p>Our website is designed to help you create a wishlist that reflects your values and brings you true happiness and fulfillment. Instead of just adding items to your list without much thought, we encourage you to take a mindful approach and really reflect on what you need and want in your life.</p>
                <p>By taking this approach, you can create a wishlist that truly enhances your life and helps you focus on what matters most.</p>
                <p>If you would like to join this mindful journey, you can register by clicking the link below.</p>

            </div>
            <a href="{{ route('register') }}" class="welcome_register">Register</a>
            <div>
{{--                @if (Route::has('login'))--}}
{{--                    <div>--}}
{{--                        @auth--}}
{{--                            --}}{{--                        <a href="{{ url('/dashboard') }}">Dashboard</a>--}}
{{--                        @else--}}
{{--                            <a href="{{ route('login') }}">Log in</a>--}}

{{--                            @if (Route::has('register'))--}}
{{--                                <a href="{{ route('register') }}">Register</a>--}}
{{--                            @endif--}}
{{--                        @endauth--}}
{{--                    </div>--}}
{{--                @endif--}}
            </div>
        </div>
    </body>
</html>
