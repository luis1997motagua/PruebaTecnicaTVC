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

    public function edit($id){

    }

    public function destroy($id){
        $noticias = Noticia::findOrFail($id);
        $noticias->delete();
        return redirect()->route('listnews.index');
    }
}
