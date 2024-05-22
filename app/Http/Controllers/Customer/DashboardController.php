<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Config;
use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{

    public function index(){
        $companies = $this->fetchCompaniesByUser();
        return view('customer.pages.dashboard', compact('companies'));
    }

    public function CompletedDocuments(){
        return view('customer.pages.dashboardCompletedDocuments');
    }

    public function VirtualMailbox (){
        return view('customer.pages.dashboardVirtualMailbox');
    }
    
    public function ServiceTax (){
        return view('customer.pages.dashboardServiceTax');
    }

    public function fetchCompaniesByUser(){
        
        $client = new Client();
        $baseUrl = Config::get('services.sixton_backend.base_url');
        
        $token = Session::get('api_token');
        $userId = Session::get('user_id');
        
        
        $cookieJar = new CookieJar();
        $response = $client->get($baseUrl, [
            'cookies' => $cookieJar,
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/json', // Adjust based on the API's requirements
            ],
        ]);
        $responseCookies = $cookieJar->toArray();

        $cookieJar->setCookie(new \GuzzleHttp\Cookie\SetCookie([
            'Name' => 'JSESSIONID',
            'Value' => '1126D63AA3574FF8EF12B6D6849DFA66',
        ]));

        $response = $client->get($baseUrl . 'api/company/by-user/' . $userId, [
            'cookies' => $cookieJar,
        ]);

       return $companies = json_decode($response->getBody(), true);

        $responseCookies = $cookieJar->toArray();
        foreach($companies as $company){
            print_r($company);
        }
        
        return view('admin.company.edit', compact('companies'));
    }
}
