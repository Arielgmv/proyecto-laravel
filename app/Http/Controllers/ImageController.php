<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('image.create');
    }

    public function save(Request $request){
        var_dump($request->input('image_path'));
        var_dump($request->input('description'));
        die();
        //echo('ok');
    }
}
