<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
use Config;
// use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('admin.users.index', ['users' => $model->paginate(15)]);
    }

    public function getAllUsers()
    {

        $token = Session::get('api_token');
        // dd($token);
        $client = new Client();
        $baseUrl = Config::get('services.sixton_backend.base_url');

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
               'Value' => 'E2AF891227B606393733CE50F2635572',
           ]));
        
        // dd($responseCookies);
        $response = $client->get($baseUrl.'api/user', [
               'cookies' => $cookieJar,
           ]);
        
        $allUsers = json_decode($response->getBody(), true);

        $responseCookies = $cookieJar->toArray();
        
        return view('admin.customer.list', compact('allUsers'));
    }

    public function getUserById(Request $request){
        // Create a new Guzzle client
        $token = Session::get('api_token');
        $client = new Client();
        $baseUrl = Config::get('services.sixton_backend.base_url');
        $id = $request->id;
        // Create a new CookieJar to manage cookies
        $cookieJar = new CookieJar();

        // Make a request with cookies
        $response = $client->get($baseUrl, [
            'cookies' => $cookieJar,
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/json', // Adjust based on the API's requirements
            ],
        ]);

        // Access the response cookies
        $responseCookies = $cookieJar->toArray();

        // You can also add cookies to the CookieJar
        $cookieJar->setCookie(new \GuzzleHttp\Cookie\SetCookie([
            'Name' => 'JSESSIONID',
            'Value' => 'E2AF891227B606393733CE50F2635572',
           //  'Domain' => 'localhost',
            // Add other necessary cookie parameters
        ]));
        // dd($cookieJar);
        // Make another request with updated cookies
        $response = $client->get($baseUrl.'api/user/'.$id, [
            'cookies' => $cookieJar,
        ]);
        $user = json_decode($response->getBody(), true);

        // Access the updated response cookies
        $responseCookies = $cookieJar->toArray();

        return view('admin.customer.edit', compact('user'));
    }

    public function deleteUser(Request $request){
        // Create a new Guzzle client
        $token = Session::get('api_token');
        $client = new Client();
        $baseUrl = Config::get('services.sixton_backend.base_url');
        $id = $request->id;
        // Create a new CookieJar to manage cookies
        $cookieJar = new CookieJar();

        // Make a request with cookies
        $response = $client->get($baseUrl, [
            'cookies' => $cookieJar,
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/json', // Adjust based on the API's requirements
            ],
        ]);

        // Access the response cookies
        $responseCookies = $cookieJar->toArray();


        $cookieJar->setCookie(new \GuzzleHttp\Cookie\SetCookie([
            'Name' => 'JSESSIONID',
            'Value' => 'E2AF891227B606393733CE50F2635572',

        ]));

        $response = $client->delete($baseUrl.'api/user/'.$id, [
            'cookies' => $cookieJar,
        ]);
        $apiData = json_decode($response->getBody(), true);

        return redirect()->route('users.list')->with('success', 'Record deleted successfully');
    }
}
