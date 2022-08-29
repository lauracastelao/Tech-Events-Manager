
<div class="flex flex-wrap justify-center">
  
@foreach ($products as $product)
 
<div class="lg:w-1/6 m-2">
  <div class="flex relative justify-center">
    <img alt="gallery" class="absolute inset-0 w-full h-full object-fit object-center rounded" src="https://th.bing.com/th/id/OIP.PMmw7ScrZTqd1tX_tW3jqwAAAA?pid=ImgDet&rs=1" alt=""/> 

    <div class="px-8 py-10 relative z-10 w-full border-4  bg-indigo-400 opacity-0 hover:opacity-100 justify-center rounded">
      <h1 class="tracking-widest text-mg title-font font-bold text-black mb-1">{{$product->title}}</h1>
      <h2 class="title-font text-mg font-bold text-black hover:text-indigo-100 mb-3">06/02/2023</h2>
      <p class="leading-relaxed text-black">{{$product->description}}</p>
      <button type="button" class="font-small hover:bg-purple-500 hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 transition duration-150 "> ➕ 
        Apuntarse</button>
    </div>
  </div>

</div>
@endforeach

  {{ $products->links()}}

</div>
      