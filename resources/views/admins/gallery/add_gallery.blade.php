@extends('layout.admin_layout')
@section('admin')
    <div class="panel-body">
        
        <input type="hidden" value="" name="pro_id" class="pro_id">
        <form action="{{route('admins.product')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-md-3" align="right">

            </div>
            <div class="col-md-6">
            <input type="file"   class="form-control" id="file" name="file[]" accept="audio/*" multiple> 
            </div>
            <div class="col-md-3">
            
                <input type="submit" name="upload" value="upload">
            </div>
            </div>    
        <div id="gallery_load">
            <table id="customers">
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
              </table>
        </div>
    </div>
@endsection