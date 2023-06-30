
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ShoppingSite</title> @yield('title')
    @include('Subpages.head')
</head>
<body class="animsition">

       

     @include('Subpages.header')
     @yield('content')
    @include('Subpages.footer')
    <!-- Back To Top -->
    <div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>
    @include('Subpages.scripts')

</body>
</html>


