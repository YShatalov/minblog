<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request) {

        $formFields = $request->validate([
            "email" => 'required|email|string',
            "password" => 'required'
        ]);

        if (Auth::attempt($formFields)) {
            return redirect()->route('rec-data');
        }
        return redirect(route('login'))->withErrors([
            'email' => 'Пользователь не найден, либо данные введены не правильно'
        ]);
    }
}
