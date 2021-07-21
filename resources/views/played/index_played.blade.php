@extends('layouts.app')

@section('content')

    <div class="container"> 
        <h3>Data Played
        <a href="{{ url('/played/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>

        </h3> 


          <table class="table table-bordered"> 
               <tr> 
                     <th>ID AlBUM</th>
                     <th>ID TRACK</th>
                     <th>PLAYED</th>
                </tr> 
             @foreach($rows as $row) 
                 <tr> 
                      <td>{{ $row->album_id }}</td> 
                      <td>{{ $row->track_id }}</td> 
                      <td>{{ $row->played }}</td> 
                 </tr> 
             @endforeach 
            </table>
    </div>

@endsection