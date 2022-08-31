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
                    <p class="product_date">{{ $product->date }}/<strong>{{$product->time}}</strong></p>
                    <p>Max Participants:{{$product->max_participants}}</p>
                    <p class="description">{{ $product->description }}</p>
                    <button class="btn"><a href="#">Apuntarme</a></button></button>

                </div>



            </div>
        </div>
    </body>
@endforeach


    
</div>
<div class="flex flex-wrap justify-center">
    {{ $products->links() }}
</div>
</body>
</html>