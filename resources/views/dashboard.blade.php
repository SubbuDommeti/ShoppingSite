<!DOCTYPE html>
<html lang="en">

<head>
  
  @include('subpages.admin.header')
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{url('public/assets/img/sidebar-1.jpg')}}">
      @include('subpages.admin.sidebar')
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      @include('subpages.admin.navbar')
      <!-- End Navbar -->
      <div class="content">
       <!--body goes here-->
      </div>
      <footer class="footer">
        @include('subpages.admin.footer')
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
   @include('subpages.admin.plugin')
  </div>
  <!--   Core JS Files   -->
    @include('subpages.admin.scripts')
</body>
</html>