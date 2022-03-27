@extends('layouts.app')
@section('title-block') all login @endsection
@section('content' )
    <h1>Все логины</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->login }}</h3>
            <p>{{ $el->pass }}</p>
            <p><small>{{ $el->created_at}}</small></p>
            <a href="#"><button class="btn btn-warning">Детальнее</button></a>
        </div>
    @endforeach
    @endsection