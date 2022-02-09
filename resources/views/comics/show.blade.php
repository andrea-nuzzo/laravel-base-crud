@extends('layouts.base')

@section('pageContent')
<h1>{{$comic->title}}</h1>
<div class="d-flex justify-content-center m-5">
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
</div>
<p class="text-justify">
    {{$comic->description}}
</p>
<div>
    <a href="{{route("comics.index")}}"><button type="button" class="btn btn-danger">Return Index</button></a>
</div>

@endsection

