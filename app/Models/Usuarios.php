<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    protected $fillable = [ 
        'nome',
        'tipo_usuario',
        'email',
        'senha',
        'saldo',
        'data_cadastro'
    ];
}
