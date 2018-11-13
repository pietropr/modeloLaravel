<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    //Definir tabela
    protected $table = 'autor';

    //Definir quais campos podemos inserir no banco
    protected $fillable = [
        'nome', 'email', 'user_id'
    ];
}
