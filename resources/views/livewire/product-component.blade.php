@foreach ($products as $product)
    
    <body>
        <div class=container>
            <div class=card>
                <div class=image>
                    <img href="#" src="{{ $product->image }}" alt="" />
                </div>
                <div class=content>
                    <a href="detail">
                        <h3>{{ $product->title }}</h3>
                    </a>
                    <p>{{ $product->date }}</p>
                    <p>{{ $product->description }}</p>

                </div>

                <button class="btn"><a href="#">Apuntarme</a></button></button>


            </div>
        </div>
    </body>
@endforeach

</div>

{{ $products->links() }}
