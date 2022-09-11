<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prods = Product::all();
        return view('layout.home', compact('prods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $product = $request->all();
        // if ($request->hasFile('photo')) {
        //     $file = $request->file('photo');
        //     $extension = $file->getClientOriginalExtension();
        //     if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
        //         return redirect()->route('admin.product.create')->with('loi', 'ban chi dinh sai duong dan');
        //     }
        //     $imageName = $file->getClientOriginalName();
        //     $file->move("images", $imageName);
        // } else {
        //     $imageName = null;
        // }
        // $p = new Product($product);
        // $p->photo = $imageName;
        // $p->save();
        // return redirect()->route('admin.product.index');

        $product = $request->all();
        // xu ly upload hinh vao thu muc
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect()->route('admin.product.create')->with('Error', 'Ban chi dinh sai duong dan');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img", $imageName);
        } else {
            $imageName = null;
        }
        $p = new Product($product);
        $p->photo = $imageName;
       
        $p->save();
        return redirect()->route('');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}