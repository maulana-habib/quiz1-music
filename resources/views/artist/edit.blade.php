@extends('layouts.app') 

 @section('content') 
 
    <div class="container"> 
 
        <h3>Edit Data Artis</h3>  
        <form action="{{ url('/album/' . $row->id) }}" method="POST">
            <input type="_method" type="hidden" value="PATCH">
          @csrf
          <div class="form-group">
                <label for="">NAMA ARTIS</label>
                <input type="text" name="artis_name" class="form-control" value="{{ $row->id}}" >
            </div>
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>


 @endsection 