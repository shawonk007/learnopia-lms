<aside id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="javascript:void(0)">
      <span class="align-middle">{{ config('app.name', 'AdminKit') }}</span>
    </a>
    <ul class="sidebar-nav">
      <li class="sidebar-item active">
        <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-gauge-high align-middle"></i> <span class="align-middle">{{ __('Dashboard') }}</span>
        </a>
        {{-- <a class="sidebar-link" href="{{
          Auth::user()->role->slug === 'super-admin' ? route('super.dashboard') :
          (Auth::user()->role->slug === 'administrator' ? route('admin.dashboard') :
          (Auth::user()->role->slug === 'instructor' ? route('instructor.dashboard') :
          (Auth::user()->role->slug === 'student' ? route('student.dashboard') : '')
          )) }}">
            <i class="fas fa-gauge-high align-middle"></i> <span class="align-middle">{{ __('Dashboard') }}</span>
        </a> --}}
      </li>
      <li class="sidebar-header">{{ __('Course Management') }}</li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('courses.index') }}">
          <i class="fas fa-graduation-cap align-middle"></i> <span class="align-middle">{{ __('Manage Courses') }}</span>
        </a>
        {{-- <a class="sidebar-link" href="{{
          Auth::user()->role->slug === 'super-admin' ? route('courses.index') :
          (Auth::user()->role->slug === 'administrator' ? route('admin.courses.index') : route('instructor.courses.index')) }}">
          <i class="fas fa-graduation-cap align-middle"></i> <span class="align-middle">{{ __('Manage Courses') }}</span>
        </a> --}}
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('lessons.index') }}">
          <i class="fas fa-chalkboard-user align-middle"></i> <span class="align-middle">{{ __('Manage Lessons') }}</span>
        </a>
      </li>
      {{-- <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('category.index') }}">
          <i class="fas fa-code-branch align-middle pe-1"></i> <span class="align-middle">{{ __('Category') }}</span>
        </a>
      </li> --}}
      {{-- @if (Auth::check() && (Auth::user()->role->slug === 'super-admin' || Auth::user()->role->slug === 'administrator')) --}}
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('category.index') }}">
            <i class="fas fa-code-branch align-middle pe-1"></i> <span class="align-middle">{{ __('Category') }}</span>
          </a>
        </li>
      {{-- @endif --}}
      {{-- @if (Auth::check() && (Auth::user()->role->slug === 'super-admin' || Auth::user()->role->slug === 'administrator')) --}}
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('topics.index') }}">
            <i class="fas fa-tags align-middle"></i> <span class="align-middle">{{ __('Topics Manager') }}</span>
          </a>
        </li>
      {{-- @endif --}}
      <li class="sidebar-header">{{ __('Enroll Management') }}</li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('enrollments.index') }}">
          <i class="fas fa-user-shield align-middle"></i> <span class="align-middle">{{ __('Enrolled Courses') }}</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('payments.index') }}">
          <i class="fas fa-user-shield align-middle"></i> <span class="align-middle">{{ __('Manage Payments') }}</span>
        </a>
      </li>
      {{-- @if (Auth::check() && (Auth::user()->role->slug === 'super-admin' || Auth::user()->role->slug === 'administrator')) --}}
        <li class="sidebar-header">{{ __('Users Management') }}</li>
      {{-- @endif --}}
      {{-- @if (Auth::check() && (Auth::user()->role->slug === 'super-admin' || Auth::user()->role->slug === 'administrator')) --}}
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('users.index') }}">
            <i class="fas fa-users align-middle"></i> <span class="align-middle">{{ __('Manage Users') }}</span>
          </a>
          {{-- <a class="sidebar-link" href="{{ Auth::user()->role->slug === 'super-admin' ? route('users.index') : route('admin.users.index') }}">
            <i class="fas fa-users align-middle"></i> <span class="align-middle">{{ __('Manage Users') }}</span>
          </a> --}}
        </li>
      {{-- @endif --}}
      {{-- @if (Auth::check() && (Auth::user()->role->slug === 'super-admin' || Auth::user()->role->slug === 'administrator')) --}}
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('instructor.index') }}">
            <i class="fas fa-user-tie align-middle"></i> <span class="align-middle">{{ __('Manage Instructors') }}</span>
          </a>
          {{-- <a class="sidebar-link" href="{{ Auth::user()->role->slug === 'super-admin' ? route('instructor.index') : route('admin.users.index') }}">
            <i class="fas fa-user-tie align-middle"></i> <span class="align-middle">{{ __('Manage Instructors') }}</span>
          </a> --}}
        </li>
      {{-- @endif --}}
      {{-- @if (Auth::check() && (Auth::user()->role->slug === 'super-admin' || Auth::user()->role->slug === 'administrator')) --}}
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('student.index') }}">
            <i class="fas fa-user-graduate align-middle"></i> <span class="align-middle">{{ __('Manage Students') }}</span>
          </a>
          {{-- <a class="sidebar-link" href="{{ Auth::user()->role->slug === 'super-admin' ? route('student.index') : route('admin.users.index') }}">
            <i class="fas fa-user-graduate align-middle"></i> <span class="align-middle">{{ __('Manage Students') }}</span>
          </a> --}}
        </li>
      {{-- @endif --}}
      {{-- @if (Auth::check() && (Auth::user()->role->slug === 'super-admin')) --}}
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('roles.index') }}">
            <i class="fas fa-user-shield align-middle"></i> <span class="align-middle">{{ __('User Settings') }}</span>
          </a>
        </li>
      {{-- @endif --}}
      <li class="sidebar-header">{{ __('Settings & Security') }}</li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="javascript:void(0)">
          <i class="fas fa-user-shield align-middle"></i> <span class="align-middle">{{ __('General Settings') }}</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
