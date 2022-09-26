<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {


        return view('admins.gallery.add_gallery');
    }
    public function add_gallery($product_id)
    {
        $pro_id = $product_id;
        return view('admins.gallery.add_gallery', compact('pro_id'));
    }
    
    public function insert_gallery(Request $request,$pro_id){
        $get_image = $request->file('file');
        if($get_image){
            foreach($get_image as $image){
                $get_name_image = $image->getClientOriginalName();
                $name_image = current(explode('.',$get_name_image));
                $new_image = $name_image.rand(0.99).'.'.$image->getClientOriginalExtension();
                $image->move('public/audio' , $new_image);
                $gallery = new Gallery();
                $gallery->galley_name = $new_image;
                $gallery->galley_image = $new_image;
                $gallery->product_id = $pro_id;
                $gallery->save();
            }
        }
    }

    public function select_gallery(Request $request)
    {
        $product_id = $request->pro_id;
        $gallery = Gallery::where('product_id', $product_id)->get();
        $gallery_count = $gallery->count();
        $output = '<table id="customers">
        <tr>
          <th>Name</th>
          <th>Audio</th>
          <th>Artist</th>
          
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          
        </tr>
        
        
        </tr>
      </table>';
      if($gallery_count>0){
        $i = 0;
        foreach($gallery as $gal){
            $i++;
            $output.=' <tr>
            <td>{{$i}}</td>
            <td>{{$gal->gallery_name}}</td>
            <td>{{$gal->galley_image}}</td>
            
          </tr>';
        }
      }
    }
}
