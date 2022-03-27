<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class RegisterController extends Controller
{
    public function save(Request $request) {
        if (auth()->check()) {
            return redirect()->to(route('rec-data'));
        }

        $validateFields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ]);

       /*  if (User::where('email',$validateFields['email'])->exists() ) {
            return redirect(route('user.registration'))->withErrors([
                'formError' => 'Такой пользователь уже зарегистрирован'
            ]);
        } */

        $user = User::create($validateFields);
        if ($user) {
            auth()->login($user);
            return redirect()->to(route('rec-data'));
        }
        return redirect(route('login'))->withErrors([
            'formError' => 'Произошла ошибка при сохранении пользователя'
        ]);
    }
}
