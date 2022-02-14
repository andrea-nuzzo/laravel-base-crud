@extends('layouts.base')

@section('pageContent')
<h1>Edit a Comic</h1>

<form action="{{route("comics.update", $comic->id)}}" method="POST">

    @csrf
    @method("PUT")

    {{-- +++ Title +++ --}}
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Add Title" value="{{$comic->title}}">

    </div>

    {{-- +++ Description +++ --}}
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="10" placeholder="Enter the description of the comic">{{$comic->description}}</textarea>
    </div>

    {{-- +++ Thumb +++ --}}
    <div class="form-group">
        <label for="thumb">Image</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Add the link to the image" value="{{$comic->thumb}}">
    </div>

    {{-- +++ Price +++ --}}
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Add the price of the comic" value="{{$comic->price}}">
    </div>

    {{-- +++ Series +++ --}}
    <div class="form-group">
        <label for="series">Series</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Add the serie of the comic" value="{{$comic->series}}">
    </div>

    {{-- +++ Sale Date +++ --}}
    <div class="form-group">
        <label for="sale_date">Date</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}" placeholder="Add the link to the image">
    </div>

    {{-- +++ Type +++ --}}
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Add the type of the comic" value="{{$comic->type}}">
    </div>
    
    <button type="submit" class="btn btn-success">Edit</button>
  </form>
@endsection