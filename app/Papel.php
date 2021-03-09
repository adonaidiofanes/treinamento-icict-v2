<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Papel extends Model
{
    protected $table = 'papeis';
    protected $fillables = ['nome', 'descricao'];

    public function permissoes()
    {
        return $this->belongsToMany(Permissao::class, 'papeis_permissoes');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
