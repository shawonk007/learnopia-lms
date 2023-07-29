<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5" />
	<meta name="author" content="Muhammad Nasir Uddin Khan Shawon" />
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
	<link rel="canonical" href="https://github.com/shawonk007/learnopia-lms" />
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
  </head>

<body>
	<div class="wrapper">
		@include('partials.admin.sidebar')
		<div class="main">
            @include('partials.admin.navbar')
			<main class="content">
				<div class="container-fluid p-0">
                    @yield('heading')
					@yield('content')
				</div>
			</main>
			@include('partials.admin.footer')
		</div>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
    @yield('script')
	

</body>

</html>