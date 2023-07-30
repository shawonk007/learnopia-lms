<x-admin-layout>
  <x-slot name="title">
    {{ __('Add New Role') }}
  </x-slot>
  <x-slot name="header">
    <h1 class="h3 mb-3">Users Settings</h1>
  </x-slot>
  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      <div class="card col-10 col-lg-6">
        <form action="" method="post">
          <div class="card-header">
            <h5 class="card-title mb-0">Create New Role</h5>
          </div>
          <div class="card-body py-0">
            <div class="row g-3">
              <div class="col-12">
                <input type="text" name="title" class="form-control" id="roleTitle" placeholder="Role Title" required />
              </div>
              <div class="col-12">
                <textarea name="description" class="form-control" id="roelDesc" cols="30" rows="10" placeholder="Type details here ..."></textarea>
              </div>
              <div class="col-12">
                <input type="text" name="slug" class="form-control" id="roleSlug" placeholder="Role Slug" />
              </div>
              <div class="col-12">
                <select name="status" class="form-control" id="roleStats">
                  <option value="">-- Choose Status --</option>
                </select>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-6 d-grid">
                <a href="{{ route('roles.index') }}" class="btn btn-outline-secondary" >
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
        </form>
      </div>
    </div>
  </div>
</x-admin-layout>