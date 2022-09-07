<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
   // private Product $product;
   // public function __construct(Product $product)
   // {
   //    $this->product = $product;
      
   // }
   public function index(){
     
      $products= Product::orderBy('id','desc')->paginate(10);
      return view('home',["products"=>$products]);
   }

   public function show( $id )
   {
     
      $product = Product::find($id);

      return view('detail',['product'=>$product]);
   }

   public function create()
   {
      return view('create');
   }

   public function store(Request $request)
   {
      try{
       $product= Product::create([
       'title'=>$request->title,
       'date'=>$request->date,
       'time'=>$request->time,       
       'max_participants'=>$request->max_participants,
       'description'=>$request->description,
       'image'=>$request->image   
       ]);   
       $product->save();
       return redirect()->route('products.index')->with('message','Event added');
      } catch(\Throwable $th){
     return redirect()->route('products.create')->with('message','Event not added')
     ->withInput(['title'=>$request->title,'date'=>$request->date,'time'=>$request->time, 
     'max_participants'=>$request->max_participants,  'description'=>$request->description, 'image'=>$request->image  ]);
      } 
    }
   
}