<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Config;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // $response = $this->callRegisterApi($data);
        // if($response['statusCode'] !== 201 ) {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        // }
        // return false;
    }

    protected function register(Request $request)
    {


        $this->validator($request->all())->validate();
        // perform registration
        $isRegister = $this->callRegisterApi($request->all());
        // perform login
        $isLogin = $this->thirdPartyAutentication($request->all());

        if ($isRegister === 201 && $isLogin === 200) {
            $user = $this->create($request->all());
            $this->guard()->login($user);

            return $this->registered($request, $user)
                ?: redirect($this->redirectPath());
        } else {

            return redirect()->back()->withErrors(['api_error' => 'Failed to call third-party API']);
        }
    }


    protected function callRegisterApi($userData)
    {
        $baseUrl = Config::get('services.sixton_backend.base_url');
        $baseUrl = $baseUrl . "api/user/admin";

        $headers = [
            'Content-Type' => 'application/json',
        ];

        $postData = [
            'email' => $userData['email'],
            'password' => $userData['password'],
            'username' => $userData['name'],
            'firstName' => $userData['name'],
            'middleName' => $userData['name'],
            'surname' => $userData['name'],
            'contactNumber' => $userData['name'],
            "userRoles" => [
                [
                    "id" => 2
                ]
            ]

        ];

        $postData = json_encode($postData);
        $response = Http::withHeaders($headers)
            ->post($baseUrl, json_decode($postData, true));

        return $response->getStatusCode();
    }

    public function thirdPartyAutentication($user)
    {

        $baseUrl = Config::get('services.sixton_backend.base_url');
        $baseUrl = $baseUrl . "api/auth/login";

        $headers = [
            'Cookie' => 'JSESSIONID=E2AF891227B606393733CE50F2635572; JSESSIONID=E9D8BE532A0138CECECF267554ACE6E8',
            'Content-Type' => 'application/json',
        ];

        $postData = [
            'email' => $user['email'],
            'password' => $user['password'],
        ];

        $postData = json_encode($postData);

        $response = Http::withHeaders($headers)
            ->post($baseUrl, json_decode($postData, true));

        $token = $response['token'];

        Session::put('api_token', $token);

        return $response->getStatusCode();
    }
}
