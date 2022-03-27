@extends('layouts.app')
@section('title-block') update record @endsection
@section('content' )
    <div class="m-auto px-4 py-8 max-w-xl">
    <h1 class="text-center text-3xl">Обновление статьи</h1>
    <form action="{{ route('rec-update-submit' , $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Название статьи</label>
            <input type="text" name="title" value="{{$data->title}}" id = "title" class="w-full h-12 bg-gray-400 placeholder-white rounded px-3">
        </div>
        <div class="form-group">
            <label for="name">Превью</label>
            <textarea name="preview" id="preview" cols="30" rows="10" class="w-full h-12 bg-gray-400 placeholder-white rounded px-3">{{$data->preview}}</textarea>
        </div>
        <div class="form-group">
            <label for="name">Текст статьи</label>
            <textarea name="description" id="description" cols="30" rows="10" class="w-full h-42 bg-gray-400 placeholder-white rounded px-3">{{$data->description}}</textarea>
        </div>
        <input type="file" name="thumbnail" id="thumbnail">
    </br></br>  
        <button type="submit" class="font-medium bg-gray-600 hover:bg-gray-500 rounded-md p-2">Обновить</button>
    </form> 
    </div>
    @endsection