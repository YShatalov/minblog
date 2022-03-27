@extends('layouts.app')
@section('title-block') Posts @endsection
@section('content')
    <br>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">
    @foreach($data as $el)
        @include("inc.posts.item",["data" => $data])
    @endforeach
    {{ $data->links() }}
    </div>
    @endsection