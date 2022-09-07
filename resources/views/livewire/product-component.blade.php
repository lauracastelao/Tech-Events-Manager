<div class=container>
    <div class=card>
        <div class=image>
            <img href="#" src="{{ $product->image }}" alt="" />
        </div>
        <div class=content>

            <a href="{{ $product->id }}">
                <h3>{{ $product->title }}</h3>
            </a>
            <p class="product_date">{{ $product->date }}/
            <strong>{{ $product->time }}</strong></p>
            <p>Max Participants:{{ $product->max_participants }}</p>
            <p class="product_description">{{ $product->description }}</p>
            <button class="btn"><a href="#">Apuntarme</a></button>
            
            <form action="{{ route('products.delete', $product->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn mt-3">Eliminar</button>
            </form>  
           
        </div>
        
    </div>
</div>




