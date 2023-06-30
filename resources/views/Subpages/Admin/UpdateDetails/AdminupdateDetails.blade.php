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
                    <h4 class="card-title">Update Details</h4>
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
                    
                    <form  class="form-horizontal"  action='AdminUpdateProfile/{{Auth::user()->id}}' method="post">
                          @csrf
                          <!-- {{ method_field('PUT')}} -->
                          
                          <div class="form-group">
                              <label class="col-lg-3 control-label">Email:</label>
                              <div class="col-lg-8">
                                <input class="form-control" type="email" name="email" readonly value="{{ Auth::user()->email }}">
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-lg-3 control-label">NAME:</label>
                              <div class="col-lg-8">
                                <input class="form-control" type="text" name="name"  >
                              </div>
                            </div>
                             
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                              <label for="password" class="col-md-4 control-label">Password</label>

                                              <div class="col-md-6">
                                                  <input id="password" type="password" class="form-control" name="password">

                                                  @if ($errors->has('password'))
                                                      <span class="help-block">
                                                          <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <label  class="col-md-4 control-label">Confirm Password</label>

                                              <div class="col-md-6">
                                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                              </div>
                                          </div>

                                                 
                          
                           <button type="submit" class="btn btn-primary float-right"> update </button>
                           <a href="{{ URL::previous() }}" class="btn btn-default float-right ">BACK</a>
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