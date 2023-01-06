<?php

use PHPUnit\TextUI\XmlConfiguration\PhpHandler;

namespace App\Services;

use App\Repositories\ActiveRepositoryInterface;

class ActiveService
{
    private $repo;


    public function __construct(ActiveRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function store(array $data)
    {
        return $this->repo->store($data);
    }

    public function getList()
    {
        return $this->repo->getList();
    }

    public function get($id)
    {
        return $this->repo->get($id);
    }

    public function update(array $data, $id)
    {
        return $this->repo->update($data, $id);
    }

    public function destroy($id)
    {
        return $this->repo->destroy($id);
    }
}
