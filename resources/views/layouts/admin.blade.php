<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
	<meta name="author" content="Muhammad Nasir Uddin Khan Shawon" />
	<meta name="description" content="Embark on a limitless learning journey with Learnopia, the ultimate Learning Management System (LMS). Access diverse courses, learn from experts, and cultivate valuable skills effortlessly. Discover boundless opportunities to grow and thrive. Get started now!" />
	<meta name="keywords" content="HTML, HTML5, CSS, CSS3, JavaScript, JS, Vanilla JS, Bootstrap, Bootstrap 5, Sass, SCSS, PHP, Laravel, Blade, Feather Icons, AdminKit, Admin Panel, Template, Dashboard, Front-End, Back-End, UI Kit, Web, Website, Responsive, Learning Management System, LMS, Online Education, E-Learning, Courses, Expert Instructors, Skill Development, Personalized Learning, Education Platform, Interactive Learning, Web Development, Programming, Design, Technology, Self-improvement, Knowledge, Growth, Online Courses, Student Resources" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ $title }} | {{ config('app.name', 'Laravel') . " - " . config('app.tagline') }}</title>
	<link rel="shortcut icon" href="{{ asset('img/icons/icon-48x48.png') }}" />
	<link rel="canonical" href="https://github.com/shawonk007/learnopia-lms" />
	{{-- <link rel="stylesheet" href="{{ asset('plugins/bootstrap-v5.3.0/css/bootstrap.min.css') }}"> --}}
	<link rel="stylesheet" href="{{ asset('plugins/font-awesome-6.4.0/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap-5/css/select2.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap-5/css/select2-bootstrap-5-theme.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" />
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
  </head>
  <body>
	<div class="wrapper">
	  <x-admin-sidebar />
	  <div class="main">
        <x-admin-navbar />
		<main class="content">
		  <div class="container-fluid p-0">
            @isset($header)
              {{ $header }}
            @endisset
			  {{ $slot }}
		  </div>
		</main>
        <x-admin-footer />
	  </div>
	</div>
	<script src="{{ asset('plugins/jquery/jquery-3.7.0.min.js') }}"></script>
	{{-- <script src="{{ asset('plugins/bootstrap-v5.3.0/js/bootstrap.bundle.min.js') }}"></script> --}}
	<script src="{{ asset('plugins/font-awesome-6.4.0/js/all.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.6.2/tinymce.min.js"></script>
	<script src="{{ asset('plugins/select2-bootstrap-5/js/select2.min.js') }}"></script>
	<script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
	<script src="{{ asset('plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/scripts.js') }}"></script>
	<script src="{{ asset('js/tinymce.js') }}"></script>
	@isset($script)
      {{ $script }}
    @endisset
  </body>
</html>