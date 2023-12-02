<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        <style>
            .chat {
              list-style: none;
              margin: 0;
              padding: 0;
            }

            .chat li {
              margin-bottom: 10px;
              padding-bottom: 5px;
              border-bottom: 1px dotted #B3A9A9;
            }

            .chat li .chat-body p {
              margin: 0;
              color: #777777;
            }

            .panel-body {
              overflow-y: scroll;
              height: 350px;
            }

            ::-webkit-scrollbar-track {
              -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
              background-color: #F5F5F5;
            }

            ::-webkit-scrollbar {
              width: 12px;
              background-color: #F5F5F5;
            }

            ::-webkit-scrollbar-thumb {
              -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
              background-color: #555;
            }
        </style>

    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
