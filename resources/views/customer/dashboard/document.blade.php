@extends('admin.layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">Total Property</i>
              </div>
              <!-- <p class="card-category">Used Space</p> -->
              <h3 class="card-title">49/50
                <!-- <small>GB</small> -->
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <!-- <i class="material-icons text-danger">warning</i>
                <a href="#pablo">Get More Space...</a> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Revenue</p>
              <h3 class="card-title">$34,245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <!-- <i class="material-icons">date_range</i> Last 24 Hours -->
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush