<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
   public function index(){
      
      return view('home');
   }

   public function show( $id )
   {
     
      $product = Product::find($id);

      return view('detail',['product'=>$product]);
   }
}