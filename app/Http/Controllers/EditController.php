<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class EditController extends Controller
{
    public function index(){
        return view('news.edit');        
    }

   

    public function update(Request $request,$id){

    }
  
}
