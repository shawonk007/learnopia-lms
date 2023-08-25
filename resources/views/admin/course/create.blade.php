<x-admin-layout>

  <x-slot name="title">
    {{ __('Add New Course') }}
  </x-slot>

  <x-slot name="header">
    <h1 class="h3 mb-3"><strong>{{ __('Course') }}</strong> {{ __('Catalogue') }}</h1>
  </x-slot>
  
  <form action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="row">
      <div class="col-12 col-xl-8">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Course Overview') }}</h5>
          </div>
          <div class="card-body pt-0">
            <div class="row g-3">
              <div class="col-12">
                <input type="text" name="title" class="form-control" id="title" placeholder="{{ __('Course Title') }}" required />
              </div>
              <div class="col-12">
                <textarea name="highlights" class="form-control" id="highlights" cols="30" rows="10" placeholder="{{ __('Type course highlights here ...') }}"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Course Description') }}</h5>
          </div>
          <div class="card-body pt-0">
            <div class="row g-3">
              <div class="col-12">
                <textarea name="description" class="form-control" id="description" cols="30" rows="24" placeholder="{{ __('Type course details here ...') }}"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-4">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Course Informations') }}</h5>
          </div>
          <div class="card-body py-0">
            <div class="row g-3">
              <div class="col-12">
                <input type="text" name="course_code" class="form-control" id="title" placeholder="{{ __('Course Code') }}" required />
              </div>
              <div class="col-12">
                <select name="user_id" class="form-control" id="instructor">
                  @forelse ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->firstname }} {{ $user->lastname }}</option>    
                  @empty
                    <option value="">{{ __('-- Instructor --') }}</option>
                  @endforelse
                </select>
              </div>
              <div class="col-6">
                <input type="text" name="regular_price" class="form-control" id="rPrice" placeholder="{{ __('Regular Price') }}" required />
              </div>
              <div class="col-6">
                <input type="text" name="offer_price" class="form-control" id="sPrice" placeholder="{{ __('Sell Price') }}" />
              </div>
              <div class="col-12">
                <input type="text" name="duration" class="form-control" id="duration" placeholder="{{ __('Course Duration') }}" required />
              </div>
              <div class="col-12">
                <input type="text" name="slug" class="form-control" id="slug" placeholder="{{ __('Course Slug') }}" required />
              </div>
              <div class="col-12">
                <select name="difficulty" class="form-control" id="difficulty">
                  <option value="">{{ __('-- Choose Difficulty --') }}</option>
                  <option value="1">{{ __('Beginner') }}</option>
                  <option value="2">{{ __('Intermadiate') }}</option>
                  <option value="3">{{ __('Advanced') }}</option>
                </select>
              </div>
              <div class="col-6">
                <input type="checkbox" name="featured" class="form-check-input align-middle" id="featured" value="1" />
                <label for="featured" class="align-middle ps-2">{{ __('Featured') }}</label>
              </div>
              <div class="col-6">
                <select name="status" class="form-control" id="catStatus">
                  <option value="">{{ __('-- Status --') }}</option>
                  <option value="1">{{ __('Enable') }}</option>
                  <option value="0">{{ __('Disable') }}</option>
                </select>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="row g-3">
              <div class="col-6 d-grid">
                <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary" >
                  <i class="fas fa-arrow-left align-middle"></i>
                  <span class="ps-1">{{ __('Discard') }}</span>
                </a>
              </div>
              <div class="col-6 d-grid">
                <button type="submit" class="btn btn-outline-primary" >
                  <i class="fas fa-plus align-middle"></i>
                  <span class="ps-1">{{ __('Create New') }}</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Course Category') }}</h5>
          </div>
          <div class="card-body pt-0">
            <div class="row g-3">
              <div class="col-12">
                <select name="category_id" class="form-control" id="mainCat">
                  @forelse ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>  
                  @empty
                    <option value="">{{ __('-- Choose One --') }}</option>
                  @endforelse
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Course Tags') }}</h5>
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
        </div>
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Course Thumbnail') }}</h5>
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
    <script>
      var imgInp = document.getElementById("imageInput");
      var dummy = document.getElementById("dummy");
      imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
          dummy.src = URL.createObjectURL(file)
        }
      }
    </script>
  </x-slot>
 
</x-admin-layout>