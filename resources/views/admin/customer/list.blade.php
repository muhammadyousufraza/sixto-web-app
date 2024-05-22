@extends('admin.layouts.app', ['activePage' => 'users', 'titlePage' => __('Users Information')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Registered Users</h4>
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
                    <th> Id </th>
                    <th> User Name </th>
                    <th> Email </th>
                    <th> First Name </th>
                    <th> Middle Name </th>
                    <th> Sur Name </th>
                    <th> Address </th>
                    <th> Contact Number </th>
                    <th class="text-right"> Actions </th>
                  </tr>
                </thead>
                <tbody>
                @foreach($allUsers as $user)  
                <tr>
                    <td> {{$user['id']}} </td>
                    <td> {{$user['username']}} </td>
                    <td> {{$user['email']}} </td>
                    <td> {{$user['firstName'] ?: '-'}} </td>
                    <td> {{$user['middleName'] ?: '-'}} </td>
                    <td> {{$user['surname'] ?: '-'}} </td>
                    <td> {{$user['address'] ?: '-'}} </td>
                    <td> {{$user['contactNumber'] ?: '-'}} </td>
                    <td class="td-actions text-right">
                    <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('user.details', $user['id'] )}}" data-original-title="" title="">
                        <i class="material-icons">preview</i>
                        <div class="ripple-container"></div>
                      </a>

                      <a rel="tooltip" class="btn btn-danger btn-link" href="{{ route('user.delete', $user['id'] )}}" data-original-title="" title="">
                        <i class="material-icons">delete</i>
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