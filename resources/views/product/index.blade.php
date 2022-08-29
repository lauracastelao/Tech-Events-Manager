
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

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
                                                <td>{{ $product->description }}<
                                                <td>
                                                    <button type="button" class=
                                                </td>
                                                <td>
                                                    <button type="button" class=
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
                    
                </div>
            </div>
        </div>
    </div>
