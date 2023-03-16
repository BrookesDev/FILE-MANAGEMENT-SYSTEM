
    <div class="header header-one">

        <div class="header-left header-left-one">
            <a href="index.html" class="logo">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
            </a>
            <a href="index.html" class="white-logo">
                <img src="{{ asset('assets/img/logo-white.png') }}" alt="Logo">
            </a>
            <a href="index.html" class="logo logo-small">
                <img src="{{ asset('assets/img/logo-small.png') }}" alt="Logo" width="30" height="30">
            </a>
        </div>
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-bars"></i>
        </a>
        <a class="mobile_btn" id="mobile_btn">
            <i class="fas fa-bars"></i>
        </a>
        <ul class="nav nav-tabs user-menu">
            <li class="nav-item dropdown has-arrow main-drop">
                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <span class="user-img">
                      
                        <span class="status online"></span>
                    </span>
                    <span>{{Auth::user()->name}}</span>
                </a>
                <div class="dropdown-menu">
                    {{-- <a class="dropdown-item" href="profile.html"><i data-feather="user" class="me-1"></i>
                        Profile</a>
                    <a class="dropdown-item" href="settings.html"><i data-feather="settings" class="me-1"></i>
                        Settings</a> --}}
                    <a class="dropdown-item" href="{{route('profile')}}"><i data-feather="home"></i> <span>Profile</span></a>
                    <a class="dropdown-item" href="{{route('changePassword')}}"><i data-feather="home"></i> <span>Change Password</span></a>
                    <a class="dropdown-item" href="/logout"><i data-feather="log-out" class="me-1"></i>Logout</a>
                </div>
            </li>

        </ul>

    </div>


