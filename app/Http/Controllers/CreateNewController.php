<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
class CreateNewController extends Controller
{
    public function index(){
        return view('news.form');
    }
   public function store(){
    
   }
}
