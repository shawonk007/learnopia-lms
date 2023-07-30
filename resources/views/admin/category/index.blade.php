<x-admin-layout>
  <x-slot name="title">
    {{ __('Manage Roles') }}
  </x-slot>
  <x-slot name="header">
    <div class="d-flex align-items-center justify-content-between">
      <h1 class="h3 mb-3">{{ __('Course Category') }}</h1>
      <a href="{{ route('category.create') }}" class="btn btn-outline-primary mb-4" >
        <i class="align-middle me-1" data-feather="plus"></i>
        <span class="ps-1">{{ __('Add New') }}</span>
      </a>
    </div>
  </x-slot>

  <div class="row">
    <div class="col-12">
      <div class="card flex-fill">
        <div class="card-header">              
          <h5 class="card-title mb-0">{{ __('Category DataTable') }}</h5>
        </div>
        <table class="table table-hover my-0">
          <thead>
            <tr>
              <th class="d-none d-xl-table-cell">{{ __('SL') }}</th>
              <th>{{ __('Category Title') }}</th>
              <th class="d-none d-xl-table-cell">{{ __('Category Slug') }}</th>
              <th>{{ __('Status') }}</th>
              <th class="d-none d-md-table-cell">{{ __('Date Created') }}</th>
              <th>{{ __('Action') }}</th>
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