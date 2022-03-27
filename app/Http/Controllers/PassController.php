<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PassRequest;
use App\Models\Pass;

class PassController extends Controller
{
    public function submit(PassRequest $req) {
        //dd($req->input('pass'));
        //$validation = $req->validate();
        $pass = new Pass();
        $pass->login = $req->input('login');
        $pass->pass = $req->input('pass');

        $pass->save();
        return redirect()->route('home')->with('success','Сообщение было добавлено');
    }

    public function allData() {
        /* $pass = new Pass;
        dd($pass->all()); */
        $pass = new Pass;
        //return view('messages',['data'=>$pass->orderBy('id','desc')->skip(1)->take(1)->get()]);
        return view('messages',['data'=>$pass->where('id','=','1')->get()]);
    }
}
