<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;



class BrapiApiController extends Controller
{
    public function getList(){
        $base_url=Http::get('https://brapi.dev/api/quote/PETR4');

        $apiArray=json_decode($base_url->body());

        //dd($apiArray);        
        return view('welcome', ['apiArray'=>$apiArray->results]);
    }

    public function getAllList(){

        $base_url=Http::get('https://brapi.dev/api/quote/list');

        $apiArray=json_decode($base_url->body());

        //dd($apiArray);        
        return view('welcome', ['apiArray'=>$apiArray->stocks]);
    }
}
