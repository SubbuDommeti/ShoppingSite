btnAppear<!DOCTYPE html>
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
                                <label >Id</label>
                                <input type="text" name="BannerId" id="BannerId" class="form-control" required  readonly>
                              </div>
                            </div>
                          </div>
                          
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label >LText-1</label>
                                <input type="text" name="ltext1" id="ltext1" class="form-control" required >
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label >LText-2</label>
                                <input type="text" name="ltext2" id="ltext2" class="form-control" required >
                              </div>
                            </div>
                          </div>
                         <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label >Ltext-1 Appearence</label>
                                <input type="text" name="ltext1Appear" id="ltext1Appear" class="form-control" required>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label >Ltext-2 Appearence</label>
                                <input type="text" name="ltext2Appear" id="ltext2Appear" class="form-control" required>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label >Button Appearence</label>
                                <input type="text" name="btnAppear" id="btnAppear" class="form-control" required>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label >Link</label>
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
                  <h4 class="card-title ">View Banners</h4>
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
                          Ltext 1
                        </th>
                        <th class="text-center">
                          Ltext 2
                        </th>
                        <th class="text-center">
                          Ltext 1 Appearence
                        </th>
                        <th class="text-center">
                          Ltext 2 Appearence
                        </th class="text-center">
                         <th class="text-center">
                          Button Appearence
                        </th class="text-center">
                        <th class="text-center">
                          image
                        </th>
                        <th class="text-center">
                          link
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

                       
                     
                        @foreach($Banner as $row)
                          
                        
                            <tr>
                            <td class="text-center">{{$row->id}}</td>
                            <td class="text-center">{{$row->ltext1}}</td>
                            <td class="text-center">{{$row->ltext2}}</td>                            
                            <td class="text-center">{{$row->ltext1Appear}}</td>
                            <td class="text-center">{{$row->ltext2Appear}}</td>
                            <td class="text-center">{{$row->btnAppear}}</td>
                            <td>
                                @if(!empty($row->image))
                                <img src="{{url('public/Uploads/Banners/'.$row->image)}}" alt="{{$row->image}}" style="width: 100px;">
                                @endif
                              </td>
                            <td class="text-center">{{$row->link}}</td>
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
                                         banId=data[0];
                                         ltext1=data[1];
                                         ltext2=data[2];
                                         ltext1Appear=data[3];
                                         ltext2Appear=data[4];btnAppear
                                         btnAppear=data[5];
                                         link=data[7];
                                         
                                        
                                         $('#BannerId').val(banId);

                                         $('#ltext1').val(ltext1);
                                         $('#ltext2').val(ltext2);
                                          $('#ltext1Appear').val(ltext1Appear);
                                          $('#ltext2Appear').val(ltext2Appear);
                                          $('#btnAppear').val(btnAppear);
                                          
                                          $('#link').val(link);

                                       

                                         
                                         
                                        
                                         $('#EditForm').attr('action',"UpdateBanner/"+data[0]);

                                }); 

                               $('#dataTable').on('click','#DeleteBtn',function() 
                                   {
                                        
                                                 $tr=$(this).closest('tr');
                                             var data=$tr.children("td").map(function()
                                                                             {
                                                                                 return $(this).text();

                                                                              }).get();
                                       document.getElementById('idvalue').innerHTML=data[0]+" " +data[1];
                                        $('#bta').attr('href',"DeleteBanner/"+data[0]);
                                      




                                   });
                         });
    </script>
</body>
</html>  