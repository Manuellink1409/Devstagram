@extends('layouts.app')

@section('titulo')
    Perfil: {{$user->username}}
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="w-8/12 lg:w-6/12 px-5">
                <img src="{{asset('img/usuario.svg')}}" alt="imagen_usuario">
            </div>

            <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start py-10 md:py-10">
                <p class=" text-gray-700 text-2xl">{{$user->username}}</p>
                <p class="text-grey-800 text-sm mb-3 mt-5 font-bold">
                    <span class=" font-normal">0 seguidores</span>
                </p>
                <p class="text-grey-800 text-sm mb-3 font-bold">
                    <span class=" font-normal">0 siguiendo</span>
                </p>
                <p class="text-grey-800 text-sm mb-3 font-bold">
                    <span class=" font-normal">0 posts</span>
                </p>
            </div>
        </div>
    </div>

@endsection