<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Transações feitas, Saque ou Deposito
class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','tipo','saldo'];
}
