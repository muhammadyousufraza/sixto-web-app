<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Config;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        $baseUrl = Config::get('services.sixton_backend.base_url');
        $baseUrl = $baseUrl."api/auth/login";

        $headers = [
            'Cookie' => 'JSESSIONID=E2AF891227B606393733CE50F2635572; JSESSIONID=E9D8BE532A0138CECECF267554ACE6E8',
            'Content-Type' => 'application/json',
        ];

        // env('Admin_Email', 'Laravel')
        // env('Admin_Password', 'Laravel')

        $postData = [
            'email' => $request->email,
            'password' => $request->password,
        ];
          
        $postData = json_encode($postData);
        
        $response = Http::withHeaders($headers)
            ->post($baseUrl, json_decode($postData, true));
        
        // dd( $response);
        $token = $response['token'];
        
        Session::put('api_token', $token);
        
        // return redirect()->intended($this->redirectPath());
    }
}