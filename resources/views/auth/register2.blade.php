<x-auth-layout>
  <x-slot name="title">
    {{ __('Login') }}
  </x-slot>

  <x-slot name="header">
    <h1 class="h2">Get started</h1>
	<p class="lead">Start creating the best possible user experience for you customers.</p>
  </x-slot>

  <div class="card">
    <div class="card-body">
      <div class="m-sm-4">
        <form action="" method="POST" >
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name" />
          </div>
          <div class="mb-3">
            <label class="form-label">Company</label>
            <input class="form-control form-control-lg" type="text" name="company" placeholder="Enter your company name" />
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" />
          </div>
          <div class="text-center mt-3">
            <button type="submit" class="btn btn-lg btn-primary">Sign up</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-auth-layout>