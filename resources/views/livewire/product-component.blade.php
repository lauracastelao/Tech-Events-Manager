


@foreach ($products as $product)
    
    <body>
        <div class=container>
            <div class=card>
                <div class=image>
                    <img href="#" src="{{ $product->image }}" alt="" />
                </div>
                <div class=content>

                    <a href="products/{{$product->id}}">
                        <h3>{{ $product->title }}</h3>
                    </a>


                    <p class="product_date">{{ $product->date }}/<strong>{{$product->time}}</strong></p>
                    <p>Max Participants:{{$product->max_participants}}</p>
                    <p class="product_description">{{ $product->description }}</p>
                    <button class="btn"><a href="#">Apuntarme</a></button></button>

                </div>

               

            </div>
        </div>
    </body>
        @endforeach
        

    </div>
{{ $products->links() }}
