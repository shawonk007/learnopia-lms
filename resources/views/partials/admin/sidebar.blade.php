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
      </li>

      <li class="sidebar-header">{{ __('Course Management') }}</li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('courses.index') }}">
          <i class="fas fa-graduation-cap align-middle"></i> <span class="align-middle">{{ __('Manage Courses') }}</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('lessons.index') }}">
          <i class="fas fa-chalkboard-user align-middle"></i> <span class="align-middle">{{ __('Manage Lessons') }}</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('category.index') }}">
          <i class="fas fa-code-branch align-middle pe-1"></i> <span class="align-middle">{{ __('Category') }}</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('category.index') }}">
          <i class="fas fa-tags align-middle"></i> <span class="align-middle">{{ __('Tags Manager') }}</span>
        </a>
      </li>
      <li class="sidebar-header">{{ __('Users Management') }}</li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('users.index') }}">
          <i class="fas fa-users align-middle"></i> <span class="align-middle">{{ __('Manage Users') }}</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('roles.index') }}">
          <i class="fas fa-user-shield align-middle"></i> <span class="align-middle">{{ __('User Settings') }}</span>
        </a>
      </li>
      <li class="sidebar-header">{{ __('Settings & Security') }}</li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="javascript:void(0)">
          <i class="fas fa-user-shield align-middle"></i> <span class="align-middle">{{ __('General Settings') }}</span>
        </a>
      </li>
    </ul>
  </div>
</aside>