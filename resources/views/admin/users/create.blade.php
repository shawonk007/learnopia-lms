<x-admin-layout>
  <x-slot name="title">
    {{ __('Add New User') }}
  </x-slot>
  <x-slot name="header">
    <h1 class="h3 mb-3">Users & Members</h1>
  </x-slot>
  <form action="" method="post">
    <div class="row g-3">
      <div class="col-12 col-xl-5">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Create New User</h5>
          </div>
          <div class="card-body py-0">
            <div class="row g-3">
              <div class="col-12">
                <div class="input-group">
                  <input type="text" name="firstname" class="form-control" id="fName" placeholder="First Name" required />
                  <input type="text" name="lastname" class="form-control" id="lName" placeholder="Last Name" required />
                </div>
              </div>
              <div class="col-6">
                <input type="text" name="username" class="form-control" id="uName" placeholder="Username" required />
              </div>
              <div class="col-6">
                <input type="date" name="dob" class="form-control" id="dob" />
              </div>
              <div class="col-12">
                <input type="email" name="email" class="form-control" id="email" placeholder="Primary Email" required />
              </div>
              <div class="col-12">
                <input type="email" name="email_alt" class="form-control" id="emailAlt" placeholder="Secondary Email" />
              </div>
              <div class="col-6">
                <input type="tel" name="phone" class="form-control" id="phone" placeholder="Primary Phone" required />
              </div>
              <div class="col-6">
                <input type="tel" name="phone_alt" class="form-control" id="phoneAlt" placeholder="Secondary Phone" />
              </div>
              <div class="col-6">
                <select name="role" class="form-control" id="userRole">
                  <option value="">-- User Role --</option>
                </select>
              </div>
              <div class="col-6">
                <select name="status" class="form-control" id="roleStats">
                  <option value="">-- User Status --</option>
                </select>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-6 d-grid">
                <a href="{{ route('users.index') }}" class="btn btn-outline-secondary" >
                  <i class="align-middle me-1" data-feather="arrow-left"></i>
                  <span class="ps-1">Discard</span>
                </a>
              </div>
              <div class="col-6 d-grid">
                <button type="submit" class="btn btn-outline-primary" >
                  <i class="align-middle me-1" data-feather="check"></i>
                  <span class="ps-1">Create New</span>
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
                <textarea name="description" class="form-control" id="roelDesc" cols="30" rows="10" placeholder="Type details here ..."></textarea>
              </div>
              <div class="col-12">
                <input type="text" name="slug" class="form-control" id="roleSlug" placeholder="Role Slug" />
              </div>
              <div class="col-12">
                <select name="status" class="form-control" id="roleStats">
                  <option value="">-- Choose One --</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</x-admin-layout>