<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Noticia;
use PHPUnit\Framework\Error\Notice;

class listController extends Controller
{
    public function index(){
        $noticias = Noticia::all();
        return view('news.lists',compact('noticias'));
    }

    public function edit($id){

        $noticias = Noticia::findOrFail($id);
        return view('news.edit',compact('noticias'));
    }

    public function update(Request $request,$id){
    
    }

    public function destroy($id){
        $noticias = Noticia::findOrFail($id);
        $noticias->delete();
        return redirect()->route('listnews.index');
    }
}
