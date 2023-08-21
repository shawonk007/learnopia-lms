<x-admin-layout>

  <x-slot name="title">
    {{ __('Manage Topics') }}
  </x-slot>
  
  <x-slot name="header">
    <div class="d-flex align-items-center justify-content-between">
      <h1 class="h3 mb-3"><strong>{{ __('Topics') }}</strong> {{ __('Manager') }}</h1>
      <a href="{{ route('topics.create') }}" class="btn btn-outline-primary mb-4" >
        <i class="align-middle me-1" data-feather="plus"></i>
        <span class="ps-1">{{ __('Add New') }}</span>
      </a>
    </div>
  </x-slot>

  <section class="row">
    <div class="col-12">
      <div class="card flex-fill">
        <div class="card-header">              
          <h5 class="card-title mb-0">{{ __('Topics DataTable') }}</h5>
        </div>
        <table class="table table-hover my-0" id="myTable">
          <thead>
            <tr>
              <th class="d-none d-xl-table-cell">{{ __('SL') }}</th>
              <th>{{ __('Topic Title') }}</th>
              <th class="d-none d-xl-table-cell">{{ __('Topic Slug') }}</th>
              <th>{{ __('Status') }}</th>
              <th class="d-none d-md-table-cell">{{ __('Date Created') }}</th>
              <th>{{ __('Action') }}</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($topics as $topic)
              <tr>
                <td class="d-none d-xl-table-cell">{{ $loop->iteration }}</td>
                <td>
                  <strong>{{ $topic->title }}</strong>
                </td>
                <td class="d-none d-xl-table-cell">{{ $topic->slug }}</td>
                <td>
                  @if ($topic->status === 1)
                    <span class="badge bg-success">Enable</span>
                  @elseif ($topic->status === 0)
                    <span class="badge bg-danger">Disable</span>
                  @else
                    <span class="badge bg-secondary">Pending</span>
                  @endif
                </td>
                <td class="d-none d-md-table-cell">{{ $topic->created_at->diffforhumans() }}</td>
                <td width="90px">
                  <form action="{{ route("topics.destroy", $topic->id) }}" method="post">
                    @csrf
                    @method("delete")
                    <a href="{{ route('topics.edit', $topic->id) }}" class="btn btn-outline-primary btn-sm">
                      <i class="fas fa-edit"></i>
                    </a>
                    <button type="button" class="btn btn-outline-danger btn-sm" onclick="deleteRole(event, this)">
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
  </section>

  <x-slot name="script">
    {{-- @include('partials.admin.flash') --}}
    <script>
      function deleteRole(e, t) {
        e.preventDefault();
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            @if(session('success'))
              Swal.fire({
                title: 'Deleted',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
              });
            @endif
          }
          @if(session('error'))
            Swal.fire({
              title: 'Error',
              text: '{{ session('error') }}',
              icon: 'error',
              confirmButtonText: 'OK'
            });
          @endif
        });
      }
    </script>
  </x-slot>

</x-admin-layout>