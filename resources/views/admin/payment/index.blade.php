<x-admin-layout>
  <x-slot name="title">
    {{ __('Sample') }}
  </x-slot>
  <x-slot name="header">
    <div class="d-flex align-items-center justify-content-between">
      <h1 class="h3 mb-3">{{ __('Sample') }}</h1>
      {{-- <a href="{{ route('roles.create') }}" class="btn btn-outline-primary mb-4" >
        <i class="align-middle me-1" data-feather="plus"></i>
        <span class="ps-1">{{ __('Add New') }}</span>
      </a> --}}
    </div>
  </x-slot>
  
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">{{ __('Empty card') }}</h5>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover my-0" id="myTable">
            <thead>
              <tr>
                <th class="d-none d-xl-table-cell">{{ __('SL') }}</th>
                <th>{{ __('Payee Name') }}</th>
                <th class="d-none d-xl-table-cell">{{ __('Enrolled') }}</th>
                <th>{{ __('Status') }}</th>
                <th class="d-none d-md-table-cell">{{ __('Date Created') }}</th>
                <th>{{ __('Action') }}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="d-none d-xl-table-cell">1</td>
                <td>
                  <strong>Shawon Khan</strong>
                </td>
                <td class="d-none d-xl-table-cell">Course 001</td>
                <td>Paid</td>
                <td class="d-none d-md-table-cell">2 minutes ago</td>
                <td width="90px" class="d-flex">
                  <a href="javascript:void(0)" class="btn btn-outline-primary btn-sm me-1">
                    <i class="fas fa-edit"></i>
                  </a>
                  <form action="" method="post">
                    @csrf
                    @method("delete")
                    <button type="button" class="btn btn-outline-danger btn-sm" onclick="deleteRole(event, this)">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </form>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div> 
 
</x-admin-layout>