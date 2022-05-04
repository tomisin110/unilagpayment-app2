<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\News;

class HomeController extends Controller
{
      public function index(){
        $role=Auth::user()->role;
        
        
        
        if($role =='cab-owner'){
            return view('cabowner');
        }
        if ($role == 'shop-owner') {
            return view('shopowner');
        }
        else{
            return view('dashboard');
        }
    }
    public function usernews(){
        $news = news::all();
        return view('usernews', compact('news'));
    }
    public function fullusernews($id)
    {
        $news = news::find($id);
        return view('fullusernews', compact('news'));
    }
    public function payment(){
        return view('payment');
    }
    public function verify($reference){
      $sec= "pk_test_1330e9ed4cc11b816de64dc8a2e253bcebcdf4a4"; 
        $curl = curl_init();



        curl_setopt_array($curl, array(

            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",

            CURLOPT_RETURNTRANSFER => true,

            CURLOPT_ENCODING => "",

            CURLOPT_MAXREDIRS => 10,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,

            CURLOPT_TIMEOUT => 30,
            

            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

            CURLOPT_CUSTOMREQUEST => "GET",

            CURLOPT_HTTPHEADER => array(

                "Authorization: Bearer $sec",

                "Cache-Control: no-cache",

            ),

        ));



        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);
        $new_data= json_decode($response);
        return [$new_data];
    }
}
