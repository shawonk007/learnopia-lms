<x-master-layout>

  <x-slot name="title">
    {{ __('Display Course') }}
  </x-slot>

  <x-slot name="hero">
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
            <h1 class="display-3 text-white animated slideInDown">{{ __('Our Courses') }}</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('site.home') }}">{{ __('Home') }}</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('site.sitemap') }}">{{ __('Pages') }}</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">{{ __('Courses') }}</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->
  </x-slot>
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row">
        <div class="col-7">
          <div class="card">
            <div class="card-body">
              <img class="img-fluid" src="img/cat-1.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="col-5">
          <div class="card">
            <div class="card-body"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-master-layout>