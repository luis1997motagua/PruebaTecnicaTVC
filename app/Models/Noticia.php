<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    //use HasFactory;
    protected $table="googlenotices";
    protected $primaryKey="Id";
    protected $fillable = [
      'Descripcion','Titulo','urlImage'
    ];
}
