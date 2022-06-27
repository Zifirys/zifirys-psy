<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recController extends Controller
{
    public function recover(){
        return view('recover');
    }
}
