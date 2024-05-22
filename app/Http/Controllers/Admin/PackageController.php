<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Config;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PackageController extends Controller
{
    public function getAllPackages()
    {

        $client = new Client();
        $baseUrl = Config::get('services.sixton_backend.base_url');
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
            'Value' => '6EE5732730FA7104EBE502F6D2A7AF80',
        ]));

        $response = $client->get($baseUrl . 'api/package', [
            'cookies' => $cookieJar,
        ]);

        $packages = json_decode($response->getBody(), true);
        $responseCookies = $cookieJar->toArray();

        return view('admin.package.list', compact('packages'));
    }

    public function getPackageById(Request $request)
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
            'Value' => '6EE5732730FA7104EBE502F6D2A7AF80',
        ]));

        $response = $client->get($baseUrl . 'api/package/' . $id, [
            'cookies' => $cookieJar,
        ]);
        
        $package = json_decode($response->getBody(), true);
        
        $responseCookies = $cookieJar->toArray();

        return view('admin.package.edit', compact('package'));
    }

    public function updatePakcage(Request $request)
    {

        $features = $request->input('features');
        $featuresList = [];
        $fetatureNumber = 1;
        for ($i=0; $i < sizeof($features); $i++){
            $fetatureNumber += $i;
            $index = 'feature'.$fetatureNumber; 
            $featuresList[$index] = $features[$i];
        }

        $baseUrl = Config::get('services.sixton_backend.base_url');
        $baseUrl = $baseUrl . "api/package";
        $token = Session::get('api_token');
        
        $headers = [
            'Cookie' => 'JSESSIONID=AEB8E43EEABB0B6BC2984FC7B970AF49; JSESSIONID=E9D8BE532A0138CECECF267554ACE6E8',
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/json', // Adjust based on the API's requirements
            ],
        ];

        $id = $request->id;
        $companyType = ['id'=> 1];

        $postData = [
            'id' => $id,
            'packageTitle' => $request->packageTitle,
            'packageTotalPrice' => (int)$request->packageTotlePrice,
            'packageFee' => (int)$request->packageFee,
            'stateFee' => (int)$request->stateFee,
            'packageDetail' => json_encode($featuresList),
            'companyType' => $companyType,
        ];
        
        $postData = json_encode($postData);

        $response = Http::withHeaders($headers)
            ->put($baseUrl, json_decode($postData, true));

        return redirect()->route('package.list')->with('success', 'Record updated successfully');
    }

    public function deletePackage(Request $request)
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
            'Value' => '3A8BD137FF409AC00E1339977DBBA15A',
        ]));

        $response = $client->delete($baseUrl . 'api/package/' . $id, [
            'cookies' => $cookieJar,
        ]);
        $apiData = json_decode($response->getBody(), true);
        return redirect()->route('package.list')->with('success', 'Record deleted successfully');
    }

    public function addNewPackage()
    {
        return view('admin.package.add');
    }

    public function savePackages(Request $request)
    {
        $features = $request->input('features');
        $featuresList = [];
        $fetatureNumber = 1;
        for ($i=0; $i < sizeof($features); $i++){
            $fetatureNumber += $i;
            $index = 'feature'.$fetatureNumber; 
            $featuresList[$index] = $features[$i];
        }
            
        
        $companyType = ['id'=> 1];
        // dd($featuresList);
        $baseUrl = Config::get('services.sixton_backend.base_url');
        $baseUrl = $baseUrl."api/package";
        $token = Session::get('api_token');
        $headers = [
            'Cookie' => 'JSESSIONID=6EE5732730FA7104EBE502F6D2A7AF80; JSESSIONID=E9D8BE532A0138CECECF267554ACE6E8',
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/json', // Adjust based on the API's requirements
            ],
        ];

        $postData = [
            'packageTitle' => $request->packageTitle,
            'packageTotalPrice' => (int)$request->packageTotlePrice,
            'packageFee' => (int)$request->packageFee,
            'stateFee' => (int)$request->stateFee,
            'packageDetail' => json_encode($featuresList),
            'companyType' => $companyType,
        ];
          
        $postData = json_encode($postData);

        $response = Http::withHeaders($headers)
            ->post($baseUrl, json_decode($postData, true));
        
        return redirect()->route('package.list')->with('success', 'Record added successfully');
        
    }
}
