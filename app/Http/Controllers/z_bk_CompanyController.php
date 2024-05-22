<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Support\Facades\Http;

class CompanyController extends Controller
{

    public function companyProfile()
    {
        // dd(1);
        $packages1 = $this->getPackageType1();
        $packages2 = $this->getPackageType2();
        // dd($packages1, $packages2);
        return view('frontend.pages.companyProfile', compact('packages1', 'packages2'));
    }

    public function RegisterComapny(Request $request)
    {

        // $request->validate([
        //     'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        // if ($request->file('file')->isValid()) {
        //     $file = $request->file('file');
        //     $fileName = time() . '_' . $file->getClientOriginalName();
        //     $file->storeAs('uploads', $fileName, 'public');
        //     $this->sendFileToApi($file);
        // }
        // $document = Document::create(['filename' => $filename]);

        return view('frontend.pages.companyProfile');
    }

    public function callCompanyRegistrationApi(Request $request)
    {

        // dd($request);


        $baseUrl = Config::get('services.sixton_backend.base_url');
        $baseUrl = $baseUrl . "api/user/save-user-company-shareholder";

        $headers = [
            'Cookie' => 'JSESSIONID=6EE5732730FA7104EBE502F6D2A7AF80; JSESSIONID=E9D8BE532A0138CECECF267554ACE6E8',
            // 'Authorization' => 'Bearer eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJ1c2VyNUB0ZXN0LmNvbSIsInNlcmlhbFZlcnNpb25VSUQiOjEsImZpcnN0VGltZUxvZ2luIjpmYWxzZSwicGFzc3dvcmQiOiIkMmEkMTAkZkkvcVduSGtOaFljSjNlb25GbktJT25yRDBSOU9meTJhSGQ5QzRVU0s4anA4bVNreXBGU3EiLCJpZCI6MywiZW1haWwiOiJ1c2VyNUB0ZXN0LmNvbSIsImF1dGhvcml0aWVzIjpbXSwidXNlcm5hbWUiOiJ1c2VyNUB0ZXN0LmNvbSIsImlhdCI6MTcwNzMzMzM1MiwiZXhwIjoxNzA3NDE5NzUyfQ.YTLev6gdPRFOrs0t9I_6A0PQia6tvPwi1h743ORkVUywzYGY9iI1AaGu_RtHuzNblGNfqjkvZ18q0RsOqccTCQ',
            'Content-Type' => 'application/json',
        ];

        $body = [
            'user' => [
                "username" => "testuser124",
                "email" => "testuser12345@a.com",
                "password" => "12345678",
                "firstName" => "first",
                "middleName" => "middle",
                "surname" => "sur",
                "address" => "address",
                "contactNumber" => "+9233"
            ],
            'company' => [
                "firstName" => $request->firstCompanyName,
                "secondName" => $request->secondCompanyName,
                "thirdName" => $request->thirdCompanyName,
                "streetAddress" => $request->streetAddress,
                "detailAddress" => $request->addressCont,
                "city" => $request->city,
                "state" => $request->state,
                "code" => $request->zipCode,
                "packageId" => 7
            ],
            'shareholder' => [
                [
                    "firstName" => "l",
                    "lastName" => "ll",
                    "nationality" => "pa",
                    "passportNumber" => "98k",
                    "occupation" => "law",
                    "maritalStatus" => "s",
                    "homeAddress" => "asd",
                    "sharePercentage" => 50,
                    "shareHolder" => true,
                    "legalRepresentative" => true,
                    "manager" => false
                ],
                [
                    "firstName" => "ll",
                    "lastName" => "lll",
                    "nationality" => "pla",
                    "passportNumber" => "9l8k",
                    "occupation" => "llaw",
                    "maritalStatus" => "s",
                    "homeAddress" => "asd",
                    "sharePercentage" => 50,
                    "shareHolder" => true,
                    "legalRepresentative" => false,
                    "manager" => true
                ],
                [
                    "firstName" => "ll",
                    "lastName" => "lll",
                    "nationality" => "pla",
                    "passportNumber" => "9l8k",
                    "occupation" => "llaw",
                    "maritalStatus" => "s",
                    "homeAddress" => "asd",
                    "sharePercentage" => 50,
                    "shareHolder" => true,
                    "legalRepresentative" => false,
                    "manager" => true
                ]
            ]
        ];


        $postData = json_encode($body);

        $response = Http::withHeaders($headers)
            ->post($baseUrl, json_decode($postData, true));

        // dd($response);


        // upload doc via api
        $request->validate([
            'firstShareholderDocument' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->file('firstShareholderDocument')->isValid()) {
            $file = $request->file('firstShareholderDocument');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $fileName, 'public');
            $fileId = $this->uploadDocToApi($file, $fileName);

            $fileId = $this->uploadDocWithId($fileId);
        }
        // dd($response);
        // return redirect()->route('package.list')->with('success', 'Record added successfully');
    }


    public function uploadDocToApi($file, $fileName)
    {


        $client = new Client();
        // dd($request);
        $baseUrl = Config::get('services.sixton_backend.base_url');
        $baseUrl = $baseUrl . "api/file";
        // dd($fileName, $file);
        $filePath = storage_path("app/public/uploads/{$fileName}");
        $response = $client->request('POST', $baseUrl, [
            'multipart' => [
                [
                    'name' => 'file',
                    'contents' => fopen($filePath, 'r'),
                ],
            ],
        ]);

        $apiResponse = json_decode($response->getBody(), true);
        return $apiResponse['id'];
    }

    public function uploadDocWithId($fileId)
    {
        $client = new Client();

        $baseUrl = Config::get('services.sixton_backend.base_url');

        $baseUrl = $baseUrl . "api/file/upload-file";

        $response = $client->request('POST', $baseUrl, [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'fileId' => $fileId,
                'fileType' => 'JPEG',
                'company' => [
                    'id' => 1,
                ],
            ],
        ]);

        $apiResponse = json_decode($response->getBody(), true);
        // dd($apiResponse);
    }

    public function getPackageType1()
    {
        $client = new Client();
        $baseUrl = Config::get('services.sixton_backend.base_url');
        $baseUrl = $baseUrl . "api/package/by-company-type/1";

        $response = $client->request('GET', $baseUrl);

        return $apiResponse = json_decode($response->getBody(), true);
    }

    public function getPackageType2()
    {
        $client = new Client();
        $baseUrl = Config::get('services.sixton_backend.base_url');
        $baseUrl = $baseUrl . "api/package/by-company-type/2";

        $response = $client->request('GET', $baseUrl);

        return $apiResponse = json_decode($response->getBody(), true);
    }
}
