<?php

namespace App\Http\Controllers;

use App\Services\BalanceService;
use Illuminate\Http\Request;

use App\Models\Balance;
use Illuminate\Auth\Events\Login;

class BalanceController extends Controller
{

    private $service;

    public function __construct(BalanceService $service)
    {
        $this->service = $service;
    }

    public function get()
    {
        $user = auth()->user();
        $balance = $this->service->get($user->id);
        return view('balance', ['balance' => $balance, 'user' => $user]);
    }

    public function depositar()
    {
        $user = auth()->user();

        $deposito = request('deposito');

        $saldoAtual = str_replace('.', '', request('saldoAtual'));
        $saldoAtual = str_replace(',', '.', $saldoAtual);

        if($deposito<=0){

            $balance = $this->service->get($user->id);

            return view('balance', ['balance' => $balance, 'user' => $user, 'dangerMsg' =>'Deposito menor ou igual a zero! :(']);

        }else{
            $newSaldo = $saldoAtual + $deposito;

            $this->service->update(['valor' => $newSaldo,], $user->id);
    
            $balance = $this->service->get($user->id);
    
            return view('balance', ['balance' => $balance, 'user' => $user, 'successMsg' =>'Deposito realizado com sucessso! :)']);
        }

       
    }

    public function sacar()
    {
        $user = auth()->user();

        $saque = request('saque');

        $saldoAtual = str_replace('.', '', request('saldoAtual'));
        $saldoAtual = str_replace(',', '.', $saldoAtual);

        if ($saque <= $saldoAtual) {

            $newSaldo = $saldoAtual - $saque;

            $this->service->update(['valor' => $newSaldo,], $user->id);

            $balance = $this->service->get($user->id);

            return view('balance', ['balance' => $balance, 'user' => $user, 'successMsg' =>'Saque realizado com sucessso!']);
        } else {

            $balance = $this->service->get($user->id);

            return view('balance', ['balance' => $balance, 'user' => $user, 'dangerMsg' => 'Não foi possivel realizar o saque! Valor maior que o Saldo!']);
        }
    }
}
