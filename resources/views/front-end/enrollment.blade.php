<x-master-layout>

  <x-slot name="title">
    {{ __('Purchase Course') }}
  </x-slot>

  {{-- <x-slot name="hero"></x-slot> --}}

  <section class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">{{ __('Enroll') }}</h6>
        <h1 class="mb-5">{{ __('Purchase Course') }}</h1>
      </div>
      <div class="row g-5">
        <div class="col-lg-7 col-md-6">
          <div class="card">
            <div class="card-body">
              <h6 class="section-title bg-white text-start text-primary pe-3 mb-4">{{ __('Billing Information') }}</h6>
              <div class="row g-3">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                <div class="col-6">
                  <input type="text" name="firstname" class="form-control" id="" placeholder="First Name" value="{{ Auth::user()->firstname }}" />
                </div>
                <div class="col-6">
                  <input type="text" name="lastname" class="form-control" id="" placeholder="Last Name" value="{{ Auth::user()->lastname }}" />
                </div>
                <div class="col-6">
                  <input type="text" name="email" class="form-control" id="" placeholder="Email Address" value="{{ Auth::user()->email }}" />
                </div>
                <div class="col-6">
                  <input type="tel" name="phone" class="form-control" id="phone" placeholder="{{ __('+88 (01X) XX-XXXXXX') }}" value="{{ Auth::user()->phone }}" required oninput="formatPhoneNumber(this)" maxlength="19" />
                </div>
                <div class="col-4">
                  <select name="gender" class="form-select" id="gender">
                    <option value="">{{ __('-- Gender --') }}</option>
                    <option value="1">{{ __('Male') }}</option>
                    <option value="2">{{ __('Female') }}</option>
                    <option value="3">{{ __('Others') }}</option>
                  </select>
                </div>
                <div class="col-4">
                  <select name="religion" class="form-select" id="religion">
                    <option value="">{{ __('-- Religion --') }}</option>
                    <option value="1">{{ __('Islam') }}</option>
                    <option value="2">{{ __('Christian') }}</option>
                    <option value="3">{{ __('Hinduism') }}</option>
                    <option value="4">{{ __('Buddhists') }}</option>
                    <option value="5">{{ __('Others') }}</option>
                  </select>
                </div>
                <div class="col-4">
                  <select name="marital" class="form-select" id="marital">
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
        <div class="col-lg-5 col-md-6">
          <div class="card">
            <div class="card-body">
              <h6 class="section-title bg-white text-start text-primary pe-3 mb-4">{{ __('Course Information') }}</h6>
              <table class="table">
                <tbody>
                  <tr>
                    <td>{{ $course->course_code }}</td>
                    <td>{{ $course->regular_price }}</td>
                  </tr>
                  <tr>
                    <th>{{ __('Sub-Total') }}</th>
                    <th>{{ number_format($course->regular_price * 1, 2) }}</th>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary d-block w-100">
                {{ __('Purchase Now') }}
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <x-slot name="script">
    <script>
      function formatPhoneNumber(input) {
        let phoneNumber = input.value;
        phoneNumber = phoneNumber.replace(/\D/g, '');
        phoneNumber = phoneNumber.substring(0, 13);
        const countryCode = phoneNumber.substring(0, 2);
        const operator = phoneNumber.substring(2, 5);
        const prefix = phoneNumber.substring(5, 7);
        const lineNumber = phoneNumber.substring(7);
        if (phoneNumber.length > 7) {
            phoneNumber = `+${countryCode} (${operator}) ${prefix}-${lineNumber}`;
        } else if (phoneNumber.length > 5) {
            phoneNumber = `+${countryCode} (${operator}) ${prefix}`;
        } else if (phoneNumber.length > 2) {
            phoneNumber = `+${countryCode} (${operator})`;
        } else {
            phoneNumber = `+${countryCode}`;
        }
        input.value = phoneNumber;
      }
    </script>
  </x-slot>

</x-master-layout>