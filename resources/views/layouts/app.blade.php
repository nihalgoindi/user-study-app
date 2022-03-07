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

<body class="bg-gray-100 h-screen antialiased leading-none text-center font-sans flex flex-auto min-h-screen">
    <div id="app">
        <header class="bg-gray-800 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div class= "items-left text-left">
                    <p class="text-lg font-semibold text-gray-100 no-underline">
                        KLT5: Visual Analytics Tool for Casual Traders 
                    </p>
                </div>
            </div>
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
        
        <div class="bg-gray-800">
            <footer class="bg-gray-800 py-20 mt-20 flex-1 md:flex md:items-center md:justify-between md:p-6 ">
                <div class="sm:grid grid-cols-3 w-4/5 pb-10 m-auto border-b-2
                border-gray-700">
                    <div>
                        <h3 class="text-l sm:font-bold text-gray-800">
                         
                        </h3>

                        <ul class="py-4 sm:text-s pt-4 text-gray-800">
                            <li class="pb-1">
                                <a href="/">
                                  
                                </a>
                            </li>
                            <li class="pb-1">
                                <a href="/blog">
                               
                                </a>
                            </li>
                            <li class="pb-1">
                                <a href="/login">
                                 
                                </a>
                            </li>
                            <li class="pb-1">
                                <a href="/register">
                                   
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div>
                        <h3 class="text-l sm:font-bold text-gray-800">
                          
                        </h3>

                        <ul class="py-4 sm:text-s pt-4 text-gray-800">
                            <li class="pb-1">
                                <a href="">
                                   
                                </a>
                            </li>
                            <li class="pb-1">
                                <a href="">
                                  
                                </a>
                            </li>
                            <li class="pb-1">
                                <a href="">
                                    
                                </a>
                            </li>
                            <li class="pb-1">
                                <a href="">
                                   
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-l sm:font-bold text-gray-800">
                      
                        </h3>

                        <ul class="py-4 sm:text-s pt-4 text-gray-800">
                            <li class="pb-1">
                                <a href="">
                                
                                </a>
                            </li>
                            <li class="pb-1">
                                <a href="">
                                    
                                </a>
                            </li>
                            <li class="pb-1">
                                <a href="">
                                </a>
                            </li>
                            <li class="pb-10">
                                <a href="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="w-25 w-4/5 pb-3 m-auto text-xs text-gray-100 pt-6">
                    Copyright 2022. All rights reserved.
                </p>
            </footer>
        </div>
    </div>
</body>

</html>