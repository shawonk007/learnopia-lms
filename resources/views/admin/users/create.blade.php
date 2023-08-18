<x-admin-layout>

  <x-slot name="title">
    {{ __('Add New User') }}
  </x-slot>

  <x-slot name="header">
    <h1 class="h3 mb-3">{{ __('Users & Members') }}</h1>
  </x-slot>

  <form action="{{ route('users.store') }}" method="post">
    @csrf
    <div class="row g-3">
      <div class="col-12 col-xl-5">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">{{ __('Create New User') }}</h5>
          </div>
          <div class="card-body py-0">
            <div class="row g-3">
              <div class="col-6">    
                <label for="imageInput" class="d-flex flex-column align-items-center justify-content-center bg-light h-100" style="border: 3px solid lightgray; border-style: dashed;">
                  <div class="d-flex flex-column align-items-center justify-content-center py-1">
                    <h1 class="h1 mb-0"><i class="align-middle" data-feather="upload-cloud"></i></h1>
                    <h6 class="my-1 text-dark text-center"><strong>{{ __('Click to upload') }}</strong></h6>
                    <p class="mb-2 text-dark text-center" style="font-size: 0.75rem;">
                      <span>{{ __('PNG, JPG or JPEG') }}</span><br />
                      <span>{{ __('(MAX. UPLOAD 2MB)') }}</span><br/>
                      <span>{{ __('(MIN. RES. 300X300)') }}</span>
                    </p>
                  </div>
                  <input type="file" name="avatar" class="d-none" id="imageInput" accept="image/*;capture=camera" />
                </label>
              </div>
              <div class="col-6">
                <img id="dummy" src="{{ asset('img/dummy/square.jpg') }}" class="w-100" alt="" />
              </div>
              <div class="col-12">
                <div class="input-group">
                  <input type="text" name="firstname" class="form-control" id="fName" placeholder="{{ __('First Name') }}" required />
                  <input type="text" name="lastname" class="form-control" id="lName" placeholder="{{ __('Last Name') }}" required />
                </div>
              </div>
              <div class="col-6">
                <input type="text" name="username" class="form-control" id="uName" placeholder="{{ __('Username') }}" required />
              </div>
              <div class="col-6">
                <input type="date" name="dob" class="form-control" id="dob" />
              </div>
              <div class="col-12">
                <input type="email" name="email" class="form-control" id="email" placeholder="{{ __('Primary Email') }}" required />
              </div>
              <div class="col-12">
                <input type="tel" name="phone" class="form-control" id="phone" placeholder="{{ __('Primary Phone') }}" required oninput="formatPhoneNumber(this)" maxlength="19" />
              </div>
              <div class="col-6">
                <input type="password" name="password" class="form-control" id="pass" placeholder="{{ __('Password') }}" required />
              </div>
              <div class="col-6">
                <input type="password" name="c_password" class="form-control" id="cPass" placeholder="{{ __('Confirm Password') }}" required />
              </div>
              <div class="col-6">
                <select name="role_id" class="form-control" id="userRole">
                  @forelse ($roles as $roleId => $roleTitle)
                    <option value="{{ $roleId }}">{{ $roleTitle }}</option>
                  @empty
                    <option value="" selected>{{ __('-- User Role --') }}</option>  
                  @endforelse
                </select>
              </div>
              <div class="col-6">
                <select name="status" class="form-control" id="roleStats">
                  <option value="">{{ __('-- User Status --') }}</option>
                  <option value="1">{{ __('Enable') }}</option>
                  <option value="0">{{ __('Disable') }}</option>
                </select>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-6 d-grid">
                <a href="{{ route('users.index') }}" class="btn btn-outline-secondary" >
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
        </div>
      </div>
      <div class="col-12 col-xl-7">
        <div class="card">
          <div class="card-body">
            <div class="row g-3">
              <div class="col-12">
                <textarea name="biography" class="form-control" id="roelDesc" cols="30" rows="10" placeholder="{{ __('Type details here ...') }}"></textarea>
              </div>
              <div class="col-4">
                <select name="gender" class="form-control" id="gender">
                  <option value="">{{ __('-- Gender --') }}</option>
                  <option value="1">{{ __('Male') }}</option>
                  <option value="2">{{ __('Female') }}</option>
                  <option value="3">{{ __('Others') }}</option>
                </select>
              </div>
              <div class="col-4">
                <select name="religion" class="form-control" id="religion">
                  <option value="">{{ __('-- Religion --') }}</option>
                  <option value="1">{{ __('Islam') }}</option>
                  <option value="2">{{ __('Christian') }}</option>
                  <option value="3">{{ __('Hinduism') }}</option>
                  <option value="4">{{ __('Buddhists') }}</option>
                  <option value="5">{{ __('Others') }}</option>
                </select>
              </div>
              <div class="col-4">
                <select name="marital" class="form-control" id="marital">
                  <option value="">{{ __('-- Marital Status --') }}</option>
                  <option value="1">{{ __('Married') }}</option>
                  <option value="2">{{ __('Unmarried') }}</option>
                  <option value="3">{{ __('Divorced') }}</option>
                  <option value="4">{{ __('Widowed') }}</option>
                  <option value="5">{{ __('Separeted') }}</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

  <x-slot name="script">
    
    @include('partials.admin.flash')

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