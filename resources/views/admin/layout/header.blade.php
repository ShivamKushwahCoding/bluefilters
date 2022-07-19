<nav
    class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <ul class="nav navbar-nav align-items-center ms-auto">
        <li class="nav-item dropdown dropdown-user">
            <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="user-nav d-sm-flex d-none">
                    <span class="user-name fw-bolder"> Admin</span>
                    <span class="user-status"></span>
                </div>
                <span class="avatar">
                    <img class="round"
                        src="{{ !empty(\Illuminate\Support\Facades\Auth::user()->profile_pic) ? \Illuminate\Support\Facades\Auth::user()->profile_pic : asset('app-assets/images/avatars/1-small.png') }}"
                        alt="avatar" height="40" width="40">
                    <span class="avatar-status-online"></span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                <a class="dropdown-item" href="{{ route('logout') }}">
                    <i class="me-50" data-feather="power"></i> Logout
                </a>
            </div>
        </li>
    </ul>

</nav>
