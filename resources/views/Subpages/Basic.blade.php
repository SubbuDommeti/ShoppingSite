<!DOCTYPE html>
<html lang="en">
<head>
	@include('Subpages.head')
	<title>ShoppingSite ||@yield('title')  </title>
</head>
<body class="animsition">
	
	<!-- Header -->
	@include('Subpages.header')
	@include('Subpages.cart')

		@yield('content')
	<!-- Back to top -->
	@include('Subpages.backTotop')

	<!-- Scripts -->
	@include('Subpages.scripts')
	@include('Subpages.footer')
	
			

</body>
</html>