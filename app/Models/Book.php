<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    
    protected $fillable = ['id_user', 'autor', 'titulo', 'subtitulo', 'edicacao', 'editora', 'ano_de_publicacao'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
