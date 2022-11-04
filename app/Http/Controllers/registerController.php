<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\registerRequest;
use App\Models\registers;

class registerController extends Controller{

    public function index(){
        return view('register.index');
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

