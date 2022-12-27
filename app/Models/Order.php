<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Ordem de Compra ou Venda
class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','cod_acoes','quantidade', 'saldo'];
}
