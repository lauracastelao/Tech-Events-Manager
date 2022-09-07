<div>
    <nav class="flex text-white w-screen">
        <div class="px-2  flex">



           @if (Route::has('login'))
               <div class="hidden fixed top-5 right-0 px-8 py-4 sm:block">
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
       </nav>
</div>
