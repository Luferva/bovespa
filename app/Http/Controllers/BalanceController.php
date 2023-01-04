<?php

namespace App\Http\Controllers;

use App\Services\BalanceService;
use Illuminate\Http\Request;

use App\Models\Balance;

class BalanceController extends Controller
{   
    public function consultaSaldo(){
        return view('balance');
    }

    private $service; 
    
    public function __construct(BalanceService $service){
        $this->service = $service;
    } 

    public function store(Request $request){
        return $this->service->store([
            'user_id'=> $request->user_id,
            'valor'=> $request->valor,
        ]);
    }
    
    public function getList(){
        return $this->service->getList();
    }
    
    public function get($id){
        return $this->service->get($id);
    }
    
    public function update(Request $request, $id){
        return $this->service->update([
            'user_id'=> $request->user_id,
            'valor'=> $request->valor,
        ],$id);
    }
    
    public function destroy($id){
        return $this->service->destroy($id);
    }

    



}
