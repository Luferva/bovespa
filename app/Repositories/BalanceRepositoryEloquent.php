<?php

use PHPUnit\TextUI\XmlConfiguration\PhpHandler;

namespace App\Repositories;

use App\Models\Balance;
use Illuminate\Database\Eloquent\Model;

class BalanceRepositoryEloquent implements BalanceRepositoryInterface
{

    protected $model;

    public function __construct(Balance $model)
    {
        $this->model = $model;
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function getList()
    {
        return $this->model->all();
    }

    public function get($id)
    {
        return $this->model->find($id);
    }

    public function update(array $data, $id)
    {
        return $this->model->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->model->find($id)->delete($id);
    }

}