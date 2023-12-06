<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="author" content="Muhammad Nasir Uddin Khan Shawon" />
	<meta name="description" content="Embark on a limitless learning journey with Learnopia, the ultimate Learning Management System (LMS). Access diverse courses, learn from experts, and cultivate valuable skills effortlessly. Discover boundless opportunities to grow and thrive. Get started now!" />
	<meta name="keywords" content="HTML, HTML5, CSS, CSS3, JavaScript, JS, Vanilla JS, Bootstrap, Bootstrap 5, Sass, SCSS, PHP, Laravel, Blade, Feather Icons, AdminKit, Admin Panel, Template, Dashboard, Front-End, Back-End, UI Kit, Web, Website, Responsive, Learning Management System, LMS, Online Education, E-Learning, Courses, Expert Instructors, Skill Development, Personalized Learning, Education Platform, Interactive Learning, Web Development, Programming, Design, Technology, Self-improvement, Knowledge, Growth, Online Courses, Student Resources" />
	<title>{{ $title }} | {{ config('app.name', 'Laravel') }}</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ asset('img/icons/icon-48x48.png') }}" />
	<link rel="canonical" href="https://github.com/shawonk007/learnopia-lms" />
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  </head>
  <body>
	<main class="d-flex w-100">
	  <div class="container d-flex flex-column">
		<div class="row vh-100">
		  <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
			<div class="d-table-cell align-middle">
			  <div class="text-center mt-4">
                @isset($header)
                  {{ $header }}
                @endisset
			  </div>
              <div class="card">
                <div class="card-body">
                  <div class="m-sm-4">
                    <div class="text-center">
                      <img src="{{ asset('img/avatars/avatar.jpg') }}" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
                    </div>
                    {{ $slot }}
                  </div>
                </div>
              </div>
			</div>
		  </div>
		</div>
	  </div>
	</main>
	<script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
