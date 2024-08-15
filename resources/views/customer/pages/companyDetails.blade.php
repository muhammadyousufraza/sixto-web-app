@extends('customer.layout.app')

@section('content')
<div class="content px-4 bg-light">
    <div class="py-4">
      <div class="company-details">
          <div class="head-a" style="display:flex; justify-content: space-between;">
              <h3>Company Details <span class="status pending">payment pending</span></h3>
              <a href="#" class="btn btn-primary">Make Payment</a>
          </div>
          <div class="body-a">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Contact Person</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Company Details</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-legal-tab" data-bs-toggle="pill" data-bs-target="#pills-legal" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Legal Representatives</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-manager-tab" data-bs-toggle="pill" data-bs-target="#pills-manager" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Managers</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <ul class="details">
                        <li>First Name <span>Osama</span></li>
                        <li>last Name <span>Khalil</span></li>
                        <li>Email Adress <span>osama@justdigital.pk</span></li>
                        <li>Phone no <span>031 234 5678</span></li>
                    </ul>
                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                    <h5 style="padding: 0; margin:40px 0 20px 0">Your Company Names</h5>
                    <ul class="details">
                        <li>Name 01 <span>AlRaqtan</span></li>
                        <li>Name 02 <span>Al Fujar</span></li>
                        <li>Name 03 <span>Zumain</span></li>
                    </ul>
                    <h5 style="padding: 0; margin:40px 0 20px 0">Office Address</h5>
                    <ul class="details">
                        <li>Country <span>Pakistan</span></li>
                        <li>Street Address <span>phase 1 </span></li>
                        <li>Address (Cont)  <span>Zumain</span></li>
                        <li>City <span>Karachi</span></li>
                        <li>State <span>Sindh </span></li>
                        <li>Zip Code  <span>74600</span></li>
                    </ul>
                    <h5 style="padding: 0; margin:40px 0 20px 0">Share Holder</h5>
                    <ul class="details">
                        <li>First Name <span>Ammar</span></li>
                        <li>Last Name <span>Khan </span></li>
                        <li>Nationality  <span>Pakistan</span></li>
                        <li>Identification <span>6587588uyh444</span></li>
                        <li>Occupation <span>Artist </span></li>
                        <li>Married Status  <span>Married</span></li>
                        <li>Home Address <span>R-111 phase 2 xyx karachi pakistan </span></li>
                        <li>Percentage Of Shares  <span>100%</span></li>
                    </ul>
                  </div>
                  <div class="tab-pane fade" id="pills-legal" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                    <h5 style="padding: 0; margin:40px 0 20px 0">Legal Representative 1</h5>
                    <ul class="details">
                        <li>First Name <span>Ammar</span></li>
                        <li>Last Name <span>Khan </span></li>
                        <li>Nationality  <span>Pakistan</span></li>
                        <li>Identification <span>6587588uyh444</span></li>
                        <li>Occupation <span>Artist </span></li>
                        <li>Married Status  <span>Married</span></li>
                        <li>Home Address <span>R-111 phase 2 xyx karachi pakistan </span></li>
                    </ul>
                    <h5 style="padding: 0; margin:40px 0 20px 0">Legal Representative 2</h5>
                    <ul class="details">
                        <li>First Name <span>Ammar</span></li>
                        <li>Last Name <span>Khan </span></li>
                        <li>Nationality  <span>Pakistan</span></li>
                        <li>Identification <span>6587588uyh444</span></li>
                        <li>Occupation <span>Artist </span></li>
                        <li>Married Status  <span>Married</span></li>
                        <li>Home Address <span>R-111 phase 2 xyx karachi pakistan </span></li>
                    </ul>
                  </div>
                  <div class="tab-pane fade" id="pills-manager" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                    <h5 style="padding: 0; margin:40px 0 20px 0">Manager </h5>
                    <ul class="details">
                        <li>First Name <span>Ammar</span></li>
                        <li>Last Name <span>Khan </span></li>
                        <li>Nationality  <span>Pakistan</span></li>
                        <li>Identification <span>6587588uyh444</span></li>
                        <li>Occupation <span>Artist </span></li>
                        <li>Married Status  <span>Married</span></li>
                        <li>Home Address <span>R-111 phase 2 xyx karachi pakistan </span></li>
                    </ul>
                  </div>
                </div>
          </div>
      </div>
      
    </div>
</div>
@endsection
