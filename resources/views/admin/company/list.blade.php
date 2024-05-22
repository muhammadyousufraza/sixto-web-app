@extends('admin.layouts.app', ['activePage' => 'property', 'titlePage' => __('Property Information')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Registered Companies</h4>
            <!-- <p class="card-category"> Here you can manage property</p> -->
          </div>
          <div class="card-body">
            @if (session('success'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('success') }}</span>
                      </div>
                    </div>
                  </div>
              @endif
           
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <tr>
                    <th> ID</th>
                    <th> First Name of Company </th>
                    <th> Second Name of Company </th>
                    <th> Third Name of Company </th>
                    <th> Street Address </th>
                    <th> City </th>
                    <th> State </th>
                    <th> Zip Code </th>
                    <th class="text-right"> Actions </th>
                  </tr>
                </thead>
                <tbody>
                @foreach($companies as $company)  
                <tr>
                    <td> {{$company['id']}} </td>
                    <td> {{$company['firstName']}} </td>
                    <td> {{$company['secondName']}} </td>
                    <td> {{$company['thirdName'] ?: '-'}} </td>
                    <td> {{$company['streetAddress'] ?: '-'}} </td>
                    <td> {{$company['city'] ?: '-'}} </td>
                    <td> {{$company['state'] ?: '-'}} </td>
                    <td> {{$company['code'] ?: '-'}} </td>
                    <td class="td-actions text-right">
                    <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('company.details', $company['id'] ) }}" data-original-title="" title="">
                        <i class="material-icons">preview</i>
                        <div class="ripple-container"></div>
                    </a>
                     
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection