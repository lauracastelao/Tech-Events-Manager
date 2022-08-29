<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductComponent extends Component
{
    use WithPagination;

    public function destroy($id){

        Product::destroy($id);

    }
    public function render()
    {
        $products= Product::orderBy('id','desc')->paginate(4);
        return view('livewire.product-component', compact('products'));
    }
        
}
