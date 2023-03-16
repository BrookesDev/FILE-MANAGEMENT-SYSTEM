
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                {{-- <li class="menu-title"><span>Main</span></li> --}}
                <li class="active">
                    <a href="/"><i data-feather="home"></i> <span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i data-feather="clipboard"></i> <span> Configuration</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('user')}}">Manage User</a></li>
                        {{-- <li><a href="">Manage User</a></li> --}}
                        {{-- <li><a class="nav-link" href="{{ route('index') }}">Users</a></li> --}}
                        <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                        <li><a class="nav-link" href="{{route('permission')}}">Manage Permission</a></li>
                        <li><a href="{{route('category')}}">Category</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i data-feather="pie-chart"></i> <span> Upload</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('uploadfile')}}">Upload File</a></li>
                        <li><a href="{{ route('upload')}}">View Upload</a></li>
                    </ul>
                </li>
        </div>
    </div>
</div>


