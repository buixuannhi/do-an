<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
   public function bodysuits(){
       return view('Customer/Product/bodysuit');
   }
   public function Crotchless(){
       return view('Customer/product/Crotchless');
   }
   public function Corset(){
    return view('Customer/product/Corset');
   }
    public function Bustier(){
        return view('Customer/product/Bustier');
    }
    public function Babydoll(){
        return view('Customer/product/Babydoll');
    }
    public function More(){
        return view('Customer/product/More');
    }
    public function UrbeBikini(){
        return view('Customer/product/UrbeBikini');
    }
    public function Tankini(){
        return view('Customer/product/Tankini');
    }
    public function Monokini(){
        return view('Customer/product/Monokini');
    }
    public function Trikini(){
        return view('Customer/product/Trikini');
    }
    public function Burqini(){
        return view('Customer/product/Burqini');
    }
    public function BestGym(){
        return view('Customer/product/BestGym');
    }
    public function SwimSpin(){
        return view('Customer/product/SwimSpin');
    }
    public function Teddy(){
        return view('Customer/product/Teddy');
    }
    public function Blogs(){
        return view('Customer/product/Blogs');
    }
    
}
