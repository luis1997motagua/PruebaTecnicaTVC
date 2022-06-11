<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
class CreateNewController extends Controller
{
    public function index(){
        return view('news.form');
    }
   
   public function store(Request $request){
      $noticias = new Noticia();
      $noticias->Titulo=$request->input('txtnotice');
      $noticias->Descripcion=$request->input('txtdesc');
      $noticias->urlImage=$request->input('txturli');
      $noticias->save();
      
      return redirect()->route('news.index');
   }

  
}
