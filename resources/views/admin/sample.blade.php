<x-admin-layout>
  <x-slot name="title">
    {{ __('Sample') }}
  </x-slot>
  <x-slot name="header">
    <div class="d-flex align-items-center justify-content-between">
      <h1 class="h3 mb-3">{{ __('Sample') }}</h1>
      <a href="{{ route('roles.create') }}" class="btn btn-outline-primary mb-4" >
        <i class="align-middle me-1" data-feather="plus"></i>
        <span class="ps-1">{{ __('Add New') }}</span>
      </a>
    </div>
  </x-slot>
  
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">{{ __('Empty card') }}</h5>
        </div>
        <div class="card-body">
        </div>
      </div>
    </div>
  </div> 
 
</x-admin-layout>