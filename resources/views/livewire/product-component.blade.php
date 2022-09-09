<div class=container>
    <div class=card>
        <div class="image" >
            <img src="/images/{{ $product->image }}">
        </div>
        <div class=content>

            <a href="products/{{ $product->id }}">
                <h3>{{ $product->title }}</h3>
            </a>
            <p class="product_date">{{ $product->date }}/
            <strong>{{ $product->time }}</strong></p>
            <p>Max Participants:{{ $product->max_participants }}</p>
            <p class="product_description">{{ $product->description }}</p>

            <div class="flex justify-evenly p-8">
                      <button class="inline-flex items-center px-4 py-2 bg-indigo-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"><a href="#">Apuntarme</a></button>
            <form action="{{ route('products.delete', $product->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Eliminar</button>
             </form>
            <form action="{{ route('products.edit', $product->id) }}" method="post">
                @csrf
                @method('GET')
                <button class="inline-flex items-center  py-2 bg-indigo-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" >Editar</button>
            </form>
        </div>
        </div>
    </div>
</div





