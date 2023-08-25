<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
  <a href="{{ route('site.home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
    <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>{{ config('app.name') }}</h2>
  </a>
  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
      <a href="{{ route('site.home') }}" class="nav-item nav-link active">{{ __('Home') }}</a>
      <a href="{{ route('site.about') }}" class="nav-item nav-link">{{ __('About') }}</a>
      <a href="{{ route('site.courses') }}" class="nav-item nav-link">{{ __('Courses') }}</a>
      {{-- <div class="nav-item dropdown">
        <a href="{{ route('site.courses') }}" class="nav-item nav-link">{{ __('Courses') }}</a>
        <div class="dropdown-menu fade-down m-0">
          @php
            $categories = App\Models\Category::where('status', 1)->get();
          @endphp
          @foreach ($categories as $category)
            <a href="{{ route('site.category', ['slug' => $category->slug]) }}" class="dropdown-item">{{ $category->title }}</a>
          @endforeach
        </div>
      </div> --}}
      <a href="{{ route('site.contact') }}" class="nav-item nav-link">{{ __('Contact') }}</a>
    </div>
    <a href="javascript:void(0)" class="btn btn-success py-4 px-lg-4 d-none d-lg-block">{{ __('Enroll Now') }}<i class="fas fa-arrow-right ms-3"></i></a>
  </div>
</nav>
<!-- Navbar End -->