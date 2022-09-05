<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Routing\Controller;

class ProductController extends Controller
{
   public function index(){
     
      $products= Product::orderBy('id','desc')->paginate(10);
      return view('home',["products"=>$products]);
   }

   public function show( $id )
   {
     
      $product = Product::find($id);

      return view('detail',['product'=>$product]);
   }

   public function create(){
      return view('create');
   }

   
}