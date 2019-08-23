<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AI</title>
		<!-- Fontawesome css -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

		<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,400,500,700,800,900&display=swap" rel="stylesheet">
		
		<!-- BOOTSTRAP GRID CSS -->
		<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}" />
		<!-- COMMON CSS -->
		<link rel="stylesheet" href="{{asset('public/css/common.css')}}" />
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('public/css/style.css')}}" />
		<!-- RESPONSIVE CSS -->
		<link rel="stylesheet" href="{{asset('public/css/responsive.css')}}" />
	</head>
	<body>

		@include('shared.admin.header')
	
		@yield('content')
		
		@include('shared.admin.footer')

		<script src="{{asset('public/js/jquery-1.12.4.min.js')}}"></script>
		<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('public/js/script.js')}}"></script>
	</body>
</html>