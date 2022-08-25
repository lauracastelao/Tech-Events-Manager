<div class="row">
    <div class="col-md-8">
        <div class="mt-2 table-responsive-md">
            <table class="table table-striped">
                <thead>
                  <tr>
                   
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            
                            <td>{{$product->name}}</td>
                            <td>{{ $product->description }}</td>                           
                            <td>
                                <button type="button" class="btn btn-success">Editar</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" wire:click='destroy({{ $product->id }})>Borrar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links()}}
        </div>
    </div>
    <div class="col-md-4">
    </div>
</div>
