<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Admin Login</title>
	@vite('resources/js/app.js')
</head>

<body class="bg-dark text-white">
	@include('admin.includes.header')

	<div id="page-title" class="text-center bg-dark text-white">
		@yield('page-title', 'Default Title')
	</div>

	<div class="container-fluid d-flex align-items-center justify-content-center rounded border border-danger">

		<main class="w-100">
			@yield('contents')
		</main>

	</div>

	@include('admin.includes.footer')
</body>

</html>
