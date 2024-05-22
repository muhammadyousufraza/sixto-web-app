<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function payment(){
        return view('customer.pages.settingPayment');
    }

    public function profile(){
        return view('customer.pages.settingProfile');
    }
}
