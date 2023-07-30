<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- My CSS -->
	@vite(['resources/css/admin.css','resources/js/admin.js'])
	@yield('layout')
	<title>
		@yield('tilte','Dashboard')
	</title>
</head>
<body>


	<!-- SIDEBAR -->
	@include('Admin.Layout.sidebar')
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		@include('Admin.Layout.nav')
		@yield('content')
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
@yield('script')
	
</body>
</html>