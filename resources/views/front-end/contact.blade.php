<x-master-layout>

  <x-slot name="title">
    {{ __('Contact Us') }}
  </x-slot>

  <x-slot name="hero">
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
            <h1 class="display-3 text-white animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('site.home') }}">{{ __('Home') }}</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('site.sitemap') }}">{{ __('Pages') }}</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">{{ __('Contact') }}</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->
  </x-slot>

  <!-- Contact Start -->
  <section class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">{{ __('Contact Us') }}</h6>
        <h1 class="mb-5">{{ __('Contact For Any Query') }}</h1>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <h5>Get In Touch</h5>
          <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
          <div class="d-flex align-items-center mb-3">
            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
              <i class="fas fa-map-marker-alt text-white"></i>
            </div>
            <div class="ms-3">
              <h5 class="text-primary">{{ __('Office') }}</h5>
              <p class="mb-0">123 Street, New York, USA</p>
            </div>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
              <i class="fas fa-phone-alt text-white"></i>
            </div>
            <div class="ms-3">
              <h5 class="text-primary">{{ __('Mobile') }}</h5>
              <p class="mb-0">+012 345 67890</p>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
              <i class="fas fa-envelope-open text-white"></i>
            </div>
            <div class="ms-3">
              <h5 class="text-primary">{{ __('Email') }}</h5>
              <p class="mb-0">info@example.com</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <iframe class="position-relative rounded w-100 h-100" 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
            frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </div>
        <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="name" placeholder="{{ __('Your Name') }}" />
                  <label for="name">{{ __('Your Name') }}</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="email" class="form-control" id="email" placeholder="{{ __('Your Email') }}" />
                  <label for="email">{{ __('Your Email') }}</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="subject" placeholder="{{ __('Subject') }}" />
                  <label for="subject">{{ __('Subject') }}</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                  <label for="message">{{ __('Message') }}</label>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">{{ ('Send Message') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact End -->

</x-master-layout>