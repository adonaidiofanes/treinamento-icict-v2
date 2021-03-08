<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVacina extends Model
{
    protected $fillable = ['id_user', 'id_vacina'];
}
