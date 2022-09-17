<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller{

    public function home(Request $request) {
        
           $prods = Product::all();
           
           return view('home');
     
}
    public function vieworder(){
            return view('view_order');
}
}
