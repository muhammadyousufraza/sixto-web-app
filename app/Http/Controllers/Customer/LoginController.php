<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class LoginController extends Controller
{
    //
    public function login()
    {
        if(str_contains(URL::previous(), 'company-profle')) {
            Session::put('previous_url', URL::previous());
        } else{
            Session::put('previous_url', null);
        }
        return view('customer.pages.login');
    }

    protected function authenticate(Request $request)
    {
        $baseUrl = Config::get('services.sixton_backend.base_url');
        $baseUrl = $baseUrl."api/auth/login";

        $headers = [
            'Cookie' => 'JSESSIONID=E2AF891227B606393733CE50F2635572; JSESSIONID=E9D8BE532A0138CECECF267554ACE6E8',
            'Content-Type' => 'application/json',
        ];

        $postData = [
            'email' => $request->userEmail,
            'password' => $request->userPassword,
        ];
          
        $postData = json_encode($postData);
        
        $response = Http::withHeaders($headers)
            ->post($baseUrl, json_decode($postData, true));
        
        if ($response->getStatusCode() == 200) {
            $token = $response['token'];
            Session::put('user_id', $response['userId']);
            Session::put('logged_in_user', $response['userDetail']['firstName']);
            Session::put('api_token', $token);
            if (Session::get('previous_url') !== null ){
                return redirect()->route('payment')->with('success', 'Login Successfull');
            }
            return redirect()->route('customer.dashboard.dashboard')->with('success', 'Login Successfull');
        }
        
        return redirect()->route('login.page')->with('error', 'Login failed');
        
    }
}
