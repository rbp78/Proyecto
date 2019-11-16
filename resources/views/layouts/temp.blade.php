<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet"  href="/css/app.css">
</head>
<body>
	<div class="container">
		<hr>
		@if (session()->has('flash'))
		<div class="alert alert-info">{{session('flash')}}</div>
		@endif

		@yield('content')
	</div>
</body>
</html>