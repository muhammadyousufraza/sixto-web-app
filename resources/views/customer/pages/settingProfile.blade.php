@extends('customer.layout.app')

@section('content')
    <div class="setting-profile">
        <div class="head-a" style="display:flex; justify-content: space-between;">
              <h3>Setting </h3>
        </div>
        <div class="body-a">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-myprofile-tab" data-bs-toggle="pill" data-bs-target="#pills-myprofile" type="button" role="tab" aria-controls="pills-myprofile" aria-selected="true">My Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-payment-methods-tab" data-bs-toggle="pill" data-bs-target="#pills-payment-methods" type="button" role="tab" aria-controls="pills-payment-methods" aria-selected="false">Payment Methods</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-myprofile" role="tabpanel" aria-labelledby="pills-myprofile-tab" tabindex="0">
                    <h5 style="padding: 0; margin:40px 0 20px 0">Client</h5>
                    <div class="box-item d-flex">
                        <div class="b1">
                            <span class="dp">PG</span>
                            Pabola Gerboles Parrilla
                        </div>
                        <div class="b2">
                            <strong>Mobile Phone</strong>
                            (307) 240-0461
                        </div>
                        <div class="b2">
                            <strong>Client ID</strong>
                            0461
                        </div>
                        <div class="b2">
                            <strong>Email</strong>
                            (307) 240-0461
                        </div>
                        <div class="edit">
                            
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-payment-methods" role="tabpanel" aria-labelledby="pills-payment-methods-tab" tabindex="0">
                     <h5 style="padding: 0; margin:40px 0 20px 0">Client</h5>
                        <div class="box-item d-flex">
                            <div class="b1">
                                <span class="dp">PG</span>
                                Pabola Gerboles Parrilla
                            </div>
                            <div class="b2">
                                <strong>Mobile Phone</strong>
                                (307) 240-0461
                            </div>
                            <div class="b2">
                                <strong>Client ID</strong>
                                0461
                            </div>
                            <div class="b2">
                                <strong>Email</strong>
                                (307) 240-0461
                            </div>
                            <div class="edit">
                                
                            </div>
                        </div>
                        <div class="box-item d-flex">
                            <div class="b1">
                                <span class="dp">PG</span>
                                Pabola Gerboles Parrilla
                            </div>
                            <div class="b2">
                                <strong>Mobile Phone</strong>
                                (307) 240-0461
                            </div>
                            <div class="b2">
                                <strong>Client ID</strong>
                                0461
                            </div>
                            <div class="b2">
                                <strong>Email</strong>
                                (307) 240-0461
                            </div>
                            <div class="edit">
                                
                            </div>
                        </div>
                        <div class="box-item d-flex">
                            <div class="b1">
                                <span class="dp">PG</span>
                                Pabola Gerboles Parrilla
                            </div>
                            <div class="b2">
                                <strong>Mobile Phone</strong>
                                (307) 240-0461
                            </div>
                            <div class="b2">
                                <strong>Client ID</strong>
                                0461
                            </div>
                            <div class="b2">
                                <strong>Email</strong>
                                (307) 240-0461
                            </div>
                            <div class="edit">
                                
                            </div>
                        </div>
                  </div>
                  
                </div>
        </div>
    </div>
@endsection