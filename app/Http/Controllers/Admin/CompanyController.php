<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin\PropertyType;
use App\Models\Admin\PropertyCategory;
use GuzzleHttp\Client;
use Config;
// use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function getAllCompanies()
    {
        $token = Session::get('api_token');
        $client = new Client();
        $baseUrl = Config::get('services.sixton_backend.base_url');

        $cookieJar = new CookieJar();

        $response = $client->get($baseUrl, [
            'cookies' => $cookieJar,
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/json',
            ],
        ]);

        $responseCookies = $cookieJar->toArray();

        $cookieJar->setCookie(new \GuzzleHttp\Cookie\SetCookie([
            'Name' => 'JSESSIONID',
            'Value' => '6182BB9917123FDB1F9CCB396B6FF142',
        ]));

        $response = $client->get($baseUrl . 'api/company', [
            'cookies' => $cookieJar,
        ]);
        $companies = json_decode($response->getBody(), true);
        // dd( $companies );
        $responseCookies = $cookieJar->toArray();

        return view('admin.company.list', compact('companies'));
    }

    public function getCompanyById(Request $request)
    {
        $client = new Client();
        $baseUrl = Config::get('services.sixton_backend.base_url');
        $id = $request->id;
        $token = Session::get('api_token');

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

        $response = $client->get($baseUrl . 'api/company/' . $id, [
            'cookies' => $cookieJar,
        ]);

        $company = json_decode($response->getBody(), true);

        $responseCookies = $cookieJar->toArray();
        // dd($company);
        return view('admin.company.edit', compact('company'));
    }
}
