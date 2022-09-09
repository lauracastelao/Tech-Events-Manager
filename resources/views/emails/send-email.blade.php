@include('Layouts.layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/email.css') }}">
    <title>Document</title>

</head>
<div class="container-general flex-center">
<div class="bg-gradient-to-r from-indigo-800 via-purple-500 to-pink-300  w-screen flex-center">

    <nav class="flex py-3  text-white w-screen">
        <div class="px-12  flex-center">



            @if (Route::has('login'))
                <div class="hidden fixed top-2 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-m text-gray-700 dark:text-gray-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="ml-6 text-sl text-white-900 font-bold ">Acceder</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-6 text-sl text-white-900 font-bold">Registro</a>
                        @endif
                    @endauth
                    <button ><a href="{{ url('/create')}}">Crear Evento</a></button>
                </div>
            @endif

        </div>
        <div class="cuqui flex-center">
            <div class="cuqui flex-center">
                <img src="https://github.com/lauracastelao/image/blob/main/A%C3%B1adir%20un%20subt%C3%ADtulo%20(1).png?raw=true" alt="card__image" class="card__image" width="200">
                <h1 class="text-white"> Te has suscrito al evento correctamente </h1>
            </div>
              <br>
    <button class="inline-flex items-center  py-2 bg-indigo-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"><a href="{{ url('/') }}">Volver</a></button>
        </div>
</body>
</html>
