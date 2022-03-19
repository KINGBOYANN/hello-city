<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">


        <title>@yield('title', config('app.name'))</title>

    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">
        <main role="main" class="flex flex-col justify-center items-center">
          @yield('content')
        </main>

        <footer>
            <p class="text-gray-400">
                &copy; Copyright {{ date('Y') }} 

                @if(!Route::is('about'))
                &middot;<a href="{{ route('about') }}" class="text-indigo-500
                hover:text-indigo-600 underline">A propos de nous</a>
            </p>
            @endif
        </footer>
    </body>
</html>