<!DOCTYPE html>
<html lang="en">

<head>
  @include('Subpages.Admin.header')
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{url('public/assets/img/sidebar-1.jpg')}}">
      @include('Subpages.Admin.sidebar')
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      @include('Subpages.Admin.navbar')
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Add Banner</h4>
                     <p class="pull-right text-gray-dark" id="msg">

                      {{session('Msg')}}
                      @if(session('Msg'))
                        <script>
                          function autoRefresh()
                          {
                            $('#msg').hide();
                           /* location.reload();*/
                          }
                          setInterval('autoRefresh()',5000); 
                        </script>
                        @endif

                     </p>

                  </div>
                  <div class="card-body">
                    <form action='AddBanner' method="post" enctype="multipart/form-data" >
                        @csrf
                        
                          
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">LText-1</label>
                                <input type="text" name="ltext1" id="ltext1" class="form-control" required >
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">LText-2</label>
                                <input type="text" name="ltext2" id="ltext2" class="form-control" required >
                              </div>
                            </div>
                          </div>
                         <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Ltext-1 Appearence</label>
                                <input type="text" name="ltext1Appear" id="ltext1Appear" class="form-control" required>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Ltext-2 Appearence</label>
                                <input type="text" name="ltext2Appear" id="ltext2Appear" class="form-control" required>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Button Appearence</label>
                                <input type="text" name="btnAppear" id="btnAppear" class="form-control" required>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Link</label>
                                 <input type="text" name="link" id="link" class="form-control" required >
                               
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-control-file">
                                <label class="">Picture Upload</label>
                                <input type="file" class="form-control" name="image" id="image" required>
                                
                                
                              </div>
                            </div>
                          </div>
                          
                          <button type="submit" class="btn btn-primary float-right">Add Banner</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <footer class="footer">
        @include('Subpages.Admin.footer')
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
   @include('Subpages.Admin.plugin')
  </div>
  <!--   Core JS Files   -->
    @include('Subpages.Admin.scripts')
</body>
</html>