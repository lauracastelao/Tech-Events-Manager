@include('Layouts.layout')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>



<div class="">
    <nav class="flex text-white w-screen ">
        <div class="px-20  flex">

            @if (Route::has('login'))
                <div class="top-2 right-10 px-8 py-4 sm:block ">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-m text-gray-700 dark:text-gray-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="ml-6 text-sl text-white-900 font-bold ">Acceder</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-6 text-sl text-white-900 font-bold">Registro</a>
                        @endif
                    @endauth
                    <button class="ml-6 text-sl text-white-900 font-bold "><a href="{{ url('/create') }}">Crear
                            Evento</a></button>
                </div>
            @endif
    </nav>

    <x-slider></x-slider>

    <div class="cards_container flex">
        @foreach ($products as $product)
        <livewire:product-component :product="$product" />
        @endforeach
    </div>

</div>
