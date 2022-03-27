@extends('layouts.app')
@section('title-block') all blog @endsection
@section('content')ß
    @foreach($data as $el)
        <div class="container bg-secondary mt-4 rounded">
        </br>
            <h3>{{ $el->title }}</h3>
            <p>{{ $el->record }}</p>
            <p><small>{{ $el->created_at}}</small></p>
            <a href="{{route('rec-data-one', $el->id)}}"><button class="btn btn-outline-dark">Детальнее</button></a>
            </br></br>
        </div>
    @endforeach
    @endsection