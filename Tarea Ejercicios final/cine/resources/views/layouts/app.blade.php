<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-gray-100  bg-dark  dark:bg-gray-900"">
        <!-- Barra de navegación -->
        <nav id=" header" class="w-full z-30 top-10 py-1 bg-dark  dark:bg-gray-900  shadow-lg border-b border-blue-400">
    <div class="w-full  mt-0 px-6 py-2">
        <div id="menu" class="md:hidden flex items-center justify-between w-full p-4">
            <button id="menu-button" class="text-gray-600 hover:text-gray-800 focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <div class=" " id="menu">
            <nav>
                <ul id="nav-content" class="hidden md:flex items-center space-between text-base text-blue-600 pt-4 md:pt-0 w-full">
                    @auth
                    <div class="flex items center">
                        <li><a class="inline-block no-underline hover:text-white font-medium text-lg py-2 px-4 lg:-ml-2" href="">Pagina principal</a></li>
                        <li><a class="inline-block no-underline hover:text-white font-medium text-lg py-2 px-4 lg:-ml-2" href="{{ route('pelicula.index') }}">Peliculas</a></li>
                        <li><a class="inline-block no-underline hover:text-white font-medium text-lg py-2 px-4 lg:-ml-2" href=""></a></li>
                        <li><a class="inline-block no-underline hover:text-white font-medium text-lg py-2 px-4 lg:-ml-2" href=""></a></li>
                        <li><a class="inline-block no-underline hover:text-white font-medium text-lg py-2 px-4 lg:-ml-2" href=""></a></li>
                    </div>
                    <div class="flex ml-auto">
                        <li class="ml-auto">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="sudmit" class="bg-blue-600 text-gray-200 p-2 rounded hover:bg-blue-500 hover:text-gray-100">LogOut</button>
                            </form>
                        </li>`
                        <li><a class="inline-block no-underline font-medium text-lg py-2 px-4 lg:-ml-2 text-gray-400">{{explode(' ', auth()->user()->name)[0]  ?? auth()->user()->username}}</a></li>
                        <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                            <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                    @endauth
                    @guest
                    <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
                        <div class="auth flex items-center w-full md:w-full">
                            <img src="{{ asset('images/carlogo1.png') }}" alt="Icono de encabezado" class="h-12 w-12 mr-2">
                            <a class="bg-transparent text-gray-200  p-2 rounded border border-gray-300 mr-4 hover:bg-gray-100 hover:text-gray-700" href="{{ route('login') }}">Sign in</a>
                            <a class="bg-blue-600 text-gray-200  p-2 rounded  hover:bg-blue-500 hover:text-gray-100" href="{{ route('register') }}">Sign up</a>
                        </div>
                    </div>
                    @endguest
                </ul>
            </nav>
        </div>
    </div>
    </nav>



    <!-- Contenido principal -->
    <div class="relative text-center  bg-dark  dark:bg-gray-900">
            {{ $slot }}
        </div>
        <!-- Notificaciones -->
        <div class=" mx-auto p-4 bg-dark dark:bg-gray-900">

    </div>

