<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;


class ProductComponent extends Component
{
   
    public $product;

    public function destroy($id){

        Product::destroy($id);

    }
    public function render()
    {
        return view('livewire.product-component');
    }
        
}
