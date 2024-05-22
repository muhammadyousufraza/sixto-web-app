@extends('admin.layouts.app', ['activePage' => 'packages', 'titlePage' => __('Package Information')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Package List</h4>
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
              <div class="row">
              <div class="col-12 text-right">
                <a href="{{ route('package.add') }}" class="btn btn-sm btn-primary">Add New Package</a>
                <!-- <input type="file" class="form-control-file" id="csv_file" name="csv_file" accept=".csv"> -->
              </div>
            </div>
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <tr>
                    <th> ID </th>
                    <th> Package Title </th>
                    <th> Package Total Price </th>
                    <th> Package Fee </th>
                    <th> State Fee </th>
                    <th class="text-right"> Actions </th>
                  </tr>
                </thead>
                <tbody>
                @foreach($packages as $package)  
                <tr>
                    <td> {{$package['id']}} </td>
                    <td> {{$package['packageTitle']}} </td>
                    <td> {{$package['packageTotalPrice']}} </td>
                    <td> {{$package['packageFee'] ?: '-'}} </td>
                    <td> {{$package['stateFee'] ?: '-'}} </td>
                    <td class="td-actions text-right">
                    <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('package.details', $package['id'] )}}" data-original-title="" title="">
                        <i class="material-icons">preview</i>
                        <div class="ripple-container"></div>
                      </a>

                      <a rel="tooltip" class="btn btn-danger btn-link" href="{{ route('package.delete', $package['id'] )}}" data-original-title="" title="">
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