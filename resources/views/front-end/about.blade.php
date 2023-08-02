<x-master-layout>

  <x-slot name="title">
    {{ __('About Us') }}
  </x-slot>

  <x-slot name="hero">
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
            <h1 class="display-3 text-white animated slideInDown">{{ __('About Us') }}</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('site.home') }}">{{ __('Home') }}</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('site.sitemap') }}">{{ __('Pages') }}</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">{{ __('About') }}</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->
  </x-slot>

  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
          <div class="position-relative h-100">
            <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/about.jpg') }}" alt="" style="object-fit: cover;" />
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="section-title bg-white text-start text-primary pe-3">{{ __('About Us') }}</h6>
          <h1 class="mb-4">{{ __('Welcome to ') . config('app.name') }}</h1>
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
          <a class="btn btn-primary py-3 px-5 mt-2" href="javascript:void(0)">Read More</a>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Mission Start -->
  <div class="container-xxl py-5">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="section-title bg-white text-start text-primary pe-3">{{ __('Mission') }}</h6>
          <h2 class="mb-4">{{ __('Empowering through Education') }}</h2>
          <p class="mb-4">At Learnopia, our mission is to revolutionize education by providing a dynamic and accessible learning platform that empowers individuals to unlock their full potential. We are committed to fostering a culture of continuous learning, where knowledge knows no bounds and is readily available to all. Through our diverse course offerings, expert instructors, and personalized learning pathways, we aim to equip learners with the skills and knowledge necessary to succeed in their personal and professional endeavors. Our mission is driven by a passion for education, a dedication to excellence, and a belief that learning has the power to transform lives and create a more enlightened and equitable society.</p>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
          <div class="position-relative h-100">
            <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/about.jpg') }}" alt="" style="object-fit: cover;" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Mission End -->

  <!-- Vision Start -->
  <div class="container-xxl py-5">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
          <div class="position-relative h-100">
            <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/about.jpg') }}" alt="" style="object-fit: cover;" />
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="section-title bg-white text-start text-primary pe-3">{{ __('Vision') }}</h6>
          <h2 class="mb-4">{{ __('Empowering Growth, Everywhere') }}</h2>
          <p class="mb-4">Our vision at Learnopia is to be a global leader in online education, inspiring and empowering learners to embrace lifelong learning. We envision a future where education is not confined by traditional barriers but is a gateway to personal growth and global progress. Learnopia strives to create a vibrant and inclusive community of learners, educators, and experts, collaborating to shape the future of education. Through innovative technology, data-driven insights, and a relentless pursuit of excellence, we aim to set new standards in the world of online learning. Our ultimate vision is to democratize education, making it accessible to learners of all ages and backgrounds, fostering a world where knowledge knows no boundaries, and every individual has the opportunity to thrive and make a positive impact on the world.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Vision End -->

  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
        <h1 class="mb-5">Expert Instructors</h1>
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
              <img class="img-fluid" src="{{ asset('img/team-2.jpg') }}" alt="" />
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

</x-master-layout>