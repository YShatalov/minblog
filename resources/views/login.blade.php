@extends('layouts.app')
@section('title-block') login @endsection
@section('content' )
<div class="h-screen flex flex-col space-y-10 justify-center items-center">
    <div class="w-96 shadow-xl rounded p-5">
    <h1 class="text-3xl font-medium">Вход</h1>
    <form class="space-y-5 mt-5" action="{{ route('login') }}" method="post">
        @csrf
            <input type="text" name="email" id = "email" class="w-full h-12 bg-gray-400 placeholder-white rounded px-3" placeholder="Email">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <input type="password" name="password" id = "password" class="w-full h-12 bg-gray-400 placeholder-white rounded px-3" placeholder="Пароль">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button class="font-medium bg-gray-600 hover:bg-gray-500 rounded-md p-2" type="submit" name="sendMe" value="1">Войти</button>
            <a href="{{route('registration')}}" class="font-medium">Регистрация</a>
    </form> 
    </div>
</div>
    @endsection