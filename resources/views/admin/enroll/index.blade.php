<x-admin-layout>
  <x-slot name="title">
    {{ __('Enrolled Courses') }}
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
        {{-- <div class="card-body">
        </div> --}}
        <table class="table table-hover my-0" id="myTable">
            <thead>
              <tr>
                <th class="d-none d-xl-table-cell">{{ __('SL') }}</th>
                <th>{{ __('Enrolled Student') }}</th>
                <th class="d-none d-xl-table-cell">{{ __('Enrolled Course') }}</th>
                <th>{{ __('Status') }}</th>
                <th class="d-none d-md-table-cell">{{ __('Date Enrolled') }}</th>
                <th>{{ __('Action') }}</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($enrollments as $enrollment)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $enrollment->user->firstname . ' ' . $enrollment->user->lastname }}</td>
                  <td>{{ $enrollment->course->course_code }}</td>
                  <td>{{ $enrollment->status === 1 ? 'On-Going' : 'Completed' }}</td>
                  <td>{{ $enrollment->created_at->diffforhumans() }}</td>
                  <td width="90px" class="d-flex">
                    <a href="javascript:void(0)" class="btn btn-outline-primary btn-sm me-1">
                      <i class="fas fa-edit"></i>
                    </a>
                    <form action="javascript:void(0)" method="post">
                      @csrf
                      @method("delete")
                      <button type="button" class="btn btn-outline-danger btn-sm" onclick="deleteRole(event, this)">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </form>
                  </td>
                </tr>    
              @empty
                <td colspan="6">{{ __('No Data Found') }}</td>
              @endforelse
            </tbody>
          </table>
      </div>
    </div>
  </div> 
 
</x-admin-layout>