<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.pages.home');
    }

    public function accountTax()
    {
        return view('frontend.pages.account-tax');
    }

    // public function login()
    // {
    //     return view('frontend.pages.login');
    // }

    public function migracion()
    {
        return view('frontend.pages.migracion');
    }

    public function notarial()
    {
        return view('frontend.pages.notarial');
    }

    public function faq()
    {
        return view('frontend.pages.faq');
    }

    // public function companyProfile()
    // {
    //     return view('frontend.pages.companyProfile');
    // }

    public function pricing()
    {

        return view('frontend.pages.pricing');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function company()
    {
        return view('frontend.pages.company');
    }

    public function initiatePayment()
    {
        return view('frontend.pages.payment-init');
    }

}
