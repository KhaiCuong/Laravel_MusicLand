<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    
     

   

    public function home(Request $request)
    {

        $prods = Product::all();
        $latestProds = Product::all();
        return view('home')->with([
            'prods' => $prods,
            'latestProds' => $latestProds,
        ]);
    }

}
