<?php

namespace App\Http\Controllers;

use App\Services\BalanceService;
use Illuminate\Http\Request;

use App\Models\Balance;
use Illuminate\Auth\Events\Login;

class BalanceController extends Controller
{   
   
    private $service; 
    
    public function __construct(BalanceService $service){
        $this->service = $service;
    } 

    public function get($id){

        $user = auth()->user();

        if($id == $user->id){
            $balance = $this->service->get($id);
            return view('balance',['balance'=>$balance, 'user'=>$user]);
        }else{
            return view('auth/login');
        }    
    }
    
    public function update(Request $request, $id){
        return $this->service->update([
            'user_id'=> $request->user_id,
            'valor'=> $request->valor,
        ],$id);
    }
    
}
