@extends('layouts.form')

@section('titulo')
    Login
@endsection

@section('contenido')

<section class=" max-w-screen-2xl mx-auto w-full flex justify-center max-h-screen">

    <div class="w-1/2 relative">
        <img class="object-cover w-full h-full" src="{{ asset('img/port.png') }}" alt="Imagen Login">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-xl p-10 w-96 text-text-dark border-hsla border-opacity-30 rounded-xl">
                <h1 class=" text-gray-100 font-semibold text-3xl mb-4 leading-relaxed">Conéctate con el mundo, explora,<span class="bg-gradient-to-r from-purple-800 to-pink-700 text-transparent bg-clip-text"> Comparte.</span></h1>
                <p class="text-gray-100 text-base">Descubre un mundo de conexiones auténticas, comparte tus historias y sé parte de nuestra comunidad.</p>
            </div>
        </div>
    </div>

      <div class="w-1/2 bg-white p-10 flex items-center shadow-2xl">
        <div class="w-3/4 mx-auto">
          <div class="w-12 h-12 mb-8">
            <a href="#" class="logo-container">
              <img class="rounded-full" src="https://assets.codepen.io/10263767/internal/avatars/users/default.png?fit=crop&format=auto&height=512&version=1684514196&width=512" alt="Logo">
            </a>
          </div>

          <h2 class=" text-2xl font-bold mb-1">¡Bienvenido! 👋🏻</h2>
          <p class=" text-sm text-gray-400 text-text-light mb-8">Ingresa tus credenciales para iniciar sesión.</p>

          <form action="{{ route('login') }}" method="POST" novalidate>
            @csrf

            @if (session('mensaje'))
                <p class=" bg-red-600 p-3 w-full my-2 text-white rounded-lg text-sm text-center">
                    {{session('mensaje')}}
                </p>
            @endif


          <div class="flex flex-col gap-4 mb-4">
            <div class="flex flex-col gap-2">
                <input class="text-sm font-medium text-hsl-240-54-15 p-2 border-2 border-hsl-240-33-86 rounded focus:border-hsl-240-54-15 outline-none @error('email') border-red-600 @enderror" value="{{ old('email') }}" type="email" id="email" name="email" placeholder="Correo Electrónico">
                @error('email')
                          <p class=" bg-red-600 p-3 w-full my-2 text-white rounded-lg text-sm text-center">
                              {{$message}}
                          </p>
                @enderror
            </div>

            <div class="flex flex-col gap-2">
                <input class="text-sm font-medium text-hsl-240-54-15 p-2 border-2 border-hsl-240-33-86 rounded focus:border-hsl-240-54-15 outline-none @error('password') border-red-600 @enderror" type="password" id="password" name="password" placeholder="Contraseña">
                @error('password')
                          <p class=" bg-red-600 p-3 w-full my-2 text-white rounded-lg text-sm text-center">
                              {{$message}}
                          </p>
                @enderror
            </div>
            <div class="mb-5">
                <input type="checkbox" name="remember"> <label for="remember" class=" text-sm">Mantener mi sesión abierta</label>
            </div>

          </div>

          <div class="flex justify-between text-sm font-medium mb-4 mt-10 text-blue-800">
            <a href="/crear-cuenta">¿Aun no tienes una cuenta? Crea una</a>
          </div>

          <button class="text-white bg-gradient-to-r from-purple-800 to-pink-700 hover:opacity-95 w-full flex justify-center items-center gap-4 font-medium p-2 rounded">Iniciar Sesión</button>
          </form>

        </div>
      </div>

@endsection