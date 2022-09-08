<div class=container>
    <div class=card>
        <div class="image" >
            <img src="/images/{{ $product->image }}" width="200px">
        </div>
        <div class=content>

            <a href="products/{{ $product->id }}">
                <h3>{{ $product->title }}</h3>
            </a> 
            <p class="product_date">{{ $product->date }}/
            <strong>{{ $product->time }}</strong></p>
            <p>Max Participants:{{ $product->max_participants }}</p>
            <p class="product_description">{{ $product->description }}</p>
            <button class="btn"><a href="#">Apuntarme</a></button>
            
         <div class="flex justify-center">
            
            <form action="{{ route('products.delete', $product->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn mt-3">Eliminar</button>
             </form>  
            <form action="{{ route('products.edit', $product->id) }}" method="post">
                @csrf
                @method('GET')
                <button class="btn mt-3">Editar</button>
            </form>   
        </div>
        </div>
    </div>
</div





