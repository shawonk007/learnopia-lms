<x-admin-layout>
  <x-slot name="title">
    {{ __('Manage Users') }}
  </x-slot>
  <x-slot name="header">
    <div class="d-flex align-items-center justify-content-between">
      <h1 class="h3 mb-3">{{ __('Users & Members') }}</h1>
      <a href="{{ route('users.create') }}" class="btn btn-outline-primary mb-4" >
        <i class="align-middle me-1" data-feather="plus"></i>
        <span class="ps-1">{{ __('Add New') }}</span>
      </a>
    </div>
  </x-slot>

  <div class="row">
    <div class="col-12">
      <div class="card flex-fill">
        <div class="card-header">              
          <h5 class="card-title mb-0">{{ __('Users DataTable') }}</h5>
        </div>
        <table class="table table-hover my-0">
          <thead>
            <tr>
              <th class="d-none d-xl-table-cell">{{ __('SL') }}</th>
              <th>{{ __('Name of Users') }}</th>
              <th class="d-none d-xl-table-cell">{{ __('Email Address') }}</th>
              <th>{{ __('User Role') }}</th>
              <th class="d-none d-md-table-cell">{{ __('Status') }}</th>
              <th class="d-none d-md-table-cell">{{ __('Date Created') }}</th>
              <th>{{ __('Action') }}</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($users as $user)
              <tr>
                <td class="d-none d-xl-table-cell">{{ $loop->iteration }}</td>
                <td>
                  <strong>{{ $user->firstname }} {{ $user->lastname }}</strong>
                </td>
                <td class="d-none d-xl-table-cell">{{ $user->email }}</td>
                <td><span class="badge bg-info">{{ $user->role->title }}</span></td>
                <td class="d-none d-md-table-cell">
                  @if ($user->status === 1)
                    <span class="badge bg-success">{{ __('Enable') }}</span>
                  @elseif($user->status === 0)
                    <span class="badge bg-danger">{{ __('Disable') }}</span>
                  @else  
                    <span class="badge bg-secondary">{{ __('Pending') }}</span>
                  @endif
                </td>
                <td class="d-none d-md-table-cell">{{ $user->created_at->diffforhumans() }}</td>
                <td>
                  <form action="" method="post">
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-primary btn-sm">
                      <i class="fas fa-edit"></i>
                    </a>
                    <button type="submit" class="btn btn-outline-danger btn-sm">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </form>
                </td>
              </tr>
            @empty
                
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