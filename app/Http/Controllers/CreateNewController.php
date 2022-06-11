<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateNewController extends Controller
{
    public function mantnews(){
        return view('news.addnew');
    }
}
