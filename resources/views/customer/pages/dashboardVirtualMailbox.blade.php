@extends('customer.layout.app')

@section('content')
<div class="content px-4 bg-light">
    
    <div class="py-4">
      <h3>Virtual Mailbox</h3>
    <div class=" d-flex py-4">
        <div class="dashboard-serach-container bg-white px-3 py-2 shadow">
            <div class="w-100 d-flex ">
                <input class="rounded border-white px-2" placeholder="Search"/>
                <div class="rounded-circle py-2 mx-2 px-2 bg-orange  orange-border">
                <i class="fa-solid fa-magnifying-glass px-1 text-white"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="Virtual-Mailbox-table text-light">
      <div class="row py-3 justify-content-between bold">
                <p class="col-2">Company Name</p>
                <p class="col-2">Document Typw</p>
                <p class="col-2">Recieved Date</p>
                <p class="col-2">Status</p>
                <span class="col-2 fit-content last">
                    <div class="border border-white rounded p-3"></div>
                </span>
            </div>
            <div class="row  border border-light rounded bg-white ">
                <div class="d-flex justify-content-between  py-3 dashboard-table-tr">
                    <p class="col-2">Name</p>
                    <p class="col-2">Karahci</p>
                    <p class="col-2">zain@gmail.com</p>
                    <p class="col-2">Active/Good Standing</p>
                    <span class="col-2 fit-content last">
                        <div class="border border-warning last  orange-border">
                            <p class="orange-text">View</p>
                        </div>
                    </span>
                </div>
                <div class="row border border-light rounded bg-white w-75 m-auto "></div>
                <div class="d-flex justify-content-between py-2  dashboard-table-tr">
                    <p class="col-2">Name</p>
                    <p class="col-2">Karahci</p>
                    <p class="col-2">zain@gmail.com</p>
                    <p class="col-2">Active/Good Standing</p>
                    <span class="col-2 fit-content last">
                        <div class="border border-warning last  orange-border">
                            <p class="orange-text">View</p>
                        </div>
                    </span>
                </div>
                <div class="row border border-light rounded bg-white w-75 m-auto"></div>
                <div class="d-flex justify-content-between py-2 dashboard-table-tr">
                    <p class="col-2">Name</p>
                    <p class="col-2">Karahci</p>
                    <p class="col-2">zain@gmail.com</p>
                    <p class="col-2">Active/Good Standing</p>
                    <span class="col-2 fit-content last">
                        <div class="border border-warning last  orange-border">
                            <p class="orange-text">View</p>
                        </div>
                    </span>
                </div>
                <div class="row border border-light rounded bg-white w-75 m-auto"></div>
                <div class="d-flex justify-content-between py-2 dashboard-table-tr">
                    <p class="col-2">Name</p>
                    <p class="col-2">Karahci</p>
                    <p class="col-2">zain@gmail.com</p>
                    <p class="col-2">Active/Good Standing</p>
                    <span class="col-2 fit-content last">
                        <div class="border border-warning last  orange-border">
                            <p class="orange-text">View</p>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
  </div>

@endsection