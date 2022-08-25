<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductComponent extends Component
{
    public function render()
    {
        $products= Product::orderBy('id','desc')->paginate(10);
        return view('livewire.product-component',compact('products'));
       // return view('livewire.product-component', compact('products'));
    }
}
