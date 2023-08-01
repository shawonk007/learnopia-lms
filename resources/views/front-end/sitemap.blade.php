<x-master-layout>

  <x-slot name="title">
    {{ __('Sitemap') }}
  </x-slot>

  <x-slot name="hero">
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
            <h1 class="display-3 text-white animated slideInDown">{{ __('Sitemap') }}</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('site.home') }}">{{ __('Home') }}</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('site.sitemap') }}">{{ __('Pages') }}</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">{{ __('Sitemap') }}</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->
  </x-slot>

  <!-- Sitemap Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">{{ __('Sitemap') }}</h6>
        <h1 class="mb-5">{{ config('app.name') . __(' Pages Sitemap') }}</h1>
      </div>
      <div class="col-12 d-flex justify-content-center">
        <div class="col-10 col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
          <ul class="list-group">
            <li class="list-group-item"><a href="#">Home</a></li>
            <li class="list-group-item">
              <a href="#">Courses</a>
              <ul class="list-group">
                <li class="list-group-item"><a href="#">All Courses</a></li>
                <li class="list-group-item"><a href="#">Popular Courses</a></li>
                <li class="list-group-item"><a href="#">Categories</a></li>
                <li class="list-group-item"><a href="#">Search Courses</a></li>
              </ul>
            </li>
            <li class="list-group-item">
              <a href="#">My Courses</a>
              <ul class="list-group">
                <li class="list-group-item"><a href="#">Enrolled Courses</a></li>
                <li class="list-group-item"><a href="#">Completed Courses</a></li>
                <li class="list-group-item"><a href="#">In Progress Courses</a></li>
                <li class="list-group-item"><a href="#">Certificates</a></li>
              </ul>
            </li>
            <li class="list-group-item">
              <a href="#">Instructors</a>
              <ul class="list-group">
                <li class="list-group-item"><a href="#">All Instructors</a></li>
                <li class="list-group-item"><a href="#">Instructor Profiles</a></li>
                <li class="list-group-item"><a href="#">Become an Instructor</a></li>
              </ul>
            </li>
            <li class="list-group-item">
              <a href="#">About Us</a>
              <ul class="list-group">
                <li class="list-group-item"><a href="#">Mission and Vision</a></li>
                <li class="list-group-item"><a href="#">Team</a></li>
                <li class="list-group-item"><a href="#">Testimonials</a></li>
              </ul>
            </li>
            <li class="list-group-item">
              <a href="#">Blog</a>
              <ul class="list-group">
                <li class="list-group-item"><a href="#">All Posts</a></li>
                <li class="list-group-item"><a href="#">Categories</a></li>
                <li class="list-group-item"><a href="#">Tags</a></li>
              </ul>
            </li>
            <li class="list-group-item">
              <a href="#">Contact Us</a>
              <ul class="list-group">
                <li class="list-group-item"><a href="#">Contact Information</a></li>
                <li class="list-group-item"><a href="#">Contact Form</a></li>
                <li class="list-group-item"><a href="#">Support Center</a></li>
              </ul>
            </li>
            <li class="list-group-item"><a href="#">FAQ</a></li>
            <li class="list-group-item"><a href="#">Privacy Policy</a></li>
            <li class="list-group-item"><a href="#">Terms of Service</a></li>
            <li class="list-group-item"><a href="#">Sign Up / Register</a></li>
            <li class="list-group-item"><a href="#">Log In</a></li>
            <li class="list-group-item">
              <a href="#">User Profile</a>
              <ul class="list-group">
                <li class="list-group-item"><a href="#">Personal Information</a></li>
                <li class="list-group-item"><a href="#">Course Progress</a></li>
                <li class="list-group-item"><a href="#">Notifications</a></li>
                <li class="list-group-item"><a href="#">Settings</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Sitemap End -->

</x-master-layout>