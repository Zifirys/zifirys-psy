<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artCotroller extends Controller
{
    public function article(){
        return view('articles');
    }
}
