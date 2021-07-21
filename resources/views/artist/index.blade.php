@extends('layouts.app')

@section('content')

    <div class="container"> 
        <h3>Data Artist
        <a href="{{ url('/artist/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>

        </h3> 


          <table class="table table-bordered"> 
               <tr> 
                     <th>NAMA ARTIS</th>
                </tr> 
             @foreach($rows as $row) 
                 <tr> 
                      <td>{{ $row->artist_name }}</td> 
                      <td><a href="{{ url('artist/' . $row->artist_name . '/edit') }}"class="btn btn-primary btn-sm float-right" >EDIT</a></td>
                        <td>
                        <form action="{{ url('/artist/' . $row->artist_name) }}" method="POST"> 
                        <input name="_method" type="hidden" value="DELETE"> 
                        @csrf 
                        <button class="btn btn-danger btn-sm" >DELETE</button> 
                        </form> 
                        </td>
                 </tr> 
                 
             @endforeach 
            </table>
    </div>

@endsection