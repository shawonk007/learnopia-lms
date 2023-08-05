<x-admin-layout>
  
  <x-slot name="title">
    {{ __('Add New Role') }}
  </x-slot>
  
  <x-slot name="header">
    <h1 class="h3 mb-3"><strong>{{ __('Users') }}</strong> {{ __('Settings') }}</h1>
  </x-slot>
  
  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      <div class="card col-10 col-lg-6">
        <form action="{{ route('roles.store') }}" method="post">
          @csrf
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Create New Role') }}</h5>
          </div>
          <div class="card-body py-0">
            <div class="row g-3">
              <div class="col-12">
                <input type="text" name="title" class="form-control" id="title" placeholder="{{ __('Role Title') }}" value="{{ old('title') }}" required />
              </div>
              <div class="col-12">
                <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="{{ __('Type details here ...') }}">{{ old('description') }}</textarea>
              </div>
              <div class="col-12">
                <input type="text" name="slug" class="form-control" id="slug" placeholder="{{ __('Role Slug') }}" value="{{ old('slug') }}" />
              </div>
              <div class="col-12">
                <select name="status" class="form-control" id="status">
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
                <a href="{{ route('roles.index') }}" class="btn btn-outline-secondary" >
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
    <script>
      $(document).ready(function() {
        $('form').submit(function(e) {
          e.preventDefault();
          $.ajax({
            url: '{{ route('roles.store') }}',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
              console.log(response);
              if (response.success) {
                // Show success message using SweetAlert
                Swal.fire({
                  icon: 'success',
                  title: 'Created',
                  text: response.message,
                  timer: 1500,
                  showConfirmButton: false
                }).then(function() {
                  location.reload();
                });
              } else {
                // Show error message using SweetAlert
                Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: response.message,
                  timer: 1500,
                  showConfirmButton: false
                });
              }
            },
            error: function(xhr, status, error) {
              if (xhr.status === 400) {
                // Bad request error
                Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: 'Bad request. Please check your form data.',
                  timer: 1500,
                  showConfirmButton: false
                });
              } else if (xhr.status === 500) {
                // Internal server error
                Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: 'Internal server error. Please try again later.',
                  timer: 1500,
                  showConfirmButton: false
                });
              } else {
                // Other errors
                console.error(error);
                Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: 'An error occurred while processing the request.',
                  timer: 1500,
                  showConfirmButton: false
                });
              }
            }
          });
        });
      });
    </script>
  </x-slot>
  
</x-admin-layout>