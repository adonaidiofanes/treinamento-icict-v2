<?php

namespace App;

use App\Permissao;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'cpf', 'papel_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // um usuário, tem um endereço
    public function endereco()
    {
        return $this->hasOne(Endereco::class, 'id_user');
    }

    // 4 argumentos:
        // 1. A Model que queremos alcançar (Vacina::class)
        // 2. O nome da tabela pivot (user_vacinas)
        // 3. O campo que referencia a Model que estamos (no nosso caso é a User)
        // 4. O campo que referencia a Model que queremos alcançar (id_vacina)
    public function vacinas()
    {
        return $this->belongsToMany(Vacina::class, 'user_vacinas', 'id_user', 'id_vacina');
    }

    public function papel()
    {
        return $this->belongsTo(Papel::class);
    }

    public function checarPapel(Permissao $permissao)
    {
        // Método contains: passa um par de chave/valor para verificar
        // se o papel buscado existe na collection
        return $permissao->papeis->contains($this->papel);
    }
    
}
