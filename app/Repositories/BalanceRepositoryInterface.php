<?php
namespace App\Repositories;

use PHPUnit\TextUI\XmlConfiguration\PhpHandler;


use App\Models\Balance;
use Illuminate\Database\Eloquent\Model;

interface BalanceRepositoryInterface{
    
    public function __construct(Balance $model);

    public function get($id);

    public function update(array $data, $id);
 
}