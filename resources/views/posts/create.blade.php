@extends('layouts.app')

@section('titulo')
    Nuevo Post
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="/imagenes" id="dropzone" class=" dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center"></form>
        </div>

        <div class="md:w-1/2 bg-white p-10 rounded-lg shadow-xl">
            <form action="" method="POST" novalidate>
                @csrf
              <div class="flex flex-col gap-4 mb-4">
    
                <div class="flex flex-col gap-2">
                  <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">Titulo</label>
                  <input class=" text-sm font-medium text-hsl-240-54-15 p-2 border-2 focus:border-gray-800 border-hsl-240-33-86 rounded focus:border-hsl-240-54-15  outline-none @error('titulo') border-red-600 @enderror" value="{{ old('name') }}" type="text" id="titulo" name="titulo" placeholder="Titulo De La Publicación">
                  @error('titulo')
                            <p class=" bg-red-600 p-3 w-full my-2 text-white rounded-lg text-sm text-center">
                                {{$message}}
                            </p>
                  @enderror
                </div>

                <div class="flex flex-col gap-2">
                    <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">Descripción</label>
                    <textarea class=" text-sm font-medium text-hsl-240-54-15 p-2 border-2 focus:border-gray-800 border-hsl-240-33-86 rounded focus:border-hsl-240-54-15  outline-none @error('descripcion') border-red-600 @enderror" id="descripcion" name="descripcion" placeholder="Descripcion De La Publicación">{{ old('name') }}</textarea>
                    @error('descripcion')
                              <p class=" bg-red-600 p-3 w-full my-2 text-white rounded-lg text-sm text-center">
                                  {{$message}}
                              </p>
                    @enderror
                </div>

                <input type="submit" class=" cursor-pointer text-white bg-gradient-to-r from-purple-800 to-pink-700 hover:opacity-95 w-full flex justify-center items-center gap-4 font-medium p-2 rounded text-center" value="Crear Publicación"/>

            </form>
        </div>
    </div>
@endsection