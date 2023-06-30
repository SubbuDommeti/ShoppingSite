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
                    <h4 class="card-title">ADD CATEGORY</h4>
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
                    <form action='AddCategory' method="post" enctype="multipart/form-data" >
                        @csrf
                        
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Category Name</label>
                                <input type="text" name="catName" id="catName" class="form-control" required >
                              </div>
                            </div>
                          </div>
                         <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Parent Category</label>
                               <select class="form-control  dropdown-item" id="catPr" name="catPr"  placeholder="Parent Category ">
                                 <option  placeholder="Parent Category" value="0" class="text-info">Parent Category </option>
                                 
                                    
                                    @foreach($category as $row)
                                      <option class="form-control" value='{{$row->id}}' style="background-color: #817676">{{$row->catName}}</option>
                                              
                                              
                                      
                                    @endforeach
                                    
                                 
                               </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Url</label>
                                 <input type="text" name="catUrl" id="catUrl" class="form-control" required >
                               
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Category Description</label>
                                 <textarea class="md-textarea form-control-plaintext border" name="catDesc" id="catDesc"  ></textarea>
                                
                              </div>
                            </div>

                          </div>
                          
                          
                          <button type="submit" class="btn btn-primary float-right">Add Category</button>
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