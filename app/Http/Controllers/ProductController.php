<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class ProductController extends Controller
{
   public function index(){
      return view('product.index');
   }
}
