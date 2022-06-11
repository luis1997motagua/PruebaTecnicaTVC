<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NewsController extends Controller
{
   
    public function index(){
        $content = Noticia::all();

        return view('news.homenews',compact('content'));
    }

    
   
}
