<div class="wrapper ">
  @include('admin.layouts.navbars.sidebar')
  <div class="main-panel">
    @include('admin.layouts.navbars.navs.auth')
    @yield('content')
    @include('admin.layouts.footers.auth')
  </div>
</div>