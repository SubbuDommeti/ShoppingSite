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
                    <h4 class="card-title">Add Product</h4>
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
                    <form action='AddProduct' method="post" enctype="multipart/form-data" >
                        @csrf
                        
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Under Category</label>
                                <select class="form-control" id="catId" name='catId'>
                                  <?php
                                  $category=App\Models\CategoryModel::with('subcategory')->get();
                                  ?>
                                  @foreach($category as $cat)
                                    <option value="{{$cat->id}}">{{$cat->catName}}</option>
                                    
                              
                                  @endforeach
                               </select>
                                
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Product Name</label>
                                <input type="text" name="prdName" id="prdName" class="form-control" required >
                              </div>
                            </div>
                          </div>
                         <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Product Code</label>
                                <input type="text" name="prgCode" id="prgCode" class="form-control" required>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Product Color</label>
                                 <input type="text" name="prdColor" id="prdColor" class="form-control" required >
                               
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Product Description</label>
                                 <textarea class="md-textarea form-control-plaintext border" name="prdDescript" id="prdDescript"  ></textarea>
                                
                              </div>
                            </div>

                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Product Price</label>
                                 <input type="text" name="prdPrice" id="prdPrice" class="form-control" required >
                               
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
                          
                          <button type="submit" class="btn btn-primary float-right">Upload</button>
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