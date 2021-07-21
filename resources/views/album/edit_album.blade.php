@extends('layouts.app') 

 @section('content') 
 
    <div class="container"> 
 
        <h3>Edit Data Album</h3>  
        <form action="{{ url('/album/' . $row->id) }}" method="POST">
            <input type="_method" type="hidden" value="PATCH">
          @csrf
          <div class="form-group">
                <label for="">ID ALBUM</label>
                <input type="text" name="album_id" class="form-control" value="{{ $row->id}}" >
            </div>
            <div class="form-group">
                <label for="">NAMA ALBUM</label>
                <input type="text" name="album_name" class="form-control" value="{{ $row->name}}">
            <div class="form-group">
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>


 @endsection 