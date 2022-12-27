<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Carteria de Ativos
class Active extends Model
{
    use HasFactory;

    protected $fillable = ['use_id','cod_acoes','quantidade'];
}
