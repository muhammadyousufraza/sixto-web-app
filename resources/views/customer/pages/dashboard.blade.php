@extends('customer.layout.app')

@section('content')
<div class="content px-4 bg-light">
    <div class="py-4">
      <h3>My Comapnies</h3>
      <p class="py-2">View company information and account details</p>
      <input type="hidden" id="sessionKey" value="{{ session('user_id', 'not exist') }}">
      
      <div class=" d-flex py-5 mb-5 justify-content-end">
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
        <div class=" ">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Company Name</th>
                <th scope="col">Second Name</th>
                <th scope="col">State</th>
                <th scope="col">Company Type</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                
                @if(isset($companies['content']))
                @foreach($companies['content'] as $company)
                    <?php
                    // print_r($company['id']);
                    // die;
                    ?>
                    <tr class="">
                        <td class="col-2">{{$company['firstName']}}</td>
                        <td class="col-2">{{$company['secondName']}}</td>
                        <td class="col-2">{{$company['state']}}</td>
                        <td class="col-2">{{$company['companyType']}}</td>
                        <td class="col-2">
                          <span class="col-2 fit-content last">
                              <div class="border orange-border last p-2 border-25" >
                                  <p class="orange-text">View Company</p>
                              </div>
                          </span>
                        </td>
                    </tr>
                    @endforeach
                    @endif
              </tbody>
            </div>
          </table>
        </div>
      </div>

      
    </div>
</div>
@endsection

<script>
   $(document).ready(function() {
    const sessionValue = document.getElementById('sessionKey').value;
    $.ajax({
        url: 'http://ec2-3-12-127-250.us-east-2.compute.amazonaws.com:8080/api/company/'+ sessionValue, // Replace with your actual Java backend URL
        method: 'GET',
        headers: {
            'Cookie': 'JSESSIONID=1126D63AA3574FF8EF12B6D6849DFA66',
        },
        success: function(data) {
            // Assuming data is an object containing company information
            var company = data; // Use this if `data` directly contains company info. Adjust if data structure is different.

            var newRow = `
                <tr class="">
                    <td class="col-2">${company.firstName}</td>
                    <td class="col-2">${company.secondName}</td>
                    <td class="col-2">${company.state}</td>
                    <td class="col-2">${company.companyType}</td>
                    <td class="col-2">
                        <span class="col-2 fit-content last">
                            <div class="border orange-border last p-2 border-25">
                                <p class="orange-text">View Company</p>
                            </div>
                        </span>
                    </td>
                </tr>`;

            // Append the new row to the table body (assumes your table has a tbody element)
            $('table tbody').append(newRow);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('Error:', textStatus, errorThrown);
        }
    });
});

</script>