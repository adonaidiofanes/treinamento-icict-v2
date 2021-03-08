<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'id_user',
    ];
}
