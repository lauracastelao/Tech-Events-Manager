
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  </head>
  <body class="bg-gray-100 text-gray-800">
<<<<<<< HEAD
    <title>@yield('title')homeBlade</title>
=======
    <title>@yield('title')Friki Calendar</title>
>>>>>>> develop

    <nav class="flex py-5 bg-purple-500 text-white">
      <div class="w-1/2 px-12 mr-auto">
<<<<<<< HEAD
     
        <p class="text-2xl font-bold">FRIKI CALENDAR</p>
       
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-ml text-gray-700 dark:text-gray-500 ">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-ml text-white-700 dark:text-gray-500 ">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-white-700 dark:text--500 ">Register</a>
=======
        {{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcPO5asjv1wfMXu-XhAyRstqTcf0c1TLcAHQ&usqp=CAU" alt=""> --}}
        <p class="text-2xl font-bold">Friki Calendar  🪄 </p>
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-m text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-m text-white-700 dark:text-gray-500 underline">Acceder</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-white-700 dark:text-gray-500 underline">Registro</a>
>>>>>>> develop
                    @endif
                @endauth
            </div>
                @endif
            </nav>
            <!-- component -->
<script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

<article x-data="slider" class="relative w-full flex flex-shrink-0 overflow-hidden shadow-2xl">
    <div class="rounded-full bg-gray-600 text-white absolute top-5 right-5 text-sm px-2 text-center z-10">
        <span x-text="currentIndex"></span>/
        <span x-text="images.length"></span>
    </div>

    <template x-for="(image, index) in images">
        <figure class="h-96" x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
        <img :src="image" alt="Image" class="absolute inset-0 z-10 h-full w-full object-cover " />
        <figcaption class="absolute inset-x-0 bottom-1 z-20 w-96 mx-auto p-4 font-gray text-sm text-center tracking-widest leading-snug bg-gray-300 bg-opacity-25">
           Una página creada para una comunidad grande, aqui puedes visualizar y guardar tus eventos favoritos; cometcon, conferencias, lanzamientos y más ¿Te lo vas a perder? 
        </figcaption>
        </figure>
    </template>

    <button @click="back()"
        class="absolute left-14 top-1/2 -translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
        <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7">
            </path>
        </svg>
    </button>

    <button @click="next()"
    class="absolute right-14 top-1/2 translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
        <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>
</article>
<x-card>
</x-card>
<x-card>
</x-card>
<x-card>
</x-card>
<x-card>
</x-card>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('slider', () => ({
            currentIndex: 1,
            images: [
                'https://github.com/lauracastelao/image/blob/main/comic.jpg?raw=true',
                'https://raw.githubusercontent.com/lauracastelao/image/main/Mi%20proyecto.jpg',
                'https://github.com/lauracastelao/image/blob/main/comic.jpg?raw=true',
                'https://github.com/lauracastelao/image/blob/main/santa.jpg?raw=true',
                'https://raw.githubusercontent.com/lauracastelao/image/main/Mi%20proyecto.jpg'
            ],
            back() {
                if (this.currentIndex > 1) {
                    this.currentIndex = this.currentIndex - 1;
                }
            },
            next() {
                if (this.currentIndex < this.images.length) {
                    this.currentIndex = this.currentIndex + 1;
                } else if (this.currentIndex <= this.images.length){
                    this.currentIndex = this.images.length - this.currentIndex + 1
                }
            },
        }))
    })
</script>
        
  </body>