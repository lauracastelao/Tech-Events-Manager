<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
   public function index(){

      $products = Product::orderBy('id','desc')->paginate(10);

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

    $request->validate([

        'title'=> 'required',

    ]);

    $product = new Product();
    $product->title = $request->get('title');
    $product->date = $request->get('date');
    $product->time = $request->get('time');
    $product->max_participants = $request->get('max_participants');
    $product->description = $request->get('description');
    $product->image = $request->get('image');

    $product ->save();

    return redirect('/');
   }


}
