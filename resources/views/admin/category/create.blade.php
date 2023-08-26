<x-admin-layout>

  <x-slot name="title">
    {{ __('Add New Category') }}
  </x-slot>

  <x-slot name="header">
    <h1 class="h3 mb-3"><strong>{{ __('Course') }}</strong> {{ __('Category') }}</h1>
  </x-slot>

  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      <div class="card col-10 col-lg-6">
        <form action="{{ route('category.store') }}" method="post">
          @csrf
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Create New Category') }}</h5>
          </div>
          <div class="card-body py-0">
            <div class="row g-3">
              <div class="col-12">
                <input type="text" name="title" class="form-control" id="catTitle" placeholder="{{ __('Category Title') }}" required />
              </div>
              <div class="col-12">
                <textarea name="description" class="form-control" id="catDesc" cols="30" rows="10" placeholder="{{ __('Type details here ...') }}"></textarea>
              </div>
              <div class="col-12">
                <input type="text" name="slug" class="form-control" id="catSlug" placeholder="{{ __('Category Slug') }}" />
              </div>
              <div class="col-6">
                <select name="main_cat" class="form-control" id="catMain">
                  <option value="">{{ __('-- Main Category --') }}</option>
                  @foreach ($mainCat as $main)
                    <option value="{{ $main->id }}">{{ $main->title }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-6">
                <select name="sub_cat" class="form-control" id="catSub">
                  <option value="">{{ __('-- Sub Category --') }}</option>
                </select>
              </div>
              <div class="col-6">
                <input type="checkbox" name="featured" class="form-check-input align-middle" id="catFeatured" value="1" />
                <label for="catFeatured" class="align-middle ps-2">{{ __('Featured Category') }}</label>
              </div>
              <div class="col-6">
                <select name="status" class="form-control" id="catStatus">
                  <option value="">{{ __('-- Choose Status --') }}</option>
                  <option value="1">{{ __('Enable') }}</option>
                  <option value="0">{{ __('Disable') }}</option>
                </select>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-6 d-grid">
                <a href="{{ route('category.index') }}" class="btn btn-outline-secondary" >
                  <i class="align-middle me-1" data-feather="arrow-left"></i>
                  <span class="ps-1">{{ __('Discard') }}</span>
                </a>
              </div>
              <div class="col-6 d-grid">
                <button type="submit" class="btn btn-outline-primary" >
                  <i class="align-middle me-1" data-feather="plus"></i>
                  <span class="ps-1">{{ __('Create New') }}</span>
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <x-slot name="script">
    @include('partials.admin.flash')
  </x-slot>

</x-admin-layout>