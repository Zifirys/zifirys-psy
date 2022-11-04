<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artCotroller extends Controller{
    
    public function index(){
        return view('articles');
    }

    public function create(){
        return 'create';
    }

    public function store(){
        return 'store';
    }

    public function show(){
        return 'show';
    }

    public function edit(){
        return 'edit';
    }

    public function updata(){
        return 'updata';
    }

    public function delete(){
        return 'delete';
    }
}
