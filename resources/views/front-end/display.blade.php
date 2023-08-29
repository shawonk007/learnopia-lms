<x-master-layout>

  <x-slot name="title">
    {{-- {{ __('Display Course') }} --}}
    {{ $course->title }}
  </x-slot>

  <x-slot name="hero">
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
            <h1 class="display-3 text-white animated slideInDown">{{ $course->title }}</h1>
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

  <section class="container-xxl py-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-xl-7">
          <div class="card">
            <div class="card-body">
              <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                <a class="position-relative d-block overflow-hidden" href="javascript:void(0)">
                  {{-- <img class="img-fluid" src="{{asset('img/cat-1.jpg')}}" alt="" /> --}}
                  <img class="img-fluid" src="{{ Storage::url($course->details->thumbnail ) }}" alt="" />
                </a>
              </div>
            </div>
          </div>
          <div class="card mt-5">
            <div class="card-body">
              <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                <h4>{{ __('What you will learn') }}</h4>
                <p>{!! $course->details->highlights !!}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-5 mt-5 mt-xl-0">
          <div class="card">
            <div class="card-body">
              {{-- <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('site.home') }}">{{ __('Home') }}</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('site.courses') }}">{{ __('Courses') }}</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ $course->title }}</li>
                </ol>
              </nav> --}}
              <h5>{{ $course->title }}</h5>
              <h2 class="my-3">
                <span>BDT. </span>
                <span>{{ $course->regular_price }}</span>
              </h2>
              <p>
                <span>Category : </span>
                <span>{{ $course->category->title }}</span>
              </p>
              <p>
                <span>Course Code : </span>
                <span>{{ $course->course_code }}</span>
              </p>
              <p>
                <span>Course Duration : </span>
                <span>{{ $course->details->duration }}</span>
              </p>
            </div>
            <div class="card-footer">
              <a href="{{ route('enrollment', ['slug' => $course->slug, 'course_id' => $course->id]) }}" class="btn btn-primary btn-block w-100">
                <span>{{ __('Enroll Now') }}</span>
              </a>
            </div>
          </div>
          <div class="card mt-5">
            <div class="card-body">
              <h4 class="mb-3">{{ __('Course Topics') }}</h4>
              @foreach ($course->topic as $topic)
                <span class="badge bg-info rounded-pill">{{$topic->title}}</span>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container-xxl py-5">
    <div class="container">
      <div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Overview</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Lessons</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Reviews</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
          </li>
        </ul>
      </div>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
          {!! $course->details->description !!}
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
          <div class="accordion" id="accordionExample">
            @foreach($course->lessons as $lesson)
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <span>Lesson-{{ $loop->iteration }}</span>
                    <span class="ms-1 me-1"> : </span>
                    <span>{{ $lesson->title }}</span>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    {!! $lesson->highlights !!}
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
      </div>
    </div>
  </section>

</x-master-layout>