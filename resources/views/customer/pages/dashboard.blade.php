@extends('customer.layout.app')

@section('content')
<div class="content px-4 bg-light">
    
    <div class="py-4">
      <h3>My Comapnies</h3>
      <p class="py-2">View company information and account details</p>
      <div class=" d-flex py-4 justify-content-end">
            <div class="dashboard-serach-container bg-white px-3 py-2 shadow">
                <div class="w-100 d-flex ">
                    <input class="rounded border-white px-2 w-100" placeholder="Enter a company name or an order"/>
                    <div class="rounded-circle py-2 mx-2 px-2 bg-orange orange-border text-white">
                    <i class="fa-solid fa-magnifying-glass px-1"></i>
                    </div>
                </div>
            </div>
        </div>
    <div class="dashboard-index">
        <div class="row py-3 justify-content-between text-light">
                <p class="col-2">Company Name</p>
                <p class="col-2">Second Name</p>
                <p class="col-2">State</p>
                <p class="col-2">Company Type</p>
                <p class="col-2"></p>
        </div>
        <div></div>
            <div class="row  border border-light rounded bg-white text-lightc ">
            @if(isset($companies['content']))
            @foreach($companies['content'] as $company)
                <?php
                // print_r($company['id']);
                // die;
                ?>
                <div class="d-flex justify-content-between  py-3 text-light">
                    <p class="col-2">{{$company['firstName']}}</p>
                    <p class="col-2">{{$company['secondName']}}</p>
                    <p class="col-2">{{$company['state']}}</p>
                    <p class="col-2">{{$company['companyType']}}</p>
                    <span class="col-2 fit-content last">
                        <div class="border orange-border last p-2 border-25" >
                            <p class="orange-text">View Company</p>
                        </div>
                    </span>
                </div>
                @endforeach
                @endif
                <div class="row border border-light rounded bg-white w-75 m-auto"></div>
                
               
            </div>
        </div>
    </div>
  </div>
@endsection