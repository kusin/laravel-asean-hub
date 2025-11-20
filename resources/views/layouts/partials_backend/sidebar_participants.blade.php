<div class="user-panel mt-3 mb-3 pb-3 d-flex">
    <div class="image">
        <img src="{{ asset('adminlte/dist/img/logo-dki.png') }}" class="img-fluid">
    </div>
    <div class="info">
        <a href="{{ route('participants.dashboard') }}" class="d-block text-light">ASEAN HUB 2026</a>
    </div>
</div>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('participants.dashboard') }}" class="nav-link @yield('nav-dashboard')">
                <i class="nav-icon fa-solid fa-house"></i>
                <p class="text-light">Main Dashboard</p>
            </a>
        </li>

        <li class="nav-header mt-2">PROFILE PARTICIPANT</li>
        <li class="nav-item">
            <a href="{{ route('participants.update-profile') }}" class="nav-link @yield('nav-update-profile')">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Update Profile</p>
            </a>
        </li>

        <li class="nav-header mt-2">PARTICIPANT RESULTS</li>
        <li class="nav-item">
            <a href="{{ route('participants.urban-design.show') }}" class="nav-link @yield('nav-urban-design')">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Urban Design</p>
            </a>
        </li>

        <li class="nav-header mt-2">VOTING RESULTS</li>
        <li class="nav-item">
            <a href="{{ route('participants.assessment') }}" class="nav-link @yield('nav-assessment')">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Assessment Judges</p>
            </a>
        </li>
    </ul>
</nav>