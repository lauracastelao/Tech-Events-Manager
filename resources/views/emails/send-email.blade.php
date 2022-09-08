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
<div class="container-general">
<div class="bg-gradient-to-r from-indigo-800 via-purple-500 to-pink-300  w-screen">

    <nav class="flex py-3  text-white w-screen">
        <div class="px-12  flex">
            


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
                    <button class="ml-6 text-sl text-white-900 font-bold "><a href="{{ url('/create')}}">Crear Evento</a></button>
                </div>
            @endif

        </div>
        <div>
            <div class="cuqui">
                <img src="https://github.com/lauracastelao/image/blob/main/A%C3%B1adir%20un%20subt%C3%ADtulo%20(1).png?raw=true" alt="card__image" class="card__image" width="200">
              </div>
              <br>
           <h1> Te has suscrito al evento correctamente </h1>
    <button class="btn"><a href="{{ url('/') }}">Volver</a></button>
        </div>
</body>
</html>