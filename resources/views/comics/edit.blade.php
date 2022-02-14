@extends('layouts.base')

@section('pageContent')
<h1>Edit a Comic</h1>

<form action="{{route("comics.update", $comic->id)}}" method="POST">

    @csrf
    @method("PUT")

    {{-- +++ Title +++ --}}
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror mb-3" id="title" name="title" placeholder="Add Title" value="{{old("title") ? old("title") : $comic->title}}">

      @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>

    {{-- +++ Description +++ --}}
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror mb-3" id="description" name="description" rows="10" placeholder="Enter the description of the comic">{{old("description") ? old("description") :$comic->description}}</textarea>

        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
       @enderror
    </div>

    {{-- +++ Thumb +++ --}}
    <div class="form-group">
        <label for="thumb">Image</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror mb-3" id="thumb" name="thumb" placeholder="Add the link to the image" value="{{old('thumb') ? old('thumb') : $comic->thumb}}">

        @error('thumb')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    {{-- +++ Price +++ --}}
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror mb-3" id="price" name="price" placeholder="Add the price of the comic" value="{{old('price') ? old('price') : $comic->price}}">

        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    {{-- +++ Series +++ --}}
    <div class="form-group">
        <label for="series">Series</label>
        <input type="text" class="form-control @error('series') is-invalid @enderror mb-3" id="series" name="series" placeholder="Add the serie of the comic" value="{{old('series') ? old('series') : $comic->series}}">

        @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    {{-- +++ Sale Date +++ --}}
    <div class="form-group">
        <label for="sale_date">Date</label>
        <input type="date" class="form-control @error('sale_date') is-invalid @enderror mb-3" id="sale_date" name="sale_date" value="{{old('sale_date') ? old('sale_date') : $comic->sale_date}}" placeholder="Add the link to the image">

        @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    {{-- +++ Type +++ --}}
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control @error('type') is-invalid @enderror mb-3" id="type" name="type" placeholder="Add the type of the comic" value="{{old('type') ? old('type') : $comic->type}}">

        @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-success">Edit</button>
  </form>
@endsection