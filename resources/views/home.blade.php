<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>

<body class="bg-gradient-to-r from-indigo-300 via-purple-500 to-pink-300">
    <title>@yield('title')Friki Calendar</title>

    <nav class="flex py-5 bg-purple-500 text-white">
        <div class="w-1/2 px-12 mr-auto flex">
            <p class="text-2xl font-bold font-sans">Friki Calendar</p>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cat" class="ml-4 mt-2 w-4 h-4"
                mt-2role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor"
                    d="M290.59 192c-20.18 0-106.82 1.98-162.59 85.95V192c0-52.94-43.06-96-96-96-17.67 0-32 14.33-32 32s14.33 32 32 32c17.64 0 32 14.
32 32v256c0 35.3 28.7 64 64 64h176c8.84 0 16-7.16 16-16v-16c0-17.67-14.33-32-32-32h-32l128-96v144c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V289.86c-10.
2.67-20.89 4.54-32 4.54-61.81 0-113.52-44.05-125.41-102.4zM448 96h-64l-64-64v134.4c0 53.02 42.98 96 96 96s96-42.98 96-96V32l-64 64zm-72 80c-8.84 0-16-7.
16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16zm80 0c-8.84 0-16-7.16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16z">
                </path>

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
                    </div>
                @endif
    </nav>
    <!-- component -->
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

    <article x-data="slider" class="relative w-full flex flex-shrink-0 overflow-hidden shadow-2xl">
        <div class="rounded-full absolute top-5 right-5 text-sm px-2 text-center z-10">
            <span x-text="currentIndex"></span>/
            <span x-text="images.length"></span>
        </div>

        <template x-for="(image, index) in images">
            <figure class="h-96" x-show="currentIndex == index + 1"
                x-transition:enter="transition transform duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition transform duration-300"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                <img :src="image" alt="Image" class="absolute  z-10 h-full w-full object-cover center" />
                <figcaption
                    class="sm:text-3xl text-2xl absolute inset-x-0 bottom-1 z-20 w-96 mx-auto p-4 font-gray font-bold text-center ">
                    PRÓXIMOS EVENTOS
                </figcaption>
            </figure>
        </template>

        <button @click="back()"
            class="absolute left-14 top-1/2 -translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
            <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 
hover:-translate-x-0.5"
                fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7">
                </path>
            </svg>
        </button>

        <button @click="next()"
            class="absolute right-14 top-1/2 translate-y-1/2 w-12 h-11 lex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-500">
            <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 
hover:translate-x-0.5"
                fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </article>


    <livewire:product-component />


    </section>

    <div class="test">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam eos obcaecati, excepturi, ratione vel quas quasi doloribus ut, sapiente soluta similique voluptatem architecto fugiat nisi quidem? Alias, velit! Ad, repudiandae?
    </div>

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
                    } else if (this.currentIndex <= this.images.length) {
                        this.currentIndex = this.images.length - this.currentIndex + 1
                    }
                },
            }))
        })
    </script>
    
</body>
