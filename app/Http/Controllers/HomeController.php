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
    protected $near;
    protected $http;
    protected $headers;

    public function __construct()
    {   
        $this->http = $client = new Client([
            'base_uri' => env('F_API_URL'),
            'timeout'  => 2.0,
            'verify' => false
        ]);

        $this->headers = [
            'cache-control' => 'no-cache',
            'content-type' => 'application/x-www-form-urlencoded',
        ];

        $this->near = 'valletta';
    }

    public function index()
    {	
        $categories = $this->categories();
        $sections = $this->section();

    	return view('pages/home', compact('categories', 'sections'));
    }

    public function show($query = '', $section = '')
    {   
        $explorers = $this->explore($query, $section);
        $warning = (!empty($explorers['warning'])) ? $explorers['warning'] : '';
        $explorers = array_column($explorers['groups'][0]['items'], 'venue');

        return view('aside/list', compact('explorers', 'warning'));
    }

    public function categories($url = 'venues/categories')
    {
       $response = $this->http->request('GET', $url, [
            'headers' => $this->headers,
            'timeout' => 30,
            'connect_timeout' => true,
            'http_errors' => true,
            'query' => [
                'client_id' => env('F_CLIENT_ID'),
                'client_secret' => env('F_CLIENT_SECRET'),
                'v' => date('Ymd'),
                'near' =>  $this->near
            ]
        ]);
        
        $body = (string) $response->getBody();
        $body = (!empty($body)) ? json_decode($body, true) : null;

        return $body['response']['categories'];
    }

    public function explore($query = '', $section = '', $url = 'venues/explore')
    {

       $params['client_id'] = env('F_CLIENT_ID');
       $params['client_secret'] = env('F_CLIENT_SECRET');
       $params['v'] = date('Ymd');
       $params['near'] = $this->near;
       $params['venuePhotos'] = 1;
       ($section != 'null' ? $params['section'] = $section : '');
       ($query != 'null' ? $params['query'] = $query : '');


       $response = $this->http->request('GET', $url, [
            'headers' => $this->headers,
            'timeout' => 30,
            'connect_timeout' => true,
            'http_errors' => true,
            'query' => $params
        ]);
        
        $body = (string) $response->getBody();
        $body = (!empty($body)) ? json_decode($body, true) : null;

        return $body['response'];
    }

    public function venues($id, $url = 'venues/')
    {

       $params['client_id'] = env('F_CLIENT_ID');
       $params['client_secret'] = env('F_CLIENT_SECRET');
       $params['v'] = date('Ymd');


       $response = $this->http->request('GET', $url.$id, [
            'headers' => $this->headers,
            'timeout' => 30,
            'connect_timeout' => true,
            'http_errors' => true,
            'query' => $params
        ]);
        
        $body = (string) $response->getBody();
        $body = (!empty($body)) ? json_decode($body, true) : null;

        return $body['response'];
    }

    public function likes($id, $url = 'venues/')
    {

       $params['client_id'] = env('F_CLIENT_ID');
       $params['client_secret'] = env('F_CLIENT_SECRET');
       $params['v'] = date('Ymd');


       $response = $this->http->request('GET', $url.$id.'/likes', [
            'headers' => $this->headers,
            'timeout' => 30,
            'connect_timeout' => true,
            'http_errors' => true,
            'query' => $params
        ]);
        
        $body = (string) $response->getBody();
        $body = (!empty($body)) ? json_decode($body, true) : null;

        return $body['response'];
    }

    public function section()
    {
        return ['all', 'food', 'drinks', 'coffee', 'shops', 'arts', 'outdoors', 'sights', 'trending'];
    }
}
