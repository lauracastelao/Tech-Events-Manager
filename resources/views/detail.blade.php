@include('Layouts.layout')

<div class="container">
    <div class="card">
      <div class="card__header">
        <img src="{{ $product->image }}" alt="card__image" class="card__image" width="600">
      </div>
      <div class="card__body">
        <span class="tag tag-blue">Apuntarme</span>
        <a href="products/{{ $product->id }}">
            <h4>{{ $product->title }}</h4>
        </a>
        <p>{{ $product->description }}</p>
      </div>
      <div class="card__footer">
        <div class="user">

          <div class="user__info">
            <h5>Max participants:{{ $product->max_participants }}</h5>
            <small>{{ $product->date }}</small>
            <small> / {{ $product->time }}</small>
          </div>
        </div>
      </div>
    </div>
</div>
