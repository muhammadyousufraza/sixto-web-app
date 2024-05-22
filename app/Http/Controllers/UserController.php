<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
// use App\Http\Controllers\Client;
use Config;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

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

    public function createUser_()
    {
        $baseUrl = Config::get('services.sixton_backend.base_url');

        $client = new Client([
            'base_uri' => $baseUrl,
        ]);
        
        $postData = [
            "username" => "user2",
            "email" => "user2@test.com",
            "password"  => "112233",
            "firstName" => "first",
            "middleName" => "middle",
            "surname" => "surname",
            "address" => "address",
            "contactNumber" => "+92333333"
        ];

        try {
            $response = $client->request('POST', 'api/user', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJ0ZXN0QHRlc3QuY29tIiwic2VyaWFsVmVyc2lvblVJRCI6MSwiZmlyc3RUaW1lTG9naW4iOmZhbHNlLCJwYXNzd29yZCI6IiQyYSQxMCRRaXhSY3RNMnY2YUFkbllxUHoxVmV1YThGRGxhRDJ6TGRRV1V4RnpVQmZsR0ZXMTB5WHFPNiIsImlkIjoyLCJlbWFpbCI6InRlc3RAdGVzdC5jb20iLCJhdXRob3JpdGllcyI6W10sInVzZXJuYW1lIjoidGVzdEB0ZXN0LmNvbSIsImlhdCI6MTcwMzc5NDQzNywiZXhwIjoxNzAzODgwODM3fQ.P8ZalUaciRO3Y-rlfIFneUMb19msczBVuo-7kAby1zn-F0myQmUfQzbnf4biGew3eADm4ZNYVPzvpwGEvQQNJQ', // Replace with your bearer token
                ],
                'cookies' => [
                    'JSESSIONID' => 'E2AF891227B606393733CE50F2635572', // Replace 'abc' with your JSESSIONID value
                ],
                'json' => json_encode($postData),
            ]);
            dd($response);
            $statusCode = $response->getStatusCode();
            $data = $response->getBody()->getContents();

            return $data;
        } catch (\Exception $e) {
            // Handle exceptions or errors
            return $e->getMessage();
        }
    }

    public function createUser(){

        $baseUrl = Config::get('services.sixton_backend.base_url');
        $baseUrl = $baseUrl."api/user";

        $headers = [
            'Cookie' => 'JSESSIONID=D13DA4F44560C9C1EAB97E254DDC81B3; JSESSIONID=E4D8ABCAA33FBA0E1E9F6C421427FC2B',
            // 'Authorization' => 'Bearer eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJ0ZXN0QHRlc3QuY29tIiwic2VyaWFsVmVyc2lvblVJRCI6MSwiZmlyc3RUaW1lTG9naW4iOmZhbHNlLCJwYXNzd29yZCI6IiQyYSQxMCRRaXhSY3RNMnY2YUFkbllxUHoxVmV1YThGRGxhRDJ6TGRRV1V4RnpVQmZsR0ZXMTB5WHFPNiIsImlkIjoyLCJlbWFpbCI6InRlc3RAdGVzdC5jb20iLCJhdXRob3JpdGllcyI6W10sInVzZXJuYW1lIjoidGVzdEB0ZXN0LmNvbSIsImlhdCI6MTcwNjM2Mzg2NCwiZXhwIjoxNzA2NDUwMjY0fQ.RvE4wdjnIudnvjK5YjUrZCRIsZ5AGJODWGoAW9nG1gpcK0z0Lyo22G12OFLDbTc24wb4v__pT8lyVIrKPa6FvQ',
            'Content-Type' => 'application/json',
        ];

        $postData = [
            "username" => "user12",
            "email" => "user12@test.com",
            "password"  => "112233",
            "firstName" => "first",
            "middleName" => "middle",
            "surname" => "surname",
            "address" => "address",
            "contactNumber" => "+92333333"
        ];
        $postData = json_encode($postData);

        $response = Http::withHeaders($headers)
            ->post($baseUrl, json_decode($postData, true));
        
        echo $response->body();
        }
}
