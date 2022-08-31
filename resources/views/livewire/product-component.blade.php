<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href= "{{asset("css/product-component.css")}}">
    <title>Document</title>
</head>
<body>
    





<div class="flex flex-wrap justify-center">

    @foreach ($products as $product)
        <div class="lg:w-1/6 m-2" id="card">
            <a href= "detail-component">
            <div class="flex relative justify-center" id= "contenedor">
                <img alt="gallery" class="absolute inset-0 w-full h-full object-fit object-center rounded"
                    src="{{ $product->image }}" alt="" />

                <div
                    class="px-8 py-10 relative z-10 w-full border-4  bg-indigo-400 opacity-0 hover:opacity-100 justify-center rounded">
                    <h1 class="tracking-widest text-mg title-font  text-black mb-1">{{ $product->title }}</h1>
                    <h2 class="title-font text-xs font-bold text-black hover:text-indigo-100 mb-3">{{$product->date}}</h2>
                    <p class="leading-relaxed text-black">{{ $product->description }}</p>
                    <div>

                    </div>
                    <button type="button"
                        class="font-small hover:bg-purple-500 hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 transition duration-150 " id= "lulu" > <a href="send-email"> ➕ Apuntarse  </a> </button>
                </div>
            </div>

        </div>
    @endforeach

    
</div>
<div class="flex flex-wrap justify-center">
    {{ $products->links() }}
</div>
</body>
</html>