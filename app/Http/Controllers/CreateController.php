<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Routing\Controller;

class CreateController extends Controller
{
   public function index(){

      return view('index');
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
