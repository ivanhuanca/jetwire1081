<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased bg-gray dark:bg-gray-900">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-900 selection:bg-red-500 selection:text-white">

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <x-application-logo class="block h-12 w-auto" />
            </div>


            <div class="flex justify-center mt-6 px-0 sm:items-center sm:justify-between">
                @if (Route::has('login'))
                    <div class="text-right z-10">
                        @auth
                            <div class="flex items-center">
                                <x-button class="bg-red-500 hover:bg-red-600">
                                    <a href="{{ url('/dashboard') }}"
                                        class="font-semibold hover:text-gray-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('Dashboard') }}</a>
                                </x-button>
                            </div>
                        @else
                            <div class="flex items-center mt-5">
                                <x-button class="bg-red-500 hover:bg-red-600">
                                    <a href="{{ route('login') }}"
                                        class="font-semibold hover:text-gray-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('Log in') }}</a>
                                </x-button>
                            </div>
                        @endauth
                    </div>
                @endif

            </div>
        </div>
    </div>
</body>

</html>
