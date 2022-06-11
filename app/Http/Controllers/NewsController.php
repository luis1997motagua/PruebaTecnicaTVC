<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
   
    public function sectionnews(){
        return view('news.homenews');
    }
   
}
