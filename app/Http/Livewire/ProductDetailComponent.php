<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductDetailComponent extends Component
{

    public function render()
    {
        $products = Product::orderBy('id', 'desc')->paginate(1);
        return view('livewire.product-detail');
    }
}
