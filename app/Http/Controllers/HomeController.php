<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp\Client;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $url;
    protected $http;
    protected $headers;

    public function __construct()
    {   
        $this->http = $client = new Client([
            'base_uri' => env('F_API_URL'),
            'timeout'  => 2.0,
        ]);

        $this->headers = [
            'cache-control' => 'no-cache',
            'content-type' => 'application/x-www-form-urlencoded',
        ];
    }

    public function index()
    {	
        $categories = $this->categories();

    	return view('pages/home', compact('categories'));
    }

    public function show($query)
    {   
        $explore = $this->explore($query);

        var_dump($explore);

        //return view('pages/home', compact('categories'));
    }

    public function categories($url = 'venues/categories')
    {
       $response = $this->http->request('GET', $url, [
            'headers'         => $this->headers,
            'timeout'         => 30,
            'connect_timeout' => true,
            'http_errors'     => true,
            'query' => [
                'client_id' => env('F_CLIENT_ID'),
                'client_secret' => env('F_CLIENT_SECRET'),
                'v' => date('Ymd'),
                'near' => 'valletta'
            ]
        ]);
        
        $body = (string) $response->getBody();
        $body = (!empty($body)) ? json_decode($body, true) : null;

        return $body['response']['categories'];
    }

    public function explore($query, $url = 'venues/explore')
    {
       $response = $this->http->request('GET', $url, [
            'headers'         => $this->headers,
            'timeout'         => 30,
            'connect_timeout' => true,
            'http_errors'     => true,
            'query' => [
                'client_id' => env('F_CLIENT_ID'),
                'client_secret' => env('F_CLIENT_SECRET'),
                'v' => date('Ymd'),
                'near' => 'valletta',
                'query' => $query
            ]
        ]);
        
        $body = (string) $response->getBody();
        $body = (!empty($body)) ? json_decode($body, true) : null;

        return $body['response'];
    }
}
