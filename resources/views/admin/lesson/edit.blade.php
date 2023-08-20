<x-admin-layout>

  <x-slot name="title">
    {{ __('Edit Lesson') }}
  </x-slot>

  <x-slot name="header">
    <h1 class="h3 mb-3"><strong>{{ __('Course') }}</strong> {{ __('Lessons') }}</h1>
  </x-slot>
  
  <form action="{{ route('lessons.update', $lesson->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="row">
      <div class="col-12 col-xl-8">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Lesson Overview') }}</h5>
          </div>
          <div class="card-body pt-0">
            <div class="row g-3">
              <div class="col-12">
                <input type="text" name="title" class="form-control" id="title" placeholder="{{ __('Lesson Title') }}" value="{{ $lesson->title }}" required />
              </div>
              <div class="col-12">
                <textarea name="highlights" class="form-control" id="highlights" cols="30" rows="10" placeholder="{{ __('Type lesson highlights here ...') }}">{{ $lesson->highlights }}</textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Lesson Description') }}</h5>
          </div>
          <div class="card-body pt-0">
            <div class="row g-3">
              <div class="col-12">
                <textarea name="description" class="form-control" id="description" cols="30" rows="24" placeholder="{{ __('Type lesson details here ...') }}">{{ $lesson->description }}</textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-4">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Lesson Informations') }}</h5>
          </div>
          <div class="card-body py-0">
            <div class="row g-3">
              <div class="col-12">
                <input type="text" name="slug" class="form-control" id="slug" placeholder="{{ __('Lesson Slug') }}" value="{{ $lesson->slug }}" required />
              </div>
              <div class="col-12">
                <select name="status" class="form-control" id="catStatus">
                  <option value="">{{ __('-- Status --') }}</option>
                  <option value="1" {{ $lesson->status === 1 ? 'selected' : '' }} >{{ __('Enable') }}</option>
                  <option value="0" {{ $lesson->status === 0 ? 'selected' : '' }} >{{ __('Disable') }}</option>
                </select>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="row g-3">
              <div class="col-6 d-grid">
                <a href="{{ route('lessons.index') }}" class="btn btn-outline-secondary" >
                  <i class="fas fa-arrow-left align-middle"></i>
                  <span class="ps-1">{{ __('Discard') }}</span>
                </a>
              </div>
              <div class="col-6 d-grid">
                <button type="submit" class="btn btn-outline-secondary" >
                  <i class="fas fa-check align-middle"></i>
                  <span class="ps-1">{{ __('Update') }}</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Course') }}</h5>
          </div>
          <div class="card-body pt-0">
            <div class="row g-3">
              <div class="col-12">
                <select name="course_id" class="form-control" id="catStatus">
                  @forelse ($courses as $course)
                    <option value="{{ $course->id }}" {{ $course->id === $lesson->course_id ? 'selected' : '' }} >{{ $course->title }}</option>
                  @empty  
                    <option value="">{{ __('-- Course --') }}</option>
                  @endforelse
                </select>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Lesson Tags') }}</h5>
          </div>
          <div class="card-body pt-0">
            <div class="row g-3">
              <div class="col-12">
                <select name="topic_id[]" class="select2 select2-bootstrap-5-theme select-field w-100" id="topic" multiple >
                  <option value="">{{ __('-- Tags & Keywords --') }}</option>
                  @foreach ($topics as $topic)
                    <option value="{{ $topic->id }}">{{ $topic->title }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
        </div> --}}
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Lesson Thumbnail') }}</h5>
          </div>
          <div class="card-body pt-0">
            <div class="row g-3">
              <div class="col-12">    
                <label for="imageInput" class="bg-light w-100 h-100" style="border: 3px solid lightgray; border-style: dashed;">
                  <div class="row">
                    <div class="col-5 d-flex flex-column align-items-center justify-content-center">
                      <h1 class="h1 mb-0"><i class="fas fa-cloud-upload align-middle"></i></h1>
                      <h6 class="my-1 text-dark text-center"><strong>{{ __('Upload') }}</strong></h6>
                    </div>
                    <div class="col-7">
                      <p class="text-dark text-center" >
                        <span>{{ __('PNG, JPG or JPEG') }}</span><br />
                        <span>{{ __('(MAX. UPLOAD 2MB)') }}</span><br/>
                        <span>{{ __('(MIN. RES. 300X300)') }}</span>
                      </p>
                    </div>
                  </div>
                  <input type="file" name="thumbnail" class="d-none" id="imageInput" accept="image/*;capture=camera" />
                </label>
              </div>
              <div class="col-12">
                <img id="dummy" src="{{ asset('img/dummy/rectangle.jpg') }}" class="w-100" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

  <x-slot name="script">
    @include('partials.admin.flash')
  </x-slot>
 
</x-admin-layout>