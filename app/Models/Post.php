<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $fillable = [

        'categoria_id',
        'autor_id',
        'nome',
        'descricao',
        'conteudo',
        'situacao'
    ];

    public function categoria() {

        return $this->hasOne(Categoria::class);
    }
}
