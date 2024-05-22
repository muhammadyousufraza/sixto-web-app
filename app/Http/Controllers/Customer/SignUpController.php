<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class SignUpController extends Controller
{
    public function signUp(){
        return view('customer.pages.signup');
    }

    
    public function registerUser(Request $request){
        
        $baseUrl = Config::get('services.sixton_backend.base_url');
        $baseUrl = $baseUrl . "api/user";

        $headers = [
            'Content-Type' => 'application/json',
        ];

        $postData = [
            'email' => $request['email'],
            'password' => $request['password'],
            'username' => $request['firstName'],
            'firstName' => $request['firstName'],
            'middleName' => $request['lastName'],
            'surname' => $request['lastName'],
            'address' => "test",
            'contactNumber' => "12344-123123",
        ];
        
        $postData = json_encode($postData);
        $response = Http::withHeaders($headers)
            ->post($baseUrl, json_decode($postData, true));

            if($response->getStatusCode() == 201){
              return  $this->thirdPartyAutentication($request['email'], $request['password']);
            }
        
            // return view('customer.pages.signUp');
    }

    public function thirdPartyAutentication($email, $password)
    {
        $baseUrl = Config::get('services.sixton_backend.base_url');
        $baseUrl = $baseUrl."api/auth/login";

        $headers = [
            'Cookie' => 'JSESSIONID=E2AF891227B606393733CE50F2635572; JSESSIONID=E9D8BE532A0138CECECF267554ACE6E8',
            'Content-Type' => 'application/json',
        ];

        $postData = [
            'email' => $email,
            'password' => $password,
        ];
          
        $postData = json_encode($postData);
        
        $response = Http::withHeaders($headers)
            ->post($baseUrl, json_decode($postData, true));
        
        if($response->getStatusCode() == 200){
            $token = $response['token'];
            Session::put('user_id', $response['userId']);
            Session::put('api_token', $token);
            // return redirect()->route('customer.dashboard.dashboard')->with('success', 'Login Successfull');
        }
        
        return redirect()->route('login.page')->with('error', 'Login failed');
    }
}
