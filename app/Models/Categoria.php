<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';

    protected $fillable = [
        'nome'
    ];


    //Faz a integração entre chave-estrangeira e primária
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
