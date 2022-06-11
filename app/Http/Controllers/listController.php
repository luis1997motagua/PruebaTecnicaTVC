<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Noticia;

class listController extends Controller
{
    public function index(){
        $noticias = Noticia::all();
        return view('news.lists',compact('noticias'));
    }

  
}
