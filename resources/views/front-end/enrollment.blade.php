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
      <form action="{{ route('session') }}" method="post" id="payment-form">
        @csrf
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
                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                    <tr>
                      <td>{{ $course->course_code }}</td>
                      <td class="text-end">{{ $course->regular_price }}</td>
                    </tr>
                    <tr>
                      <th>{{ __('Sub-Total') }}</th>
                      {{-- <th class="text-end">{{ $subTotal = number_format($course->regular_price * 1, 2) }}</th> --}}
                      <th class="text-end">{{ $course->regular_price }}</th>
                    </tr>
                    {{-- <tr>
                      <th>{{ __('Tax') }}</th>
                      <th class="text-end">{{ $tax = number_format($course->regular_price * 0.05, 2) }}</th>
                    </tr> --}}
                    <tr>
                      <th>{{ __('Grand Total') }}</th>
                      {{-- <th class="text-end">{{ $total = number_format($subTotal + $tax, 2) }}</th> --}}
                      <th class="text-end">{{ $total = $course->regular_price }}</th>
                      <input type="hidden" name="amount" value="{{ $total }}">
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary d-block w-100" id="purchase-button">
                  {{ __('Purchase Now') }}
                </button>
              </div>
            </div>
            <div class="card mt-4">
              <div class="card-body">
                <div class="row g-3">
                  <div class="col-12">
                    <label for="method">
                      <i class="fab fa-stripe"></i>
                    </label>
                    <input type="radio" name="payment_method" id="method" value="1" />
                  </div>
                  <input type="hidden" name="transaction_id" id="transactionID" />
                  <div class="col-12">
                    <input type="text" name="card_holder" class="form-control" id="card-number" placeholder="Card Holder"  />
                  </div>
                  <div class="col-12">
                    <input type="text" name="card_number" class="form-control" id="card-number" placeholder="Card Number"  />
                  </div>
                  <div class="col-6">
                    <input type="text" class="form-control" id="card-expiry" placeholder="MM/YY"  />
                  </div>
                  <div class="col-6">
                    <input type="text" class="form-control" id="card-cvc" placeholder="CVC" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>

  <x-slot name="script">

    <script src="https://js.stripe.com/v3/"></script>

    <script>
      const stripe = Stripe('pk_test_51NjDwlSD9efIpDnkzJHyxyifgXgCFsfpPtjU4yGIIqbfaV4FELkeR5zuJOAA0v5moJChG6dLzx9jDEoEKHsgjrML009hG558hA');
  
      // document.getElementById('payment-form').addEventListener('submit', function(event) {
      //   // event.preventDefault();
      //   var purchaseButton = document.getElementById('purchase-button');
      //   purchaseButton.disabled = true;
  
      //   stripe.createToken('card', {
      //     number: document.getElementById('card-number').value,
      //     exp_month: document.getElementById('card-expiry').value.split('/')[0],
      //     exp_year: document.getElementById('card-expiry').value.split('/')[1],
      //     cvc: document.getElementById('card-cvc').value
      //   }).then(function(result) {
      //     if (result.error) {
      //       // Handle error
      //       alert(result.error.message);
      //       purchaseButton.disabled = false;
      //     } else {
      //       var tokenInput = document.createElement('input');
      //       tokenInput.setAttribute('type', 'hidden');
      //       tokenInput.setAttribute('name', 'stripeToken');
      //       tokenInput.setAttribute('value', result.token.id);
      //       document.getElementById('payment-form').appendChild(tokenInput);
      //       document.getElementById('payment-form').submit();
      //     }
      //   });
      // });

// Handle form submission
          const form = document.getElementById('payment-form');
          form.addEventListener('submit', async (event) => {
            // event.preventDefault();

            const { token, error } = await stripe.createToken('card', {
              name: document.getElementById('cardholder-name').value,
            });

            if (error) {
              // Handle error
            } else {
              // Send token to server
              fetch('/session', {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': '{{ csrf_token() }}', // Laravel CSRF token
                },
                body: JSON.stringify({ token: token.id }),
              })
              .then(response => response.json())
              .then(data => {
                // Handle server response
              });
            }
          });

    </script>

    <script>
      $(document).ready(function() {
        generateTransactionID();
      });
      function generateTransactionID() {
        var trxID = "TRXID_" + new Date().getTime();
        $("#transactionID").val(trxID);
      }
    </script>

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