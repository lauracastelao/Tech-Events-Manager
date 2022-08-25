
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  </head>
  <body class="bg-indigo-200">
    <title>@yield('title')Friki Calendar</title>

    <nav class="flex py-5 bg-purple-500 text-white">
      <div class="w-1/2 px-12 mr-auto">
        {{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcPO5asjv1wfMXu-XhAyRstqTcf0c1TLcAHQ&usqp=CAU" alt=""> --}}
        <p class="text-2xl font-bold">Friki Calendar  🪄 </p>
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-m text-gray-700 dark:text-gray-500">Home</a>
                @else
                    <a href="{{ route('login') }}" class="ml-6 text-sl text-white-900 ">Acceder</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-6 text-sl text-white-900 ">Registro</a>
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
        <figcaption class="sm:text-3xl text-2xl absolute inset-x-0 bottom-1 z-20 w-96 mx-auto p-4 font-gray font-bold text-center ">
            PRÓXIMOS EVENTOS 
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
    class="absolute right-14 top-1/2 translate-y-1/2 w-12 h-11 lex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-500">
        <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>
</article>

{{-- <x-card> --}}
{{-- </x-card> --}}
{{-- <x-card> --}}
{{-- </x-card> --}}
{{-- <x-card> --}}
{{-- </x-card> --}}
{{-- <x-card> --}}
{{-- </x-card> --}}

<!-- component -->



<div class="flex flex-wrap justify-center">
    <a href="#">
        <div class="lg:w-1/6 m-2">
        
        
        
          <div class="flex relative justify-center">
              <img alt="gallery" class="absolute inset-0 w-full h-full object-fit object-center rounded" src=" 
               https://th.bing.com/th/id/OIP.PMmw7ScrZTqd1tX_tW3jqwAAAA?pid=ImgDet&rs=1" alt=""/>
              
              <div class="px-8 py-10 relative z-10 w-full border-4  bg-indigo-400 opacity-0 hover:opacity-100 justify-center rounded">
                  <h1 class="tracking-widest text-mg title-font font-bold text-black mb-1">Cosplay</h1>
                  <h2 class="title-font text-mg font-bold text-black hover:text-indigo-100 mb-3">06/02/2023</h2>
                  <p class="leading-relaxed text-black">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                  <button type="button" class="font-small uppercase rounded shadow-md 
                  hover:bg-purple-500
                    hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 transition duration-150 "> ➕ 
                  Apuntarse 
                    </button>
              </div>
          </div>
      </a>
    </div>
    <div class="lg:w-1/6 m-2 justify-center">
        <a href="#">
            <div class="flex relative justify-center">
                <img alt="gallery" class="absolute inset-0 w-full h-full object-fit object-center rounded" src=" 
                 https://th.bing.com/th/id/OIP.PMmw7ScrZTqd1tX_tW3jqwAAAA?pid=ImgDet&rs=1" alt=""/>
                
                <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-300 bg-indigo-400 opacity-0 hover:opacity-100 justify-center">
                    <h1 class="tracking-widest text-mg title-font font-bold text-black mb-1">Cosplay</h1>
                    <h2 class="title-font text-mg font-bold text-black hover:text-indigo-100 mb-3">06/02/2023</h2>
                    <p class="leading-relaxed text-black">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                    <button type="button" class="font-small uppercase rounded shadow-md 
                    hover:bg-purple-500
                      hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 transition duration-150 "> ➕ 
                    Apuntarse 
                      </button>
                </div>
            </div>
        </a>
      </div>
      <div class="lg:w-1/6 m-2 justify-center">
        <a href="#">
            <div class="flex relative justify-center">
                <img alt="gallery" class="absolute inset-0 w-full h-full object-fit object-center rounded" src=" 
                 https://th.bing.com/th/id/OIP.PMmw7ScrZTqd1tX_tW3jqwAAAA?pid=ImgDet&rs=1" alt=""/>
                
                <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-300 bg-indigo-400 opacity-0 hover:opacity-100 justify-center">
                    <h1 class="tracking-widest text-mg title-font font-bold text-black mb-1">Cosplay</h1>
                    <h2 class="title-font text-mg font-bold text-black hover:text-indigo-100 mb-3">06/02/2023</h2>
                    <p class="leading-relaxed text-black">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                    <button type="button" class="font-small uppercase rounded shadow-md 
                    hover:bg-purple-500
                      hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 transition duration-150 "> ➕ 
                    Apuntarse 
                      </button>
                </div>
            </div>
        </a>
      </div>
      <div class="lg:w-1/6 m-2 justify-center">
        <a href="#">
            <div class="flex relative justify-center">
                <img alt="gallery" class="absolute inset-0 w-full h-full object-fit object-center rounded" src=" 
                 https://th.bing.com/th/id/OIP.PMmw7ScrZTqd1tX_tW3jqwAAAA?pid=ImgDet&rs=1" alt=""/>
                
                <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-300 bg-indigo-400 opacity-0 hover:opacity-100 justify-center">
                    <h1 class="tracking-widest text-mg title-font font-bold text-black mb-1">Cosplay</h1>
                    <h2 class="title-font text-mg font-bold text-black hover:text-indigo-100 mb-3">06/02/2023</h2>
                    <p class="leading-relaxed text-black">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                    <button type="button" class="font-small uppercase rounded shadow-md 
                    hover:bg-purple-500
                      hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 transition duration-150 "> ➕ 
                    Apuntarse 
                      </button>
                </div>
            </div>
        </a>
      </div>
      <div class="lg:w-1/6 m-2 justify-center">
        <a href="#">
            <div class="flex relative justify-center">
                <img alt="gallery" class="absolute inset-0 w-full h-full object-fit object-center rounded" src=" 
                 https://th.bing.com/th/id/OIP.PMmw7ScrZTqd1tX_tW3jqwAAAA?pid=ImgDet&rs=1" alt=""/>
                
                <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-300 bg-indigo-400 opacity-0 hover:opacity-100 justify-center">
                    <h1 class="tracking-widest text-mg title-font font-bold text-black mb-1">Cosplay</h1>
                    <h2 class="title-font text-mg font-bold text-black hover:text-indigo-100 mb-3">06/02/2023</h2>
                    <p class="leading-relaxed text-black">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                    <button type="button" class="font-small uppercase rounded shadow-md 
                    hover:bg-purple-500
                      hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 transition duration-150 "> ➕ 
                    Apuntarse 
                      </button>
                </div>
            </div>
        </a>
      </div>
  



































  </section>



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