@include('Layouts.layout')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS Link -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<div class="container-general">

<body class="bg-gradient-to-r from-indigo-300 via-purple-500 to-pink-300">
   <x-navbar></x-navbar>
    
    <!-- component -->
     <x-slider></x-slider>

     @if(session('message')) 
        <div class="alert">
          {{session('message')}}
        </div>    
     @endif

   <div class="cards_container flex">
    @foreach ($products as $product)
    <livewire:product-component :product="$product"/>        
    @endforeach
   </div>    
 </div>

</section>



</body>

