<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KLT5</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>

<body class="bg-gray-100 h-screen antialiased leading-none text-center font-sans flex-auto min-h-screen">
    <div id="app" class="h-screen">
        <header class="bg-gray-800 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div class="items-left text-left">
                    <p class="text-lg font-semibold text-gray-100 no-underline">
                        KLT5: Visual Analytics Tool for Casual Traders
                    </p>
                </div>
            </div>
            <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    @if(Auth::check())
                        <a href="{{ route('logout') }}" class="no-underline hover:underline" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                        </form>
                    @endif
                    
                </nav>
        </header>

        @yield('title')
        <!--Errors-->
        @if ($errors->any())
        <div class="w-4/5 m-auto pt-4">
            <ul>
                @foreach ($errors->all() as $error)
                <div role="alert">
                    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2 ">
                        Please Fix the Following Errors
                    </div>
                    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                        <p>{{ $error }}</p>
                    </div>
                </div>
                @endforeach
            </ul>
        </div>
        @endif

        <!--Messages-->

        @if (session()->has('message'))
        <div class="w-4/5 m-auto pt-4">
            <div role="alert">
                <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2 ">
                    Success!
                </div>
                <div class="border border-t-0 border-green-400 rounded-b bg-green-500 px-4 py-3 text-white">
                    <p>{{ session()->get('message')}}</p>
                </div>
            </div>
        </div>
        @endif

        @yield('content')

        
        <footer class="bg-gray-800 position-sticky bottom-0 height-10 left-0 w-100 ">
            <div class="py-20 ">
                <div class="items-left text-left">
                    <p class="text-lg font-semibold text-gray-100 no-underline">
                        KLT5: Visual Analytics Tool for Casual Traders
                    </p>
                </div>
            </div>
        </footer>
        
    </div>
</body>

</html>