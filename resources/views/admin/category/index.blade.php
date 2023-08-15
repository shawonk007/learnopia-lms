<x-admin-layout>

  <x-slot name="title">
    {{ __('Manage Categories') }}
  </x-slot>

  <x-slot name="header">
    <div class="d-flex align-items-center justify-content-between">
      <h1 class="h3 mb-3"><strong>{{ __('Course') }}</strong> {{ __('Category') }}</h1>
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
              <th>{{ __('Parent Category') }}</th>
              {{-- <th class="d-none d-xl-table-cell">{{ __('Category Slug') }}</th> --}}
              <th>{{ __('Status') }}</th>
              <th class="d-none d-md-table-cell">{{ __('Date Created') }}</th>
              <th>{{ __('Action') }}</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($cats as $cat)
              <tr>
                <td class="d-none d-xl-table-cell">{{ $loop->iteration }}</td>
                <td>
                  <strong>{{ $cat->title }}</strong>
                </td>
                <td>
                  @if (empty($cat->parent_id))
                    <span>No Parent</span>
                  @else
                    <span>{{ $cat->parent->title }}</span>
                  @endif
                </td>
                {{-- <td class="d-none d-xl-table-cell">{{ $cat->slug }}</td> --}}
                <td>
                  @if ($cat->status === 1)
                    <span class="badge bg-success">Enable</span>
                  @elseif ($cat->status === 0)
                    <span class="badge bg-danger">Disable</span>
                  @else
                    <span class="badge bg-secondary">Pending</span>
                  @endif
                </td>
                <td class="d-none d-md-table-cell">{{ $cat->created_at->diffforhumans() }}</td>
                <td>
                  <form action="" method="post">
                    <a href="{{ route('category.edit', $cat->id) }}" class="btn btn-outline-primary btn-sm">
                      <i class="fas fa-edit"></i>
                    </a>
                    <button type="submit" class="btn btn-outline-danger btn-sm">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="7" class="text-center">
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