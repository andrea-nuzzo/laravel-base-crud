@extends('layouts.base')

@section('pageContent')
    {{-- Titolo --}}
    <h2>List of Comics</h2>

    <a href="{{route("comics.create")}}"><button type="button" class="btn btn-success m-3">Create</button></a>

    {{-- Tabella fumetti --}}
    <table class="table text-white">
        <thead>
          <tr>
            <th scope="col">#</th> 
            <th scope="col">Title</th>
            <th scope="col">Series</th>
            <th scope="col">Sale Date</th>
            <th scope="col">Type</th>
            <th scope="col">View</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($comics as $comic) 
          <tr>
            <td>{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
            <td>
                <a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-outline-light">Show</button></a>
                <a href="{{route("comics.edit", $comic->id)}}"><button type="button" class="btn btn-outline-warning m-1">Edit</button></a>
                <a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            </td>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection