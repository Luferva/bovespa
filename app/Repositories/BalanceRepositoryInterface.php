<?php

use PHPUnit\TextUI\XmlConfiguration\PhpHandler;

namespace App\Repositories;

use App\Models\Balance;
use Illuminate\Database\Eloquent\Model;

interface BalanceRepositoryInterface{
    
    public function __construct(Balance $model);

    public function store(array $data);

    public function getList();

    public function get($id);

    public function update(array $data, $id);

    public function destroy($id);

    
}