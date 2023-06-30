
<!-- 

           Super Admin(1)=All
           Admin(2)=Dashboard,Regulation,Degree.Department
           OIE(3)=Dashboard,Student Admission,Managemant
           Programmer(4)=Dashboard,Student Admission,Regulation,specilization



-->
<div class="logo" style="border:12px groove black; background-color: skyblue; border-right:none; border-left: none;">

        <a href="dashboard" class="simple-text logo-normal">
    
          <img src="{{url('public/assets/images/icons/logo.png')}}" alt="IMG-LOGO" >
          <br>
         Admin Panel
     </a>
    

        
</div>
<div class="sidebar-wrapper">
        
        <ul class="nav">
        
          <li  class="{{'upload'==request()->path()? 'active' : ''}}">
            <!-- <a class="nav-link" href="dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a> -->
            <a class="nav-link" href="dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li >
              <a  class="nav-link " data-toggle="collapse" href="#Users" aria-expanded="true">
                <i class="material-icons">supervisor_account</i>
                <p>Users</p>
              </a>
              <div class="collapse hide" id="Users">
                <ul class="nav">
                  <li class="nav-item ">
                      <a class="nav-link" href="users">
                        <span>Users</span>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="users">
                        <span>View Users</span>
                      </a>
                    </li>
                <ul>
              </div>
          </li>
          <li >
              <a  class="nav-link " data-toggle="collapse" href="#Banner" aria-expanded="true">
                <i class="material-icons">Banners</i>
                <p>Banners</p>
              </a>
              <div class="collapse hide" id="Banner">
                <ul class="nav">
                  <li class="nav-item ">
                      <a class="nav-link" href="AddBanner">
                        <span>Add Banner</span>
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="ViewBanner">
                        <span>View Banner</span>
                      </a>
                    </li>
                <ul>
              </div>
          </li>
        <li>
            <a  class="nav-link " data-toggle="collapse" href="#Products" aria-expanded="true">
              <i class="material-icons">Producrts</i>
              <p>Products</p>
            </a>
          <div class="collapse hide" id="Products">
            <ul class="nav">
              <li class="nav-item ">
                  <a class="nav-link" href="AddProduct">
                    <span>Add Products</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="ViewProduct">
                    <span>View Products</span>
                  </a>
                </li>
            <ul>
          </div>
        </li>
         <li >
            <a  class="nav-link " data-toggle="collapse" href="#Category" aria-expanded="true">
              <i class="material-icons">Category</i>
              <p>Category</p>
            </a>
          <div class="collapse hide" id="Category">
            <ul class="nav">
              <li class="nav-item ">
                  <a class="nav-link" href="AddCategory">
                    <span>Add Category</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="ViewCategory">
                    <span>View Category</span>
                  </a>
                </li>
            <ul>
          </div>
        </li>
          
             <!-- <li>
                    
                      <a class="nav-link" href="StudentAdmission" aria-expanded="true">
                        <i class="material-icons">perm_contact_calendar</i>
                        <p>Student Admission</p>
                      </a>
                  </li>
                  <li >
                      <a  class="nav-link {{'regulation'==request()->path()||'regulationview'==request()->path() ?'bg-dark text-light' : ''}}" data-toggle="collapse" href="#Regulation" aria-expanded="true">
                        <i class="material-icons">filter_frames</i>
                        <p>Regulation</p>
                      </a>
                      <div class="collapse hide" id="Regulation">
                        <ul class="nav">
                          <li class="nav-item {{'regulation'==request()->path() ?'active' : ''}}">
                              <a class="nav-link" href="regulation">
                                <span>Add Regulation</span>
                              </a>
                            </li>
                            <li class="nav-item {{'regulationview'==request()->path() ?'active' : ''}}">
                              <a class="nav-link" href="regulationview">
                                <span>View Regulation</span>
                              </a>
                            </li>
                        <ul>
                      </div>
                  </li>
                  <li>
                      <a  class="nav-link {{'degree'==request()->path()||'degreeview'==request()->path() ?'bg-dark text-light' : ''}}" data-toggle="collapse" href="#Degree" aria-expanded="true">
                        <i class="material-icons">local_library</i>
                        <p>Degree</p>
                      </a>
                      <div class="collapse hide" id="Degree">
                        <ul class="nav">
                          <li class="nav-item {{'degree'==request()->path() ?'active' : ''}}">
                              <a class="nav-link" href="degree">
                                <span>Add Degree</span>
                              </a>
                            </li>
                            <li class="nav-item {{'degreeview'==request()->path() ?'active' : ''}}">
                              <a class="nav-link" href="degreeview">
                                <span>View Degree</span>
                              </a>
                            </li>
                        <ul>
                      </div>
                  </li>
                  <li>

                      <a class="nav-link {{'department'==request()->path()||'departmentview'==request()->path() ?'bg-dark text-light' : ''}}" data-toggle="collapse" href="#Department" aria-expanded="true">
                        <i class=" material-icons">account_balance</i>
                        <p>Department</p>
                      </a>
                      <div class="collapse" id="Department">
                        <ul class="nav">
                          <li class="nav-item {{'department'==request()->path() ?'active' : ''}}">
                              <a class="nav-link" href="department">
                                <span>Add Department</span>
                              </a>
                            </li>
                            <li class="nav-item {{'departmentview'==request()->path() ?'active' : ''}}">
                              <a class="nav-link" href="departmentview">
                                <span>View Department</span>
                              </a>
                            </li>
                        <ul>
                      </div>
                  </li>
                  <li >
                        <a  class="nav-link {{'specilization'==request()->path()||'specilizationview'==request()->path() ?'bg-dark text-light' : ''}}" data-toggle="collapse" href="#Specilization" aria-expanded="true">
                          <i class="material-icons">directions_bike</i>
                          <p>Specilization</p>
                        </a>
                        <div class="collapse hide" id="Specilization">
                          <ul class="nav">
                            <li class="nav-item {{'specilization'==request()->path() ?'active' : ''}}">
                                <a class="nav-link" href="specilization">
                                  <span>Add Specilization</span>
                                </a>
                              </li>
                              <li class="nav-item {{'specilizationview'==request()->path() ?'active' : ''}}">
                                <a class="nav-link" href="specilizationview">
                                  <span>View Specilization</span>
                                </a>
                              </li>
                      
                          <ul>
                        </div>
                  </li> -->
      </ul>
     
       
</div>