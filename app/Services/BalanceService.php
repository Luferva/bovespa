<?php

namespace App\Services;

use PHPUnit\TextUI\XmlConfiguration\PhpHandler;



use App\Repositories\BalanceRepositoryEloquent;
use App\Repositories\BalanceRepositoryInterface;

class BalanceService
{
    private $repo;


    public function __construct(BalanceRepositoryEloquent $repo)
    {
        $this->repo = $repo;
    }

    public function get($id)
    {
        return $this->repo->get($id);
    }

    public function update(array $data, $id)
    {
        return $this->repo->update($data, $id);
    }

}
