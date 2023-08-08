<x-admin-layout>

  <x-slot name="title">
    {{ __('Manage Roles') }}
  </x-slot>
  
  <x-slot name="header">
    <div class="d-flex align-items-center justify-content-between">
      <h1 class="h3 mb-3"><strong>{{ __('Users') }}</strong> {{ __('Settings') }}</h1>
      <a href="{{ route('roles.create') }}" class="btn btn-outline-primary mb-4" >
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
              <th>{{ __('Role Title') }}</th>
              <th class="d-none d-xl-table-cell">{{ __('Role Slug') }}</th>
              <th>{{ __('Status') }}</th>
              <th class="d-none d-md-table-cell">{{ __('Date Created') }}</th>
              <th>{{ __('Action') }}</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($roles as $k => $role)
              <tr>
                <td class="d-none d-xl-table-cell">{{ $k + 1 }}</td>
                <td>
                  <strong>{{ $role->title }}</strong>
                </td>
                <td class="d-none d-xl-table-cell">{{ $role->slug }}</td>
                <td>
                  @if ($role->status === 1)
                    <span class="badge bg-success">Enable</span>
                  @elseif ($role->status === 0)
                    <span class="badge bg-danger">Disable</span>
                  @else
                    <span class="badge bg-secondary">Pending</span>
                  @endif
                </td>
                <td class="d-none d-md-table-cell">{{ $role->created_at->diffforhumans() }}</td>
                <td width="90px">
                  <form action="{{ route("roles.destroy", $role->id) }}" method="post">
                    @csrf
                    @method("delete")
                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-outline-primary btn-sm">
                      <i class="fas fa-edit"></i>
                    </a>
                    <button type="button" class="btn btn-outline-danger btn-sm" onclick="deleteRole({{ $role->id }})">
                      <i class="fas fa-trash-alt"></i>
                  </button>
                  </form>
                </td>
              </tr>
            @empty
            <tr>
              <td colspan="6" class="text-center">
                No data found
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <x-slot name="script">
    @include('partials.admin.flash')
  </x-slot>

</x-admin-layout>