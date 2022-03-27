<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'App\Http\Controllers\RecController@Posts')->name('rec-data');

Route::middleware("auth")->group(function () {
    Route::get('/rec', function () {return view('rec');})->name('rec');
    Route::post('/rec/submit', 'App\Http\Controllers\RecController@submit')->name('rec-form');
    Route::get('/rec/all/{id}', 'App\Http\Controllers\RecController@showOneRecord')->name('rec-data-one');
    Route::get('/rec/all/{id}/update', 'App\Http\Controllers\RecController@updateRecord')->name('rec-update');
    Route::post('/rec/all/{id}/update', 'App\Http\Controllers\RecController@updateRecordSubmit')->name('rec-update-submit');
    Route::get('/rec/all/{id}/delete', 'App\Http\Controllers\RecController@deleteRecord')->name('rec-delete');
    Route::get('/logout',function () {
        Auth::logout();
        return redirect(route("rec-data"));
    })->name(name:'logout');
});

Route::middleware("guest")->group(function () {
    Route::get('/registration',function() {return view('registration');})->name('registration');
    Route::post('/registration',[\App\Http\Controllers\RegisterController::class, 'save']);
    Route::get('/login',function () {return view('login');})->name('login');
    Route::post('/login',[\App\Http\Controllers\LoginController::class, 'login']);
});

