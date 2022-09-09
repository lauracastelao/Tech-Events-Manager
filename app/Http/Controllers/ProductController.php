<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
   private Product $product;

   public function __construct(Product $product)
   {
      $this->product = $product;
   }
   
   public function index(){     
      
      $products = Product::orderBy('id','desc')->paginate(3);
      return view('home',["products"=>$products]);
   }

   public function show( $id )
   {
     
      $product = $this->product->find($id);

      return view('detail',['product'=>$product]);
   }

   public function create()
   {
      return view('create');
   }

   public function store(Request $request)
   {
      try{
       $product= $this->product->create([
       'title'=>$request->title,
       'date'=>$request->date,
       'time'=>$request->time,       
       'max_participants'=>$request->max_participants,
       'description'=>$request->description,
       'image'=>$request->image
       ]);  

       if ($image = $request->file('image')) {
         $destinationPath = 'images/';
         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
         $image->move($destinationPath, $profileImage);
         $product['image'] = "$profileImage";
     }      
       $product->save();

       return redirect()->route('products.index')->with('message','Event added');
      } catch(\Throwable $th){
     return redirect()->route('products.create')->with('message','Event not added')
     ->withInput(['title'=>$request->title,'date'=>$request->date,'time'=>$request->time, 
     'max_participants'=>$request->max_participants,  'description'=>$request->description, 'image'=>$request->image  ]);
      } 
    }

    public function delete($id)
    {
      //try{
        Product::destroy($id);
         return redirect()->route('products.index')->with('message','Event deleted');
     // }
     // catch(\Throwable $th){
        // return redirect()->route('products.index')->with('message','Error:Event not deleted');
     // }

    }
   
    public function edit($id)
    {
      $product = $this->product->find($id);
      return view('edit', ['product'=>$product]);

    }
    public function update($id, Request $request)
    {
      $product = $this->product->find($id);
      $product->title = $request->title;
      $product->date = $request->date;
      $product->time = $request->time;
      $product->max_participants = $request->max_participants;
      $product->description = $request->description;
      $product->image = $request->image;

      if ($image = $request->file('image')) {
         $destinationPath = 'images/';
         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
         $image->move($destinationPath, $profileImage);
         $product['image'] = "$profileImage";
     } 

      $product->update();

      return redirect()->route('products.index')->with('message','Event updated');
    }
}