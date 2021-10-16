<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
USE Goutte;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){


$auth_token = 'pubkey-e8N8Z6eGMW1Rc4G9H3Y1MmF7iph9H0';

$headers   = array();
$headers[] = 'Authorization: Token ' . $auth_token;
$curl      = curl_init();
curl_setopt_array($curl, [
        CURLOPT_URL => "http://swati.centraqa.com/api/checkout/products/",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYPEER =>FALSE,
        CURLOPT_SSL_VERIFYHOST => FALSE,
       // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
	// CURLOPT_POSTFIELDS => ["price_amount=1229.0",
	// 						"price_currency=EUR",
	// 						"title=Order #390551",
	// 						"receive_currency=EUR",
	// 						"callback_url=https://coingate.requestcatcher.com/payment",
	// 						"success_url=http://example.com/success" ,
	// 						"cancel_url=http://example.com/cancel",
	// 						"order_id=390551",
	// 						"description=1 x Apple iPhone 12 "
	// ],
	CURLOPT_HTTPHEADER => [
		"Access-Control-Allow-Origin : http://localhost:1229 ",
	//	'Authorization: Token ' . $auth_token,
		 "X-Centra-Request-ID: 1_375b289374dfd7183002e508e30a775b",
		 "X-Correlation-ID : centra_1_375b289374dfd7183002e508e30a775b",
		// "x-rapidapi-key: 4787fb1d34msh5d865994d592badp1f6f93jsnbcbc449e8362"
	],
]);
$response1 = Goutte::request('GET', "http://swati.centraqa.com/api/checkout/products/");
//$json = curl_exec($curl);
$response = json_decode($response1, true);
//$err = curl_error($curl);

echo $response;
    }
}

