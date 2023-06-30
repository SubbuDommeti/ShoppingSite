<script>
		$('body').scrollspy({
			target: '#mainNav',
			offset: navHeight
		});

	</script>
<header class="header fixed-top" id="mainNav">
	<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
					

					<div class="right-top-bar flex-w h-full">

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							EN
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							USD
						</a>

					</div>
					
				</div>
			</div>
			<div class="form-control-plaintext text-danger text-center" id='msg'> 
				

			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="{{url('public/assets/images/icons/logo.png')}}" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class=" main-menu">
							
							
							<li>
								<a href="/ShoppingSite2">Home</a>
							</li>

							<li>
								<a href="product">Shop</a>
							</li>
							

							<li class="label1" data-label1="hot">
								<a href="shoping-cart">Features</a>
							</li>

							<li>
								<a href="blog">Blog</a>
							</li>

							<li>
								<a href="about">About</a>
							</li>

							<li>
								<a href="contact">Contact</a>
							</li>
							@if(Auth::user())
							@if(Auth::user()->userType=='Admin')
							<li>
								<a href="dashboard">Dashboard</a>
							</li>
							@endif
							@endif
						</ul>
					</div>	
					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						
						<ul class="main-menu">
							<li class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
								<i class="zmdi zmdi-search"></i>
							</li>
							@if(Auth::user())
							<li>
								<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div></li>

							<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
							@endif
							<li>
								<img src="{{url('public/assets/images/icons/acc.png')}}" class="rounded-circle" alt="IMG-LOGO" style="height: 30px;"></a>
									@guest	
									
					              	<ul class="sub-menu text-sm-left">
					                			<li>
				                            		<a href="{{route('login')}}">Login</a>
				                            	</li>
				                            
				                            	<li>
				                            		<a href="{{route('register')}}">Register</a>
				                               	</li>
				                    </ul>
				                    @else
				                    <li class="nav-item dropdown">

				                    	<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
				                    		{{Auth::user()->name }} <span class="caret"></span>
				                    	</a>

				                    	<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

				                    		<a class="dropdown-item" href="Update">
				                    			Update Profile

				                    		</a>
				                    		<a class="dropdown-item" href="/">
				                    			Settings

				                    		</a>
				                    		<a class="dropdown-item" href="/">
				                    			Change Password

				                    		</a>
				                    		<a class="dropdown-item" href="{{ route('logout') }}"
				                    		onclick="event.preventDefault();
				                    		document.getElementById('logout-form').submit();">
				                    		{{ __('Logout') }}
				                    	</a>


				                    	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				                    		@csrf
				                    	</form>
				                    </div>
				                </li> 	
			                        @endguest
			                </li>
			            </ul>
			        </div>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="/"><img src="{{url('public/assets/images/icons/logo.png')}}" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				
				
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search ">
					<i class="zmdi zmdi-search "></i>
				</div>
				@if(Auth::user())
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
				@else
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 " style="padding-left:20px;">
					<a href="login"><i class="zmdi zmdi-account "></i></a>
				</div>
				@endif
				
			</div>

			

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>

			

		</div>
		<div class="text-sm-center  text-danger">
			
				@if(session('Msg1'))
					<br>
					<br>
					
					<p id="msg1">
						{{session('Msg1')}}
					</p>
		
						<script>
                          function autoRefresh()
                          {
                            $('#msg1').hide();
                           /* location.reload();*/
                          }
                          setInterval('autoRefresh()',7000); 
                        </script>
				@endif
			</div>
		



		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>


				<li>
					<div class="right-top-bar flex-w push-sm-0">

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							EN
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							USD
						</a>
					</div>

				</li>
			</ul>

			<ul class="main-menu-m">
				@guest
				<a  class="nav-link" data-toggle="collapse" href="#Management" aria-expanded="true">
		             	<strong class="text-light">My Account</strong>
		            </a>
		          <div class="collapse hide" id="Management">
		            <ul class="nav bg-dark">
		              <li class="nav-item">
		                  <a class="nav-link" href="{{route('login')}}">
			                   Login
		                  </a>
		              </li>
		              <li class="nav-item">
		                   <a class="nav-link" href="{{route('register')}}">
			                   Register
		                  </a>
		              </li>
		            <ul>
		          </div>
		        	
				@else
					<li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                	<a class="dropdown-item" href="Update">
                                    	Update Profile
                                       
                                    </a>
                                    <a class="dropdown-item" href="#">
                                    	Settings
                                       
                                    </a>
                                    <a class="dropdown-item" href="#">
                                    	Change Password
                                       
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li> 	
                    
                    </li>
                @endguest
	

				<li>
					<a href="/ShoppingSite2">Home</a>
				</li>
				
				<li>
					<a href="product">Shop</a>
				</li>
				

				<li>
					<a href="shoping-cart" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog">Blog</a>
				</li>

				<li>
					<a href="about">About</a>
				</li>

				<li>
					<a href="contact">Contact</a>
				</li>
				@if(Auth::user())
				@if(Auth::user()->userType=='Admin')
				<li>
					<a href="dashboard">Dashboard</a>
				</li>
				@endif
				@endif
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="{{url('public/assets/images/icons/icon-close2.png')}}" alt="CLOSE">

				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">

				</form>

			</div>


		</div>

</header>