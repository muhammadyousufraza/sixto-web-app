@extends('customer.layout.app')

@section('content')
<div class="content px-4 bg-light">
    
    <div class="py-4">
      <h3>My Comapnies</h3>
      <p class="py-2">View company information and account details</p>
      <div class=" d-flex py-4 justify-content-end">
            <div class="dashboard-serach-container bg-white px-3 py-2 shadow">
                <div class="w-25 d-flex ">
                    <input class="rounded border-white px-2" placeholder="Search"/>
                    <div class="rounded-circle py-2 mx-2 px-2 bg-warning">
                        <i class="fa-solid fa-paper-plane  px-2"></i>
                    </div>
                </div>
            </div>
        </div>
    <div class="">
      <div class="row py-3 justify-content-between">
                <p class="col-2">Company Name</p>
                <p class="col-2">State</p>
                <p class="col-2">Email Address</p>
                <p class="col-2">Status</p>
                <p class="col-2"></p>
            </div>
            <div class="row  border border-light rounded bg-white">
                <div class="d-flex justify-content-between  py-3">
                    <p class="col-2">Name</p>
                    <p class="col-2">Karahci</p>
                    <p class="col-2">zain@gmail.com</p>
                    <p class="col-2">Active/Good Standing</p>
                    <span class="col-2 fit-content last">
                        <div class="border border-warning last" >
                            <p>View Company</p>
                        </div>
                    </span>
                </div>
                <div class="row border border-light rounded bg-white w-75 m-auto"></div>
                <div class="d-flex justify-content-between  py-3">
                    <p class="col-2">Name</p>
                    <p class="col-2">Karahci</p>
                    <p class="col-2">zain@gmail.com</p>
                    <p class="col-2">Active/Good Standing</p>
                    <span class="col-2 fit-content last">
                        <div class="border border-warning last" >
                            <p>View Company</p>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection