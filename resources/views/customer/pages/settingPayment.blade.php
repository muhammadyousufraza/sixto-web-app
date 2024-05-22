@extends('customer.layout.app')

@section('content')
<div class="content px-4 bg-light">
    <div class="py-4">
      <h3 class="py-4">Setting Payment</h3>
    </div>
    <div class="d-flex border rounded ">
        <div class="px-3 py-4">
            <p class="bold">My Profile</p>
        </div>
        <div  class="px-3 bg-white shadow py-4 rounded orange-text">
            <p  class="bold">Payment Methods</p>
        </div>
    </div>
    <div class="p-2 bg-white my-5 border rounded">
        <div class="d-flex justify-content-between py-2 px-3 dashboard-payment-setting-chip">
            <div class="align-self-center"><p class="ur-pay-method">Your Payment Method</p></div>
            <div class=" d-flex p-2 bg-orange orange-border  border-radius-rounded-chip"><p class="text-white px-2">ADD NEW CARD</p><p><i class="fa-solid fa-plus text-white px-2"></i></p></div>
        </div>
        <div class="border border-light my-3 w-75 m-auto"></div>
        <div class="row justify-content-betweem py-2">
            <div class="col-2 visa-icon"> <i class="fa-brands fa-cc-visa"></i> </div>
            <div class="col-6">
                <p class="weight-bold-600">Visa ****4646</p>
                <p class="py-1 fw-lighter">Expires 23/12</p>
                <p class="py-1 fw-lighter">Zain Ahmed</p>
                <div class="d-flex"><p class="py-3 weight-bold-600">User for:&nbsp; &nbsp; &nbsp;</p>
                    <span class="py-3  text-light">ALIVE DEVOP LLC and </span>&nbsp;<span class="py-3  orange-text"> 1 more</span></div>
            </div>
            <div class="col-4 px-4">
                <p class="py-2 px-3 border orange-border orange-text fit-content float-end border-radius-rounded-chip">Manage</p>
            </div>
        </div>
    </div>
    <div class=" my-5 payment-setting-conatiner">
        <div  class="py-4 w-100vh ">
            <div class="d-flex">
                <p></p>
                <p class="bold">CLIENT</p>
            </div>
            <div class="d-flex bg-info rounded my-3 bg-white orange-border">
                <div class="d-flex flex-fill border-right border-light-right  py-4 px-2 align-items-center">
                    <p class="rounded-circle border border-orange bg-orange p-2 bg-white text-white">ZA</p>
                    <p class="px-2 weight-bold-600">Zain Ahmed</p>
                </div>
                <div class="flex-fill border-light border-left  py-4 px-2">
                    <p class="font-weight-bold weight-bold-600">Mobile Number</p>
                    <p>(1233)234233</p>
                </div>
                <div class="flex-fill  py-4 px-2">
                    <p class="font-weight-bold weight-bold-600">Client ID</p>
                    <p>2334323</p>
                </div>
                <div class="flex-fill  py-4 px-2">
                    <p class="font-weight-bold weight-bold-600">Email</p>
                    <p>zain@gmail.com</p>
                </div>
                <div class="d-flex m-auto px-2">
                    <i class="fa-solid fa-pen-to-square px-1 orange-text"></i>
                    <i class="fa-regular fa-credit-card px-1 orange-text"></i>
                </div>
            </div>
        </div>
        <div class="py-4 w-100vh ">
            <div class="d-flex">
                <p></p>
                <p class="bold">COMPANIES</p>
            </div>
            <div class="d-flex bg-info rounded my-3 bg-white orange-border">
                <div class="d-flex flex-fill border-right border-light  py-4 px-2 align-items-center">
                    <p class="rounded-circle border border-orange bg-orange p-2 bg-white text-white">ZA</p>
                    <p class="px-2 weight-bold-600">Zain Ahmed</p>
                </div>
                <div class="flex-fill border-light border-left  py-4 px-2">
                    <p class="font-weight-bold weight-bold-600">Mobile Number</p>
                    <p>(1233)234233</p>
                </div>
                <div class="flex-fill  py-4 px-2">
                    <p class="font-weight-bold weight-bold-600">Client ID</p>
                    <p>2334323</p>
                </div>
                <div class="flex-fill  py-4 px-2">
                    <p class="font-weight-bold weight-bold-600">Email</p>
                    <p>zain@gmail.com</p>
                </div>
                <div class="d-flex m-auto px-2">
                    <i class="fa-solid fa-pen-to-square px-1 orange-text"></i>
                    <i class="fa-regular fa-credit-card px-1 orange-text"></i>
                </div>
            </div>
            <div class="d-flex bg-info rounded my-3 bg-white orange-border">
                <div class="d-flex flex-fill border-right border-light  py-4 px-2 align-items-center">
                    <p class="rounded-circle border border-orange bg-orange p-2 bg-white text-white">ZA</p>
                    <p class="px-2 weight-bold-600">Zain Ahmed</p>
                </div>
                <div class="flex-fill border-light border-left  py-4 px-2">
                    <p class="font-weight-bold weight-bold-600">Mobile Number</p>
                    <p>(1233)234233</p>
                </div>
                <div class="flex-fill  py-4 px-2">
                    <p class="font-weight-bold weight-bold-600">Client ID</p>
                    <p>2334323</p>
                </div>
                <div class="flex-fill  py-4 px-2">
                    <p class="font-weight-bold weight-bold-600">Email</p>
                    <p>zain@gmail.com</p>
                </div>
                <div class="d-flex m-auto px-2">
                    <i class="fa-solid fa-pen-to-square px-1 orange-text"></i>
                    <i class="fa-regular fa-credit-card px-1 orange-text"></i>
                </div>
            </div>
            <div class="d-flex bg-info rounded my-3 bg-white orange-border">
                <div class="d-flex flex-fill border-right border-light  py-4 px-2 align-items-center">
                    <p class="rounded-circle border border-orange bg-orange p-2 bg-white text-white">ZA</p>
                    <p class="px-2 weight-bold-600">Zain Ahmed</p>
                </div>
                <div class="flex-fill border-light border-left  py-4 px-2">
                    <p class="font-weight-bold weight-bold-600">Mobile Number</p>
                    <p>(1233)234233</p>
                </div>
                <div class="flex-fill  py-4 px-2">
                    <p class="font-weight-bold weight-bold-600">Client ID</p>
                    <p>2334323</p>
                </div>
                <div class="flex-fill  py-4 px-2">
                    <p class="font-weight-bold weight-bold-600">Email</p>
                    <p>zain@gmail.com</p>
                </div>
                <div class="d-flex m-auto px-2">
                    <i class="fa-solid fa-pen-to-square px-1 orange-text"></i>
                    <i class="fa-regular fa-credit-card px-1 orange-text"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection