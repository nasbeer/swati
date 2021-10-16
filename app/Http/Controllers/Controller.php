<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\BadResponseException;

class Controller extends BaseController {

	function __construct() {
		$this->client=new \GuzzleHttp\Client();
	}

	use AuthorizesRequests,
	DispatchesJobs,
	ValidatesRequests;

	public function getproducts(Request $request){

		$apiKey='pubkey-e8N8Z6eGMW1Rc4G9H3Y1MmF7iph9H0';
		$url='http://swati.centraqa.com/api/checkout/products/';

		$client->request('POST', 'http://swati.centraqa.com/api/checkout/products/', [
			'headers' => [
				'Origin' => 'http://localhost:1229',
				"APIKey" => $apiKey,

			]
		]);
		$response=$this->client->get($url);
		$results=$response->getBody();
		$results=json_decode($results);
		return response()->json($results);
	}


}