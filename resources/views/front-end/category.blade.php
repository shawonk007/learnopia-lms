<x-master-layout>

  <x-slot name="title">
    {{ __('Our Courses') }}
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

  <!-- Categories Start -->
  <section class="container-xxl py-5 category">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">{{ __('Categories') }}</h6>
        <h1 class="mb-5">{{ __('Courses Categories') }}</h1>
      </div>
      <div class="row g-3">
        <div class="col-lg-7 col-md-6">
          <div class="row g-3">
            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
              <a class="position-relative d-block overflow-hidden" href="javascript:void(0)">
                <img class="img-fluid" src="img/cat-1.jpg" alt="" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                  <h5 class="m-0">Web Design</h5>
                  <small class="text-primary">49 Courses</small>
                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
              <a class="position-relative d-block overflow-hidden" href="javascript:void(0)">
                <img class="img-fluid" src="img/cat-2.jpg" alt="" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                  <h5 class="m-0">Graphic Design</h5>
                  <small class="text-primary">49 Courses</small>
                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
              <a class="position-relative d-block overflow-hidden" href="javascript:void(0)">
                <img class="img-fluid" src="img/cat-3.jpg" alt="" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                  <h5 class="m-0">Video Editing</h5>
                  <small class="text-primary">49 Courses</small>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
          <a class="position-relative d-block h-100 overflow-hidden" href="javascript:void(0)">
            <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt="" style="object-fit: cover;" />
            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
              <h5 class="m-0">Online Marketing</h5>
              <small class="text-primary">49 Courses</small>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Categories Start -->

  <!-- Courses Start -->
  <section class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">{{ __('Courses') }}</h6>
        <h1 class="mb-5">{{ __('Our Courses') }}</h1>
      </div>
      <div class="row g-4 justify-content-center">
        @forelse ($courses as $course)
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="course-item bg-light">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid" src="img/course-1.jpg" alt="">
                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                  <a href="{{ route('course.display', ['slug' => $course->slug]) }}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">{{ __('Read More') }}</a>
                  <a href="javascript:void(0)" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">{{ __('Enroll') }}</a>
                </div>
              </div>
              <div class="text-center p-4 pb-0">
                <h3 class="mb-0">${{ $course->regular_price }}</h3>
                <div class="mb-3">
                  <small class="fas fa-star text-primary"></small>
                  <small class="fas fa-star text-primary"></small>
                  <small class="fas fa-star text-primary"></small>
                  <small class="fas fa-star text-primary"></small>
                  <small class="fas fa-star text-primary"></small>
                  <small>(123)</small>
                </div>
                <div class="mb-4">
                  <h5>{{ $course->title }}</h5>
                  <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>{{ $course->user->firstname . ' ' . $course->user->lastname }}</small>
                </div>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
              </div>
            </div>
          </div>
        @empty
          {{ __('No Data Found') }}
        @endforelse
      </div>
    </div>
  </section>
  <!-- Courses End -->


  <!-- Courses Start -->
  <section class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">{{ __('Courses') }}</h6>
        <h1 class="mb-5">{{ __('Popular Courses') }}</h1>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid" src="img/course-1.jpg" alt="">
              <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                <a href="" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">{{ __('Read More') }}</a>
                <a href="javascript:void(0)" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">{{ __('Enroll') }}</a>
              </div>
            </div>
            <div class="text-center p-4 pb-0">
              <h3 class="mb-0">$149.00</h3>
              <div class="mb-3">
                <small class="fas fa-star text-primary"></small>
                <small class="fas fa-star text-primary"></small>
                <small class="fas fa-star text-primary"></small>
                <small class="fas fa-star text-primary"></small>
                <small class="fas fa-star text-primary"></small>
                <small>(123)</small>
              </div>
              <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
            </div>
            <div class="d-flex border-top">
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
              <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid" src="img/course-2.jpg" alt="">
              <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                <a href="javascript:void(0)" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                <a href="javascript:void(0)" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
              </div>
            </div>
            <div class="text-center p-4 pb-0">
              <h3 class="mb-0">$149.00</h3>
              <div class="mb-3">
                <small class="fas fa-star text-primary"></small>
                <small class="fas fa-star text-primary"></small>
                <small class="fas fa-star text-primary"></small>
                <small class="fas fa-star text-primary"></small>
                <small class="fas fa-star text-primary"></small>
                <small>(123)</small>
              </div>
              <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
            </div>
            <div class="d-flex border-top">
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
              <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="course-item bg-light">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid" src="img/course-3.jpg" alt="" />
              <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                <a href="javascript:void(0)" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                <a href="javascript:void(0)" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
              </div>
            </div>
            <div class="text-center p-4 pb-0">
              <h3 class="mb-0">$149.00</h3>
              <div class="mb-3">
                <small class="fas fa-star text-primary"></small>
                <small class="fas fa-star text-primary"></small>
                <small class="fas fa-star text-primary"></small>
                <small class="fas fa-star text-primary"></small>
                <small class="fas fa-star text-primary"></small>
                <small>(123)</small>
              </div>
              <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
            </div>
            <div class="d-flex border-top">
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
              <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Courses End -->

  <!-- Testimonial Start -->
  <section class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="text-center">
        <h6 class="section-title bg-white text-center text-primary px-3">{{ __('Testimonial') }}</h6>
        <h1 class="mb-5">{{ __('Our Students Say!') }}</h1>
      </div>
      <div class="owl-carousel testimonial-carousel position-relative">
        <div class="testimonial-item text-center">
          <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
          <h5 class="mb-0">Client Name</h5>
          <p>Profession</p>
          <div class="testimonial-text bg-light text-center p-4">
            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
          <h5 class="mb-0">Client Name</h5>
          <p>Profession</p>
          <div class="testimonial-text bg-light text-center p-4">
            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
          <h5 class="mb-0">Client Name</h5>
          <p>Profession</p>
          <div class="testimonial-text bg-light text-center p-4">
            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;" />
          <h5 class="mb-0">Client Name</h5>
          <p>Profession</p>
          <div class="testimonial-text bg-light text-center p-4">
            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonial End -->

</x-master-layout>