<div class=container>
    <div class=card>
        <div class=image>
            <img src="/images/{{ $product->image }}" width="100px">
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
</div>
    {{-- <div class="card">
      <div class="card__header">
        <img src="https://source.unsplash.com/600x400/?food" alt="card__image" class="card__image" width="600">
      </div>
      <div class="card__body">
        <span class="tag tag-brown">Food</span>
        <h4>Delicious Food</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
      </div>
      <div class="card__footer">
        <div class="user">
          <img src="https://i.pravatar.cc/40?img=2" alt="user__image" class="user__image">
          <div class="user__info">
            <h5>Jony Doe</h5>
            <small>Yesterday</small>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card__header">
        <img src="https://source.unsplash.com/600x400/?car,automobile" alt="card__image" class="card__image" width="600">
      </div>
      <div class="card__body">
        <span class="tag tag-red">Automobile</span>
        <h4>Race to your heart content</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
      </div>
      <div class="card__footer">
        <div class="user">
          <img src="https://i.pravatar.cc/40?img=3" alt="user__image" class="user__image">
          <div class="user__info">
            <h5>John Doe</h5>
            <small>2d ago</small>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
