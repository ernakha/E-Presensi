<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="{{'guru.index' == request()->path() ? 'nav-item active' : 'nav-item'}}">
            <a class="nav-link" href="{{ url('/home') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="{{'/guru/presen/view_presen' == request()->path() ? 'nav-item active' : 'nav-item'}}">
            <a class="nav-link" data-bs-toggle="collapsed" href="{{ route('gurupresen.view') }}">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">Presensi</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" aria-expanded="false" aria-controls="form-elements">
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <i class="menu-icon mdi mdi-logout"></i>
                <span class="menu-title">Log Out</span>
            </a>
        </li>
        </li>
    </ul>
</nav>