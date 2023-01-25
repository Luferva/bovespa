<?php

namespace App\Repositories;
use PHPUnit\TextUI\XmlConfiguration\PhpHandler;



use App\Models\Balance;
use Illuminate\Database\Eloquent\Model;

class BalanceRepositoryEloquent implements BalanceRepositoryInterface
{

    protected $model;

    public function __construct(Balance $model)
    {
        $this->model = $model;
    }

    public function get($id)
    {
        return $this->model->find($id);
    }

    public function update(array $data, $id)
    {
        return $this->model->find($id)->update($data);
    }

}
