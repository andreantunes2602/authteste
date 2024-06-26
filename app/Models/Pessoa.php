<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    use AuthenticableTrait;

    protected $fillable = [
        'nome',
        'cpf',
        'password'
    ];


}
