<x-admin-layout>

  <x-slot name="title">
    {{ __('Edit User') }}
  </x-slot>

  <x-slot name="header">
    <h1 class="h3 mb-3">{{ __('Users & Members') }}</h1>
  </x-slot>

  <form action="{{ route('users.update', $user->id) }}" method="post">
    @csrf
    @method('put')
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
                  <input type="text" name="firstname" class="form-control" id="fName" placeholder="{{ __('First Name') }}" value="{{ $user->firstname }}" required />
                  <input type="text" name="lastname" class="form-control" id="lName" placeholder="{{ __('Last Name') }}" value="{{ $user->lastname }}" required />
                </div>
              </div>
              <div class="col-6">
                <input type="text" name="username" class="form-control" id="uName" placeholder="{{ __('Username') }}" value="{{ $user->username }}" required />
              </div>
              <div class="col-6">
                <input type="date" name="date_of_birth" class="form-control" id="dob" value="{{ $user->date_of_birth }}" />
              </div>
              <div class="col-12">
                <input type="email" name="email" class="form-control" id="email" placeholder="{{ __('Primary Email') }}" value="{{ $user->email }}" required />
              </div>
              <div class="col-12">
                <input type="email" name="email_alt" class="form-control" id="emailAlt" placeholder="{{ __('Secondary Email') }}" value="{{ $user->email_alt }}" />
              </div>
              <div class="col-6">
                <input type="tel" name="phone" class="form-control" id="phone" placeholder="{{ __('Primary Phone') }}" value="{{ $user->phone }}" required oninput="formatPhoneNumber(this)" maxlength="19" />
              </div>
              <div class="col-6">
                <input type="tel" name="phone_alt" class="form-control" id="phoneAlt" placeholder="{{ __('Secondary Phone') }}" value="{{ $user->phone_alt }}" oninput="formatPhoneNumber(this)" maxlength="19" />
              </div>
              <div class="col-6">
                <select name="role_id" class="form-control" id="userRole">
                  <option value="">{{ __('-- User Role --') }}</option>
                  @foreach ($roles as $role)
                    <option value="{{ $role->id }}" {{ $role->id === $user->role_id ? 'selected' : '' }} >{{ $role->title }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-6">
                <select name="status" class="form-control" id="roleStats">
                  <option value="">{{ __('-- User Status --') }}</option>
                  <option value="1" {{ $user->status === 1 ? 'selected' : '' }} >{{ __('Enable') }}</option>
                  <option value="0" {{ $user->status === 0 ? 'selected' : '' }} >{{ __('Disable') }}</option>
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
                <button type="submit" class="btn btn-outline-success" >
                  <i class="align-middle me-1" data-feather="check"></i>
                  <span class="ps-1">{{ __('Update') }}</span>
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
                </select>
              </div>
              <div class="col-4">
                <select name="religion" class="form-control" id="religion">
                  <option value="">{{ __('-- Religion --') }}</option>
                </select>
              </div>
              <div class="col-4">
                <select name="marital" class="form-control" id="marital">
                  <option value="">{{ __('-- Marital Status --') }}</option>
                </select>
              </div>
              <div class="col-12">
                <input type="text" name="address_one" class="form-control" id="addressOne" placeholder="{{ __('Address Line 01') }}" />
              </div>
              <div class="col-12">
                <input type="text" name="address_two" class="form-control" id="addressTwo" placeholder="{{ __('Address Line 02') }}" />
              </div>
              <div class="col-4">
                <select name="division" class="form-control" id="division">
                  <option value="">{{ __('-- Division --') }}</option>
                </select>
              </div>
              <div class="col-4">
                <select name="district" class="form-control" id="district">
                  <option value="">{{ __('-- District --') }}</option>
                </select>
              </div>
              <div class="col-4">
                <input type="text" name="postal" class="form-control" id="postalCode" placeholder="{{ __('Postal Code') }}" />
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