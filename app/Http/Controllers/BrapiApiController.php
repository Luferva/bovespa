<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;


class BrapiApiController extends Controller
{
    public function getAllList()
    {
        $search = request('search');

        if ($search) {
            $response = Http::get('https://brapi.dev/api/quote/' . $search);
            $apiArray = json_decode($response->body());

            if($response->failed()){
                //dd($apiArray); 
                return view('search', ['apiArray' => $apiArray->error, 'search' =>$search, 'response' => $response]);
            }else{
                //dd($apiArray); 
                return view('search', ['apiArray' => $apiArray->results , 'search' =>$search, 'response' => $response]);
            }
            
        } else {

            $select = request('select');
            $order = request('order');
            $limit = request('limit');

            if ($select && $order && $limit) {
                $base_url = Http::get('https://brapi.dev/api/quote/list?sortBy=' . $select . '&sortOrder=' . $order . '&limit=' . $limit);
            } elseif ($select && $order) {
                $base_url = Http::get('https://brapi.dev/api/quote/list?sortBy=' . $select . '&sortOrder=' . $order);
            } elseif ($select && $limit) {
                $base_url = Http::get('https://brapi.dev/api/quote/list?sortBy=' . $select . '&limit=' . $limit);
            } elseif ($order && $limit) {
                $base_url = Http::get('https://brapi.dev/api/quote/list?sortOrder=' . $order . '&limit=' . $limit);
            } elseif ($select) {
                $base_url = Http::get('https://brapi.dev/api/quote/list?sortBy=' . $select);
            } elseif ($order) {
                $base_url = Http::get('https://brapi.dev/api/quote/list?sortOrder=' . $order);
            } elseif ($limit) {
                $base_url = Http::get('https://brapi.dev/api/quote/list?limit=' . $limit);
            } else {
                $base_url = Http::get('https://brapi.dev/api/quote/list');
            }

            $apiArray = json_decode($base_url->body());

            //dd($apiArray);        
            return view('welcome', ['apiArray' => $apiArray->stocks]);
        }
    }

    public function getTicker($ticker)
    {
        $base_url = Http::get('https://brapi.dev/api/quote/' . $ticker);

        $apiArray = json_decode($base_url->body());

        //dd($apiArray);        
        return view('show', ['apiArray' => $apiArray->results]);
    }

    /*
    public function sortBy(Request $request){
        $base_url = Http::get('https://brapi.dev/api/quote/list?sortBy='.$request);

        $apiArray = json_decode($base_url->body());

        dd($apiArray);        
        return view('welcome', ['apiArray' => $apiArray->stocks]);
    }*/
}
