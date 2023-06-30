<!DOCTYPE html>
<html lang="en">

<head>
  @include('Subpages.Admin.header')
  <link rel=stylesheet href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>


<!-- Edit Modal -->
<div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="EditForm" method="post" enctype="multipart/form-data" >
                        @csrf
                          


                        
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="">Id</label>
                                <input type="text" name="prdId" id="prdId" class="form-control" readonly required>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Under Category</label>
                                <select class="form-control" id="catId" name='catId' required>
                                  <?php
                                  $category=App\Models\CategoryModel::get();
                                  ?>
                                    <option></option>
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
                                <label >Enter Product Name</label>
                                <input type="text" name="prdName" id="prdName" class="form-control" required>
                              </div>
                            </div>
                          </div>
                         <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="">Product code</label>
                                <input type="text" name="prdCode" id="prdCode" class="form-control" required>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="">Product Color</label>
                                 <input type="text" name="prdColor" id="prdColor" class="form-control" required >
                               
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="">Product Description</label>
                                 <textarea class="md-textarea form-control-plaintext border" name="prdDescript" id="prdDescript"  ></textarea>
                                
                              </div>
                            </div>

                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="">Products Price</label>
                                <input type="text" name="prdPrice" id="prdPrice" class="form-control" required>
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

<!-- End Edit Modal -->
<!-- Delete Modal -->
<div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Conformation Of Deletion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure To delete this data... 
        <p id="idvalue">
          
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <a type="button" id="bta" class="btn sm btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>
<!-- End Delete Modal -->
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
       <!--body goes here-->
       <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">View Products</h4>
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
                   <div class="table-responsive"> 
                    <table class="table" id="dataTable">
                      <thead class=" text-primary">
                         <th class="text-center">
                          ID
                        </th>
                        <th class="text-center">
                          CategoryId
                        </th>
                         <th class="text-center">
                          Category Name
                        </th>
                        <th class="text-center">
                          Product Name
                        </th>
                        <th class="text-center">
                          Product Code
                        </th>
                        <th class="text-center">
                          product Color
                        </th class="text-center">
                        <th class="text-center">
                          Product Description
                        </th>
                        <th class="text-center">
                          Product Price
                        </th>
                        <th class="text-center">
                          Product
                        </th>
                         <th class="text-center">
                          Status
                        </th>
                       
                        <th class="text-center">
                          EDIT
                        </th>
                        <th class="text-center">
                          Delete
                        </th>
                      </thead>
                      <tbody>

                       
                     
                        @foreach($product as $row)
                          
                        
                            <tr>
                            <td class="text-center">{{$row->id}}</td>
                            <td class="text-center">{{$row->catId}}</td>
                            <td class="text-center">{{$row->catName}}</td>
                            <td class="text-center">{{$row->prdName}}</td>                            
                            <td class="text-center">{{$row->prdCode}}</td>
                              <td class="text-center">{{$row->prdColor}}</td>
                              <td class="text-center">{{$row->prdDescript}}</td>
                              <td class="text-center">{{$row->prdPrice}}</td>
                              
                              <td>
                                @if(!empty($row->prdPic))
                                <img src="{{url('public/Uploads/Products/'.$row->prdPic)}}" alt="{{$row->prdPic}}" style="width: 100px;">
                                @endif
                              </td>
                              <td class="text-center">{{$row->status}}</td>
                             
                             

                             
                              <td><a class="btn  btn-success"   href="javascript:void(0)" id="EditBtn">Edit</a></td>
                      
                              <td><a class="btn btn-danger" data-toggle="modal" id="DeleteBtn" data-target="#DeleteModal">Delete</a></td>

                            
                            </tr>
                         
                        @endforeach
                        
                        


                      </tbody>
                    </table>
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
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
   <script>
      $(document).ready( function () {
            $('#dataTable').DataTable();
      } );

        $(document).ready(function()
                          {
                            
                             $('#dataTable').on('click','#EditBtn',function() 
                               {
                                    
                                             $tr=$(this).closest('tr');
                                         var data=$tr.children("td").map(function()
                                                                         {
                                                                             return $(this).text();

                                                                          }).get();
                                        


                                         $('#EditModal').modal('show');
                                         Id=data[0];
                                         catId=data[1];
                                         
                                         PrdName=data[3];
                                         prdCode=data[4];
                                         PrdColor=data[5];
                                         PrdDes=data[6];
                                         PrdPrice=data[7];
                                         Prd=data[8];
                                         $('#prdId').val(Id);
                                         
                                         $('#prdName').val(PrdName);
                                         $('#prdCode').val(prdCode);
                                          $('#prdColor').val(PrdColor);
                                          $('#prdDescript').val(PrdDes);
                                          $('#prdPrice').val(PrdPrice);

                                         
                                         
                                        
                                         $('#EditForm').attr('action',"UpdateProduct/"+data[0]);

                                }); 

                               $('#dataTable').on('click','#DeleteBtn',function() 
                                   {
                                        
                                                 $tr=$(this).closest('tr');
                                             var data=$tr.children("td").map(function()
                                                                             {
                                                                                 return $(this).text();

                                                                              }).get();
                                       document.getElementById('idvalue').innerHTML=data[0]+" " +data[1];
                                        $('#bta').attr('href',"DeleteProduct/"+data[0]);
                                      




                                   });
                         });
   </script>
</body>
</html>  