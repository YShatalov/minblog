@extends('layouts.app')
@section('title-block') registration @endsection
@section('content' )
<div class="h-screen flex flex-col space-y-10 justify-center items-center">
    <div class="w-96 shadow-xl rounded p-5">
    <h1 class="text-3xl font-medium">Регистрация</h1>
    <form class="space-y-5 mt-5" action="{{ route('registration') }}" method="post">
        @csrf
            <input type="text" name="name" id = "name" class="w-full h-12 bg-gray-400 placeholder-white rounded px-3" placeholder="Имя">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <input type="text" name="email" id = "email" class="w-full h-12 bg-gray-400 placeholder-white rounded px-3" placeholder="Email">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <input type="password" name="password" id = "password" class="w-full h-12 bg-gray-400 placeholder-white rounded px-3" placeholder="Пароль">
            <input type="password" name="password_confirmation" id = "password" class="w-full h-12 bg-gray-400 placeholder-white rounded px-3" placeholder="Подтвердите пароль">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    
        <div class="form-group">
            <button class="font-medium bg-gray-600 hover:bg-gray-500 rounded-md p-2" type="submit" name="sendMe" value="1">Регистрация</button>
        </div><br>
    </form> 
    </div>
</div>
@endsection