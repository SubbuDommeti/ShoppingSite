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
        
          <form id="EditForm" method="post">
              @csrf
              
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label >ID</label>
                      <input type="text" name="catId" id="catId" class="form-control" required readonly>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label >Category Name</label>
                      <input type="text" name="catName" id="catName" class="form-control" required >
                    </div>
                  </div>
                </div>
               <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label >Parent Category</label>
                     <select class="form-control  dropdown-item" id="catPr" name="catPr"  placeholder="Parent Category " required>
                      <div class="col-md-6">
                            

                            @if ($errors->has('catPr'))
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('catPr') }}</strong>
                                </span>
                            @endif
                        </div>
                       <option>- - -</option>
                        @foreach($category as $row)
                           <!--  <option value="{{$row->id}}">{{$row->catName}}</option> -->
                            <option value="{{$row->id}}">{{$row->catName}}</option>
                          @endforeach
                          
                       
                     </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label >Url</label>
                       <input type="text" name="catUrl" id="catUrl" class="form-control" required >
                     
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Category Description</label>
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
                  <h4 class="card-title ">View Category</h4>
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
                            Category Name
                          </th>
                          <th class="text-center">
                            Parent Id
                          </th>
                        <th class="text-center">
                          Url
                        </th>
                        <!-- <th class="text-center" style="display: none;"> -->
                        <th class="text-center" >
                          Description
                        </th>
                        <th class="text-center">
                          status
                        </th>
                        
                       
                        <th class="text-center">
                          EDIT
                        </th>
                        <th class="text-center">
                          Delete
                        </th>
                      </thead>
                      <tbody>

                       
                     
                        @foreach($category as $row)
                          
                        
                            <tr>
                            <td class="text-center">{{$row->id}}</td>
                            <td class="text-center">{{$row->catName}}</td>                            
                            <td class="text-center">{{$row->parent_id}}</td>
                              <td class="text-center">{{$row->url}}</td>
                              <!-- <td class="text-center " style="display: none;">{{$row->catDesc}}</td> -->
                              <td class="text-center ">{{$row->catDesc}}</td>
                              <td class="text-center">{{$row->status}}</td>
                              <td class="text-center"> <a class="btn  btn-success"   href="javascript:void(0)" id="EditBtn">Edit</a></td>
                      
                              <td class="text-center"><a class="btn btn-danger" data-toggle="modal" id="DeleteBtn" data-target="#DeleteModal">Delete</a></td>

                            
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
                                         catName=data[1];
                                         catUrl=data[3];
                                         catDesc=data[4];
                                         $('#catId').val(Id);
                                         $('#catName').val(catName);
                                         $('#catUrl').val(catUrl);
                                          $('#catDesc').val(catDesc);
                                          $('#EditForm').attr('action',"UpdateCategory/"+data[0]);

                                }); 

                               $('#dataTable').on('click','#DeleteBtn',function() 
                                   {
                                        
                                                 $tr=$(this).closest('tr');
                                             var data=$tr.children("td").map(function()
                                                                             {
                                                                                 return $(this).text();

                                                                              }).get();
                                       document.getElementById('idvalue').innerHTML=data[0]+" " +data[1];
                                        $('#bta').attr('href',"DeleteCategory/"+data[0]);
                                      




                                   });
                         });
    </script>
</body>
</html>  