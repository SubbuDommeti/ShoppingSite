<!DOCTYPE html>
<html lang="en">

<head>
  @include('subpages.Admin.header')
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{url('public/assets/img/sidebar-1.jpg')}}">
      @include('subpages.Admin.sidebar')
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      @include('subpages.Admin.navbar')
      <!-- End Navbar -->
      <div class="content">
       
      </div>
      <footer class="footer">
        @include('subpages.Admin.footer')
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
    @include('subpages.Admin.scripts')
</body>
</html>