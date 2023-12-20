<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <script src="{{ asset('') }}" ></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Devstagram - @yield('titulo')</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class=" bg-gray-100">
        <header class=" p-5 border-b bg-white shadow">
            <div class=" container mx-auto flex justify-between items-center">
                <a href="/">
                    <h1 class=" text-3xl font-black">
                        DevStagram
                    </h1>
                </a>
                <nav class="flex gap-2 items-center">

                    <a href="{{route('posts.create')}}" class="transition-all duration-300 ease-in-out flex items-center bg-white border p-2 gap-3 text-gray-600 rounded-lg text-sm uppercase font-bold hover:bg-purple-700 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                        </svg>
                          
                         Crear
                    </a>

                    <a href="{{route('posts.index', auth()->user()->username)}}" class=" font-bold text-gray-700 text-sm">Hola: 
                        <span class=" font-normal text-cyan-600"> {{auth()->user()->username}}</span>
                    </a>

                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class=" uppercase font-bold text-gray-700 text-sm">Cerrar Sesión</button>
                    </form>
                </nav>
            </div>
        </header>

        <main class=" container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10 text-sky-600">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>

        <footer class=" text-center p-5 mt-10 text-gray-500 font-bold uppercase">
            DevStagram - Todos los derechos reservados {{now()->year}}
        </footer>
    </body>
</html>
