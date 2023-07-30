<x-admin-layout>
  <x-slot name="title">
    {{ __('Manage Roles') }}
  </x-slot>
  <x-slot name="header">
    <div class="d-flex align-items-center justify-content-between">
      <h1 class="h3 mb-3">Users Settings</h1>
      <a href="{{ route('roles.create') }}" class="btn btn-outline-primary mb-4" >
        <i class="align-middle me-1" data-feather="plus"></i>
        <span class="ps-1">Add New</span>
      </a>
    </div>
  </x-slot>
  {{-- 
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">Empty card</h5>
        </div>
        <div class="card-body">
        </div>
      </div>
    </div>
  </div> 
  --}}

  <div class="row">
    <div class="col-12">
      <div class="card flex-fill">
        <div class="card-header">              
          <h5 class="card-title mb-0">Latest Projects</h5>
        </div>
        <table class="table table-hover my-0">
          <thead>
            <tr>
              <th class="d-none d-xl-table-cell">SL</th>
              <th>Role Title</th>
              <th class="d-none d-xl-table-cell">Role Slug</th>
              <th>Status</th>
              <th class="d-none d-md-table-cell">Date Created</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="d-none d-xl-table-cell">01.</td>
              <td>
                <strong>Super Admin</strong>
              </td>
              <td class="d-none d-xl-table-cell">31/06/2021</td>
              <td><span class="badge bg-success">Done</span></td>
              <td class="d-none d-md-table-cell">Vanessa Tucker</td>
              <td>
                <form action="" method="post">
                  <a href="javascript:void(0)" class="btn btn-outline-primary btn-sm">
                    <i class="align-middle" data-feather="edit"></i>
                  </a>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-admin-layout>