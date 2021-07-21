@extends('layouts.app') 

 @section('content') 
 
    <div class="container"> 
 
        <h3>Edit Data Track</h3>  
        <form action="{{ url('/track/' . $row->id) }}" method="POST">
            <input type="_method" type="hidden" value="PATCH">
          @csrf
            <div class="form-group">
                <label>NAMA TRACK</label> 
                <input type="text" name="track_name" class="form-control">
            </div>
            <div class="form-group">
                <label>ID ARTIST</label> 
                <input type="text" name="artist_id" class="form-control">
            </div> 
            <div class="form-group">
                <label>ID ALBUM</label> 
                <input type="text" name="album_id" class="form-control">
            </div> 
            <div class="form-group">
                <label>TIME</label> 
                <input type="text" name="time" class="form-control">
            </div> 
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>


 @endsection 