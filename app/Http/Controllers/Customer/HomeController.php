<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;


class HomeController extends Controller
{
  public function index(){
    $category = '7';
    $product = Product::where('cat_id','LIKE','%'.$category.'%')->limit(12) ->get();
    // dd($product);
      return view('Customer/home/index',compact('product'));
  }
}
