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
        $products = Product::all();
        
        return view('admins.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function insert_audio($products)
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_audio(Request $request ,$products)
    {
        $get_audio = $request->file('file');
        if($get_audio){
            foreach($get_audio as $audio){}
            $get_name_audio = $audio->getClientOriginalName();
            $name_audio = current(explode('.',$get_name_audio));
            $new_audio = $name_audio.rand(0.99).'.'.$audio->getClientOriginalExtension();
            $audio->move('public/audio' , $new_audio);
            $audio = new Audio();
            $audio->name =
            $audio->audio =
            $audio->artist =
            $audio->category =
            $audio->save();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $product_id = $request->products;
        $audio = Audio::where('product_id',$product_id)->get();
        $audio_count = $audio->count();
        $output =  '<table id="customers">
        <tr>
            <th>name</th>
            <th>audio</th>
            <th>artist</th>
            <th>category</th>
            <th>playlist</th>
        </tr>
        </table>';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
