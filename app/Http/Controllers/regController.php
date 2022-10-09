<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\registerRequest;
use App\Models\registers;

class regController extends Controller{

    public function reg(){
        return view('reg');
    }

    public function submit(registerRequest $req){
        $register = new registers();
        $register->name = $req->input('name');
        $register->password = $req->input('password');
        $register->email = $req->input('email');

        $register->save();

        return redirect()->route('home')->with('success', 'Вы зарегестрированы');
    }
}

