<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Session;
use Stripe\Charge;
use Exception;
use Illuminate\Support\Facades\Log;


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
                "amount" => $request->amount,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "purchase package" 
        ]);
        // $amountCaptured = $response->captured;
        // $amountCaptured = $response->amount_captured;
        // $transactionId = $response->id;
        // $transactionStatus = $response->status;
        Log::info($response);
        Session::flash('success', 'Payment successful!');
              
        return back();
    } catch (Exception $e) {
        
        return 'Payment failed: ' . $e->getMessage();
    }
    }
}
