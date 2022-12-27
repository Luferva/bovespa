<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Carteira de Saldo 
class Balance extends Model
{
    use HasFactory;

    protected $fillable = ['use_id','valor',];
   
}
