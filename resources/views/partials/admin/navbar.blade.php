<nav class="navbar navbar-expand navbar-light navbar-bg">
  <a class="sidebar-toggle js-sidebar-toggle">
    <i class="hamburger align-self-center"></i>
  </a>
  <ul class="navbar-nav navbar-align">
    <li class="nav-item">
      <a href="{{ route('site.home') }}" class="nav-link">
        <i class="fas fa-house align-middle pe-1"></i>
        <span class="align-middle">{{ __('Home') }}</span>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-icon nav-link dropdown-toggle" href="javascript:void(0)" id="itemsDropdown" data-bs-toggle="dropdown">
        <i class="align-middle" data-feather="plus"></i>
        <span class="align-middle" style="font-size: 0.85rem;">New Items</span>
      </a>
      <div class="dropdown-menu py-0" aria-labelledby="itemsDropdown">
        <div class="dropdown-menu-header">{{ __('Add New Items') }}</div>
        <div class="list-group">
          @if (Auth::check() && (Auth::user()->role->slug === 'super-admin' || Auth::user()->role->slug === 'administrator'))
            <a href="{{ route('category.create') }}" class="list-group-item">
              <i class="fas fa-plus align-middle"></i>
              <span class="text-dark ps-2">{{ __('Category') }}</span>
            </a>
          @endif
          @if (Auth::check() && (Auth::user()->role->slug === 'super-admin' || Auth::user()->role->slug === 'administrator' || Auth::user()->role->slug === 'instructor'))
            <a href="{{ route('courses.create') }}" class="list-group-item">
              <i class="fas fa-plus align-middle"></i>
              <span class="text-dark ps-2">{{ __('Course') }}</span>
            </a>
          @endif
          @if (Auth::check() && (Auth::user()->role->slug === 'super-admin' || Auth::user()->role->slug === 'administrator' || Auth::user()->role->slug === 'instructor'))
            <a href="{{ route('lessons.create') }}" class="list-group-item">
              <i class="fas fa-plus align-middle"></i>
              <span class="text-dark ps-2">{{ __('Lesson') }}</span>
            </a>
          @endif
          @if (Auth::check() && (Auth::user()->role->slug === 'super-admin' || Auth::user()->role->slug === 'administrator'))
            <a href="{{ route('topics.create') }}" class="list-group-item">
              <i class="fas fa-plus align-middle"></i>
              <span class="text-dark ps-2">{{ __('Topics') }}</span>
            </a>
          @endif
          @if (Auth::check() && (Auth::user()->role->slug === 'super-admin' || Auth::user()->role->slug === 'administrator'))
            <a href="{{ Auth::user()->role->slug === 'super-admin' ? route('users.create') : route('admin.users.create') }}" class="list-group-item">
              <i class="fas fa-plus align-middle"></i>
              <span class="text-dark ps-2">{{ __('User') }}</span>
            </a>
          @endif
        </div>
      </div>
    </li>
  </ul>
  <div class="navbar-collapse collapse">
    <ul class="navbar-nav navbar-align">
      <li class="nav-item dropdown">
        <a class="nav-icon dropdown-toggle" href="javascript:void(0)" id="alertsDropdown" data-bs-toggle="dropdown">
          <div class="position-relative">
            <i class="align-middle" data-feather="bell"></i>
            <span class="indicator">4</span>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
          <div class="dropdown-menu-header">4 New Notifications</div>
          <div class="list-group">
            <a href="javascript:void(0)" class="list-group-item">
              <div class="row g-0 align-items-center">
                <div class="col-2">
                  <i class="text-danger" data-feather="alert-circle"></i>
                </div>
                <div class="col-10">
                  <div class="text-dark">Update completed</div>
                  <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                  <div class="text-muted small mt-1">30m ago</div>
                </div>
              </div>
            </a>
            <a href="javascript:void(0)" class="list-group-item">
              <div class="row g-0 align-items-center">
                <div class="col-2">
                  <i class="text-warning" data-feather="bell"></i>
                </div>
                <div class="col-10">
                  <div class="text-dark">Lorem ipsum</div>
                  <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                  <div class="text-muted small mt-1">2h ago</div>
                </div>
              </div>
            </a>
            <a href="javascript:void(0)" class="list-group-item">
              <div class="row g-0 align-items-center">
                <div class="col-2">
                  <i class="text-primary" data-feather="home"></i>
                </div>
                <div class="col-10">
                  <div class="text-dark">Login from 192.186.1.8</div>
                  <div class="text-muted small mt-1">5h ago</div>
                </div>
              </div>
            </a>
            <a href="javascript:void(0)" class="list-group-item">
              <div class="row g-0 align-items-center">
                <div class="col-2">
                  <i class="text-success" data-feather="user-plus"></i>
                </div>
                <div class="col-10">
                  <div class="text-dark">New connection</div>
                  <div class="text-muted small mt-1">Christina accepted your request.</div>
                  <div class="text-muted small mt-1">14h ago</div>
                </div>
              </div>
            </a>
          </div>
          <div class="dropdown-menu-footer">
            <a href="javascript:void(0)" class="text-muted">Show all notifications</a>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
          <div class="position-relative">
            <i class="align-middle" data-feather="message-square"></i>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
          <div class="dropdown-menu-header">
            <div class="position-relative">4 New Messages</div>
          </div>
          <div class="list-group">
            <a href="javascript:void(0)" class="list-group-item">
              <div class="row g-0 align-items-center">
                <div class="col-2">
                  <img src="{{ asset('img/avatars/avatar-5.jpg') }}" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                </div>
                <div class="col-10 ps-2">
                  <div class="text-dark">Vanessa Tucker</div>
                  <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
                  <div class="text-muted small mt-1">15m ago</div>
                </div>
              </div>
            </a>
            <a href="javascript:void(0)" class="list-group-item">
              <div class="row g-0 align-items-center">
                <div class="col-2">
                  <img src="{{ asset('img/avatars/avatar-2.jpg') }}" class="avatar img-fluid rounded-circle" alt="William Harris">
                </div>
                <div class="col-10 ps-2">
                  <div class="text-dark">William Harris</div>
                  <div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
                  <div class="text-muted small mt-1">2h ago</div>
                </div>
              </div>
            </a>
            <a href="javascript:void(0)" class="list-group-item">
              <div class="row g-0 align-items-center">
                <div class="col-2">
                  <img src="{{ asset('img/avatars/avatar-4.jpg') }}" class="avatar img-fluid rounded-circle" alt="Christina Mason">
                </div>
                <div class="col-10 ps-2">
                  <div class="text-dark">Christina Mason</div>
                  <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
                  <div class="text-muted small mt-1">4h ago</div>
                </div>
              </div>
            </a>
            <a href="javascript:void(0)" class="list-group-item">
              <div class="row g-0 align-items-center">
                <div class="col-2">
                  <img src="{{ asset('img/avatars/avatar-3.jpg') }}" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
                </div>
                <div class="col-10 ps-2">
                  <div class="text-dark">Sharon Lessman</div>
                  <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
                  <div class="text-muted small mt-1">5h ago</div>
                </div>
              </div>
            </a>
          </div>
          <div class="dropdown-menu-footer">
            <a href="javascript:void(0)" class="text-muted">Show all messages</a>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="javascript:void(0)" data-bs-toggle="dropdown">
          <i class="align-middle" data-feather="settings"></i>
        </a>
        <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="javascript:void(0)" data-bs-toggle="dropdown">
          <img src="{{ asset('img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">{{ Auth::guard('admin')->user()->firstname . ' ' . Auth::guard('admin')->user()->lastname }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-end">
          <a class="dropdown-item" href="{{ route('show.profile', Auth::guard('admin')->user()->username) }}"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
          <a class="dropdown-item" href="javascript:void(0)"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
          <a class="dropdown-item" href="javascript:void(0)"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
          <div class="dropdown-divider"></div>
          {{-- <a class="dropdown-item" href="javascript:void(0)"><i class="align-middle me-1" data-feather="log-out"></i> Log out</a> --}}
          <!-- Authentication -->
          <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
              <i class="align-middle me-1" data-feather="log-out"></i>
              <span class="me-1">{{ __('Log Out') }}</span>
            </a>
          </form>
        </div>
      </li>
    </ul>
  </div>
</nav>
