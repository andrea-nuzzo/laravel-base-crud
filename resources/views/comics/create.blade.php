@extends('layouts.base')

@section('pageContent')
<h1>Add a new Comic</h1>

<form action="{{route("comics.store")}}" method="POST">
    @csrf

    {{-- +++ Title +++ --}}
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Add Title">
    </div>

    {{-- +++ Description +++ --}}
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="10" placeholder="Enter the description of the comic"></textarea>
    </div>

    {{-- +++ Thumb +++ --}}
    <div class="form-group">
        <label for="thumb">Image</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Add the link to the image">
    </div>

    {{-- +++ Price +++ --}}
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Add the price of the comic">
    </div>

    {{-- +++ Series +++ --}}
    <div class="form-group">
        <label for="series">Series</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Add the serie of the comic">
    </div>

    {{-- +++ Sale Date +++ --}}
    <div class="form-group">
        <label for="sale_date">Date</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" value="2022-02-10" placeholder="Add the link to the image">
    </div>

    {{-- +++ Type +++ --}}
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Add the type of the comic">
    </div>
    
    <button type="submit" class="btn btn-success">Add</button>
  </form>
@endsection