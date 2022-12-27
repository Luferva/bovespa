<?php

namespace App\Http\Controllers;

use App\Services\ActiveService;
use Illuminate\Http\Request;
use App\Models\Active;
use App\Models\Balance;
use App\Models\Order;
use App\Models\Transaction;



class ActiveController extends Controller
{
    private $service;


public function __construct(ActiveService $service){
	$this->service = $service;
}

public function store(array $data){
	return $this->service->store($data);
}

public function getList(){
	return $this->service->getList();
}

public function get($id){
	return $this->service->get($id);
}

public function update(array $data, $id){
	return $this->service->update($data,$id);
}

public function destroy($id){
	return $this->service->destroy($id);
}

}
