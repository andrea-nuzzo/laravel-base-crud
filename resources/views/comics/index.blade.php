@extends('layouts.base')

@section('pageContent')
    {{-- Titolo --}}
    <h2>List of Comics</h2>

    {{-- Tabella fumetti --}}
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Peso</th>
            <th scope="col">Tempo cottura</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($products as $product) 
          <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->weight}}</td>
            <td>{{$product->cooking_time}}</td>
            <td>
                <a href="{{route("products.show", $product->id)}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection