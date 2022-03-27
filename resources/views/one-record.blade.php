@extends('layouts.app')
@section('title-block') {{$data->title}} @endsection
@section('content' )
    <div class="m-auto px-4 py-8 max-w-xl">
    <h1 class="text-3xl text-center">{{$data->title}}</h1>
        <div class="">
            <img src="/storage/posts/{{$data->thumbnail}}" alt="" class="rounded-3xl">
            <p class="text-justify mt-4">{!! $data->description !!}</p>
            <p class="pt-4 text-right"><small>{{ $data->created_at}}</small></p>
            @if(Auth::check() and Auth::user()->role==1)
            <a href="{{route('rec-update', $data->id)}}"><button class="font-medium bg-gray-600 hover:bg-gray-500 rounded-md p-2">Редактировать</button></a>
            <a href="{{route('rec-delete', $data->id)}}"><button class="font-medium bg-gray-600 hover:bg-gray-500 rounded-md p-2">Удалить</button></a>
            @endif
            <br><br>
        </div>
    </div>
    @endsection