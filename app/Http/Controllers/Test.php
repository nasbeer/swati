<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\BadResponseException;

use GuzzleHttp\Pool;
//use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Stream\Stream;

class Test extends Controller
{
  
	function __construct() {
		$this->client=new \GuzzleHttp\Client();
	}


		public function index(Request $request){
			$client = new \GuzzleHttp\Client([
				'base_uri' => 'https://swati.centraqa.com/api/checkout/']);
			//	$client  = new \GuzzleHttp\Client(['verify' =>false]); //ssl verifyication 
			$apiKey='pubkey-e8N8Z6eGMW1Rc4G9H3Y1MmF7iph9H0';
			//	$url='http://swati.centraqa.com/api/checkout/products/';

		$response =	$client->request('GET','/categories/',
			[	'headers', array(
					'Origin '=>'http://localhost:1229',
					// "APIKey"=>"pubkey-e8N8Z6eGMW1Rc4G9H3Y1MmF7iph9H0",
					//  "X-Centra-Request-ID "=>" 1_678fff3657cd54e077a2e81123f79762",
					//  "X-Correlation-ID "=>" centra_1_678fff3657cd54e077a2e81123f79762",
					//  "Content-type "=>" application/json",
					//  "Vary "=>" Accept-Encoding",

				)
			],
			[]
		);
			//$response=$this->client->get($client);
		//	$results=$response->getBody();
		//$data=json_encode($client);
		//echo "<pre>"	.print_r($data)."</pre>";
			//dd($response);
			//echo $response->getStatusCode();
		//	var_export($response->eof());
			//echo $response->getBody();
			// $json =$response->getBody();
			// //$two = $response->getBody();
			// $one = json_encode($response);
			// print_r($json);
		//	return response()->json($results);
		//$body = $response->getBody();
			
		//	$body = $response->getContents();
		// $one = json_encode($response->getBody());
		// 	$status = $response->getStatusCode();
		// 	echo print_r($one);
			//echo print_r($status);
			dd($response);
			// dsm($status);

			
	}
	


}