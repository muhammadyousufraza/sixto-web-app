@extends('customer.layout.app')

@section('content')
<div class="content px-4 bg-light">
    <div class="py-4">
      <h3 class="py-4">Setting Payment</h3>
    </div>
    <div class="d-flex border rounded ">
        <div class="px-3 py-4">
            <p>My Profile</p>
        </div>
        <div  class="px-3 bg-white shadow py-4">
            <p>Payment Methods</p>
        </div>
    </div>
    <div class="p-4 bg-white my-5 border rounded">
        <div class="d-flex justify-content-between py-2 dashboard-payment-setting-chip">
            <div><p>Your Payment Method</p></div>
            <div class=" d-flex p-2 border border-warning rounded bg-warning"><p>ADD NEW CARD</p><p>+</p></div>
        </div>
        <div class="border border-light my-3 w-75 m-auto"></div>
        <div class="row justify-content-betweem py-2">
            <div class="col-2"></div>
            <div class="col-6">
                <p>Visa ****4646</p>
                <p>Expires 23/12</p>
                <p>Zain Ahmed</p>
                <p>User for: ALIVE DEVOP LLC</p>
            </div>
            <div class="col-4">
                <p class="p-3 border border-warning rounded fit-content float-end">Manage</p>
            </div>
        </div>
    </div>
    <div class=" my-5 payment-setting-conatiner">
        <div  class="py-4">
            <div class="d-flex">
                <p></p>
                <p class="bold">CLIENT</p>
            </div>
            <div class="d-flex bg-info rounded my-3">
                <div class="d-flex flex-fill border-right border-light  py-4 px-2 align-items-center">
                    <p class="rounded-circle border border-light bg-white p-2">ZA</p>
                    <p class="px-2">Zain Ahmed</p>
                </div>
                <div class="flex-fill border-light border-left  py-4 px-2">
                    <p class="font-weight-bold">Mobile Number</p>
                    <p>(1233)234233</p>
                </div>
                <div class="flex-fill  py-4 px-2">
                    <p class="font-weight-bold">Client ID</p>
                    <p>2334323</p>
                </div>
                <div class="flex-fill  py-4 px-2">
                    <p class="font-weight-bold">Email</p>
                    <p>zain@gmail.com</p>
                </div>
                <div></div>
            </div>
        </div>
        <div class="py-4">
            <div class="d-flex">
                <p></p>
                <p class="bold">COMPANIES</p>
            </div>
            <div class="d-flex bg-info rounded my-3">
                <div class="d-flex flex-fill border-right border-light  py-4 px-2 align-items-center">
                    <p class="rounded-circle border border-light bg-white p-2">ZA</p>
                    <p class="px-2">Zain Ahmed</p>
                </div>
                <div class="flex-fill border-light border-left  py-4 px-2">
                    <p class="font-weight-bold">Mobile Number</p>
                    <p>(1233)234233</p>
                </div>
                <div class="flex-fill  py-4 px-2">
                    <p class="font-weight-bold">Client ID</p>
                    <p>2334323</p>
                </div>
                <div class="flex-fill  py-4 px-2">
                    <p class="font-weight-bold">Email</p>
                    <p>zain@gmail.com</p>
                </div>
                <div></div>
            </div>
            <div class="d-flex bg-info rounded my-3">
                <div class="d-flex flex-fill border-right border-light  py-4 px-2 align-items-center">
                    <p class="rounded-circle border border-light bg-white p-2">ZA</p>
                    <p class="px-2">Zain Ahmed</p>
                </div>
                <div class="flex-fill border-light border-left  py-4 px-2">
                    <p class="font-weight-bold">Mobile Number</p>
                    <p>(1233)234233</p>
                </div>
                <div class="flex-fill  py-4 px-2">
                    <p class="font-weight-bold">Client ID</p>
                    <p>2334323</p>
                </div>
                <div class="flex-fill  py-4 px-2">
                    <p class="font-weight-bold">Email</p>
                    <p>zain@gmail.com</p>
                </div>
                <div></div>
            </div>
            <div class="d-flex bg-info rounded my-3">
                <div class="d-flex flex-fill border-right border-light  py-4 px-2 align-items-center">
                    <p class="rounded-circle border border-light bg-white p-2">ZA</p>
                    <p class="px-2">Zain Ahmed</p>
                </div>
                <div class="flex-fill border-light border-left  py-4 px-2">
                    <p class="font-weight-bold">Mobile Number</p>
                    <p>(1233)234233</p>
                </div>
                <div class="flex-fill  py-4 px-2">
                    <p class="font-weight-bold">Client ID</p>
                    <p>2334323</p>
                </div>
                <div class="flex-fill  py-4 px-2">
                    <p class="font-weight-bold">Email</p>
                    <p>zain@gmail.com</p>
                </div>
                <div></div>
            </div>
        </div>
    </div>
</div>
@endsection