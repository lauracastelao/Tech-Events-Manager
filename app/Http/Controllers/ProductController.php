<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Psr7\Request;
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

   public function store(Request $request)
   {
      $product = Product::create([
          'title'=>$request->title,
          'date'=>$request->date,
          'time'=>$request->time,
          'max-participants'=>$request->max_participants,
          'description'=>$request->description,
          'image'=>$request->image,
      ]);

      $product->save();

      return redirect()->route('home')->with('message','evento añadido');
   }

}
