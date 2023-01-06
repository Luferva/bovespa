<?php

use PHPUnit\TextUI\XmlConfiguration\PhpHandler;

namespace App\Repositories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;

class TransactionRepositoryEloquent
{

    protected $model;

    public function __construct(Transaction $model)
    {
        $this->model = $model;
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function get($id)
    {
        return $this->model->find($id);
    }

}
