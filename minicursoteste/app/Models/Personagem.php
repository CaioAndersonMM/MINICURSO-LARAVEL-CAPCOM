<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    protected $table = "personagens";
    protected $fillable = [
        'nome',
        'imagem',
        'descricao',
    ];

    public $timestamps = false;
}
