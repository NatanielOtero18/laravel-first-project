<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   // sobrescribir la propiedad table sirve para cambiar la tabla a la que apunta el model
   // protected $table = "articles";
    use HasFactory;
    //protected $fillable = ['title', 'body']; //Habilita los inputs que se pueden enviar
    protected $guarded = [];
//deshabilita la proteccion de laravel contra massive input, al hacer esto NUNCA se debe enviar $request->all()
}
