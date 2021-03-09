<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    protected $table = 'permissoes';
    protected $fillables = ['nome', 'descricao'];

    // Uma permissão pode pertencer a muitos papéis
    public function papeis()
    {
        return $this->belongsToMany(Papel::class, 'papeis_permissoes');
    }
}
