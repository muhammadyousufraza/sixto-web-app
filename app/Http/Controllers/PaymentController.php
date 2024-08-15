<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Session;
use Config;
use Stripe\Charge;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
     /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $amount = $request->amount;
        $companyId = $request->companyTypeId;
        $packageId = $request->packageId;
        return view('frontend.pages.payment', compact('amount', 'companyId', 'packageId'));
    }

    //
    public function processPayment(Request $request)
    {
        try {
        Stripe::setApiKey(env('STRIPE_SECRET'));
    
        $response = Charge::create ([
                //"amount" => $request->amount,
                "amount" => 434,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "purchase package" 
        ]);
        
        // $amountCaptured = $response->captured;
        // $amountCaptured = $response->amount_captured;
        // $transactionId = $response->id;
        // $transactionStatus = $response->status;
        
        Log::info($response);
        if($response->status == "succeeded"){
            $this->submitPayment($amountCaptured , $request->company_Id, 'PAID', $request->user_Id);
            Session::flash('success', 'Payment successful!');

        }
        else{
            $this->submitPayment($amountCaptured, 1, 'UNPAID', 10);
            Session::flash('error', 'Payment Failed!');
        }
        
              
        return back();
    } catch (Exception $e) {
        
        return 'Payment failed: ' . $e->getMessage();
    }
    }

        public function submitPayment($amount, $companyId, $status, $userId)
    {
        $baseUrl = Config::get('services.sixton_backend.base_url');
        $baseUrl = $baseUrl."api/payment";

        $headers = [
            // 'Cookie' => 'JSESSIONID=E2AF891227B606393733CE50F2635572; JSESSIONID=E9D8BE532A0138CECECF267554ACE6E8',
            'Content-Type' => 'application/json',
        ];

        $postData = [
            'companyId' => $companyId,
            'amount' => $amount,
            'status' => $status,
            'userId' => $userId,
        ];
          
        $postData = json_encode($postData);
        
        $response = Http::withHeaders($headers)
            ->post($baseUrl, json_decode($postData, true));
        
        // dd($response);
        
        // return redirect()->route('login.page')->with('error', 'Login failed');
        
    }
}
