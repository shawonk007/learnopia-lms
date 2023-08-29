<x-master-layout>

  <x-slot name="title">
    {{ __('Homepage') }}
  </x-slot>

  <x-slot name="hero">
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
      <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
          <img class="img-fluid" src="{{ asset('img/carousel-1.jpg') }}" alt="" />
          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
            <div class="container">
              <div class="row justify-content-start">
                <div class="col-sm-10 col-lg-8">
                  <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses</h5>
                  <h1 class="display-3 text-white animated slideInDown">The Best Online Learning Platform</h1>
                  <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p>
                  <a href="javascript:void(0)" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{{ __('Read More') }}</a>
                  <a href="{{ route('login') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">{{ __('Join Now') }}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="owl-carousel-item position-relative">
          <img class="img-fluid" src="{{ ('img/carousel-2.jpg') }}" alt="" />
          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
            <div class="container">
              <div class="row justify-content-start">
                <div class="col-sm-10 col-lg-8">
                  <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses</h5>
                  <h1 class="display-3 text-white animated slideInDown">Get Educated Online From Your Home</h1>
                  <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p>
                  <a href="javascript:void(0)" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{{ __('Read More') }}</a>
                  <a href="javascript:void(0)" class="btn btn-light py-md-3 px-md-5 animated slideInRight">{{ __('Join Now') }}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Carousel End -->
  </x-slot>

  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fas fa-3x fa-graduation-cap text-primary mb-4"></i>
              <h5 class="mb-3">{{ __('Skilled Instructors') }}</h5>
              <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fas fa-3x fa-globe text-primary mb-4"></i>
              <h5 class="mb-3">Online Classes</h5>
              <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fas fa-3x fa-home text-primary mb-4"></i>
              <h5 class="mb-3">Home Projects</h5>
              <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fas fa-3x fa-book-open text-primary mb-4"></i>
              <h5 class="mb-3">Book Library</h5>
              <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->

  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
          <div class="position-relative h-100">
            <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/about.jpg') }}" alt="" style="object-fit: cover;" />
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="section-title bg-white text-start text-primary pe-3">{{ __('About Us') }}</h6>
          <h1 class="mb-4">Welcome to {{ config('app.name') }}</h1>
          <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
          <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
          <div class="row gy-2 gx-4 mb-4">
            <div class="col-sm-6">
              <p class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i>Online Classes</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i>International Certificate</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i>Online Classes</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i>International Certificate</p>
            </div>
          </div>
          <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('site.about') }}">{{ __('Read More') }}</a>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Categories Start -->
  <div class="container-xxl py-5 category">
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
                <img class="img-fluid" src="{{ asset('img/cat-1.jpg') }}" alt="" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                  <h5 class="m-0">Web Design</h5>
                  <small class="text-primary">49 Courses</small>
                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
              <a class="position-relative d-block overflow-hidden" href="javascript:void(0)">
                <img class="img-fluid" src="{{ asset('img/cat-2.jpg') }}" alt="" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                  <h5 class="m-0">Graphic Design</h5>
                  <small class="text-primary">49 Courses</small>
                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
              <a class="position-relative d-block overflow-hidden" href="javascript:void(0)">
                <img class="img-fluid" src="{{ asset('img/cat-3.jpg') }}" alt="" />
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
            <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/cat-4.jpg') }}" alt="" style="object-fit: cover;" />
            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
              <h5 class="m-0">Online Marketing</h5>
              <small class="text-primary">49 Courses</small>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Categories Start -->

  <!-- Courses Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">{{ __('Courses') }}</h6>
        <h1 class="mb-5">{{ __('Popular Courses') }}</h1>
      </div>
      <div class="row g-4 justify-content-center">
        @php
          $courses = App\Models\Course::where('featured', 1)->paginate(6);
        @endphp
        @foreach ($courses as $course)
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="course-item bg-light">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid" src="{{ Storage::url($course->details->thumbnail ) }}" alt="" />
                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                  <a href="{{ route('course.display', ['slug' => $course->slug]) }}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">{{ __('Read More') }}</a>
                  <a href="{{ route('enrollment', ['slug' => $course->slug, 'course_id' => $course->id]) }}" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">{{ __('Enroll Now') }}</a>
                </div>
              </div>
              <div class="text-center p-4 pb-0">
                <h3 class="mb-0">{{ $course->regular_price }}</h3>
                {{-- <div class="mb-3">
                  <small class="fas fa-star text-primary"></small>
                  <small class="fas fa-star text-primary"></small>
                  <small class="fas fa-star text-primary"></small>
                  <small class="fas fa-star text-primary"></small>
                  <small class="fas fa-star text-primary"></small>
                  <small>(123)</small>
                </div> --}}
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
        @endforeach
      </div>
    </div>
  </div>
  <!-- Courses End -->

  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">{{ __('Instructors') }}</h6>
        <h1 class="mb-5">{{ __('Expert Instructors') }}</h1>
      </div>
      <div class="row g-4">
        @php
          $instructors = App\Models\User::where([['role_id', 7],['status', 1]])->get();
        @endphp
        @forelse ($instructors as $instructor)
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item bg-light">
              <div class="overflow-hidden">
                <img class="img-fluid" src="{{ asset('img/team-1.jpg') }}" alt="" />
              </div>
              <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                  <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
              <div class="text-center p-4">
                <a href="{{ route('team.instructor', ['uname' => $instructor->username]) }}">
                  <h5 class="mb-0">{{ $instructor->firstname . ' ' . $instructor->lastname }}</h5>
                </a>
                <small>Designation</small>
              </div>
            </div>
          </div>
        @empty
        @endforelse
      </div>
    </div>
  </div>
  <!-- Team End -->

  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">{{ __('Instructors') }}</h6>
        <h1 class="mb-5">{{ __('Expert Instructors') }}</h1>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="{{ asset('img/team-1.jpg') }}" alt="" />
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Instructor Name</h5>
              <small>Designation</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="{{ asset('img/team-2.jpg') }}" alt="">
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Instructor Name</h5>
              <small>Designation</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="{{ asset('img/team-3.jpg') }}" alt="" />
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Instructor Name</h5>
              <small>Designation</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="{{ asset('img/team-4.jpg') }}" alt="" />
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Instructor Name</h5>
              <small>Designation</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team End -->

  <!-- Testimonial Start -->
  <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="text-center">
        <h6 class="section-title bg-white text-center text-primary px-3">{{ __('Testimonial') }}</h6>
        <h1 class="mb-5">{{ __('Our Students Say!') }}</h1>
      </div>
      <div class="owl-carousel testimonial-carousel position-relative">
        <div class="testimonial-item text-center">
          <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-1.jpg') }}" style="width: 80px; height: 80px;" />
          <h5 class="mb-0">Client Name</h5>
          <p>Profession</p>
          <div class="testimonial-text bg-light text-center p-4">
            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-2.jpg') }}" style="width: 80px; height: 80px;" />
          <h5 class="mb-0">Client Name</h5>
          <p>Profession</p>
          <div class="testimonial-text bg-light text-center p-4">
            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-3.jpg') }}" style="width: 80px; height: 80px;" />
          <h5 class="mb-0">Client Name</h5>
          <p>Profession</p>
          <div class="testimonial-text bg-light text-center p-4">
            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-4.jpg') }}" style="width: 80px; height: 80px;" />
          <h5 class="mb-0">Client Name</h5>
          <p>Profession</p>
          <div class="testimonial-text bg-light text-center p-4">
            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial End -->

</x-master-layout>