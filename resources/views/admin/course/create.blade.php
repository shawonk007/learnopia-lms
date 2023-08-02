<x-admin-layout>

  <x-slot name="title">
    {{ __('Add New Course') }}
  </x-slot>

  <x-slot name="header">
    <h1 class="h3 mb-3">{{('Course Catalogue')}}</h1>
  </x-slot>
  
  <form action="" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-12 col-xl-8">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Create New Course') }}</h5>
          </div>
          <div class="card-body pt-0">
            <div class="row g-3">
              <div class="col-12">
                <input type="text" name="title" class="form-control" id="title" placeholder="{{ __('Course Title') }}" required />
              </div>
              <div class="col-12">
                <textarea name="description" class="form-control" id="description" cols="30" rows="24" placeholder="{{ __('Type course details here ...') }}"></textarea>
              </div>
              <div class="col-12">
                <textarea name="highlights" class="form-control" id="highlights" cols="30" rows="10" placeholder="{{ __('Type course highlights here ...') }}"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-4">
        <div class="card">
          <div class="card-body pb-0">
            <div class="row g-3">
              <div class="col-12">
                <input type="text" name="title" class="form-control" id="title" placeholder="{{ __('Course Code') }}" required />
              </div>
              <div class="col-12">
                <select name="status" class="form-control" id="catStatus">
                  <option value="">{{ __('-- Instructor --') }}</option>
                </select>
              </div>
              <div class="col-6">
                <input type="text" name="regular" class="form-control" id="rPrice" placeholder="{{ __('Regular Price') }}" required />
              </div>
              <div class="col-6">
                <input type="text" name="offer" class="form-control" id="sPrice" placeholder="{{ __('Sell Price') }}" />
              </div>
              <div class="col-6">
                <input type="checkbox" name="featured" class="form-check-input align-middle" id="featured" value="1" />
                <label for="featured" class="align-middle ps-2">{{ __('Featured') }}</label>
              </div>
              <div class="col-6">
                <select name="status" class="form-control" id="catStatus">
                  <option value="">{{ __('-- Status --') }}</option>
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
          <div class="card-body">
            <div class="row g-3">
              <div class="col-12">
                <select name="main_category" class="form-control" id="mainCat">
                  <option value="">{{ __('-- Main Category --') }}</option>
                </select>
              </div>
              <div class="col-12">
                <select name="sub_category" class="form-control" id="subCat">
                  <option value="">{{ __('-- Sub Category --') }}</option>
                </select>
              </div>
              <div class="col-12">
                <select name="course_type" class="form-control" id="courseType">
                  <option value="">{{ __('-- Course Type --') }}</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="row g-3">
              <div class="col-12">
                <select name="status" class="form-control" id="catStatus" >
                  <option value="">{{ __('-- Instructor --') }}</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
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
                  <input type="file" name="avatar" class="d-none" id="imageInput" required accept="image/*;capture=camera" />
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
 
</x-admin-layout>