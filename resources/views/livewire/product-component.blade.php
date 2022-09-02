@foreach ($products as $product)
    
    <body>
      
            {{-- <div class=card>
                <div class=image>
                    <img href="#" src="{{ $product->image }}" alt="" />
                </div>
                <div class=content>
                    <a href="detail">
                        <h3>{{ $product->title }}</h3>
                    </a>
                    <p class="product_date">{{ $product->date }}/<strong>{{$product->time}}</strong></p>
                    <p>Max Participants:{{$product->max_participants}}</p>
                    <p class="description">{{ $product->description }}</p>
                    <button class="btn"><a href="/send-email">Apuntarme</a></button></button>

                </div> --}}

             

            
            <div class="flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-sm">
                    <img href="#" src="{{ $product->image }}" alt="" />
                    <a href="detail">
                        <h3>{{ $product->title }}</h3>
                    </a>
                  <div class="p-6">
                    <p class="product_date">{{ $product->date }}/<strong>{{$product->time}}</strong></p>
                    <p>Max Participants:{{$product->max_participants}}</p>
                    <p class="description">{{ $product->description }}</p>
                    <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"><a href="/send-email">Apuntarme</a></button></button>
                  </div>
                </div>
              </div>
        </div>

    </body>
@endforeach



{{ $products->links() }}
