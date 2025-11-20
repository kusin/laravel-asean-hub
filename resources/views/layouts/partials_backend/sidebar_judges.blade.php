<div class="user-panel mt-3 mb-3 pb-3 d-flex">
    <div class="image">
        <img src="{{ asset('adminlte/dist/img/logo-dki.png') }}" class="img-fluid">
    </div>
    <div class="info">
        <a href="{{ route('judges.dashboard') }}" class="d-block text-light">ASEAN HUB 2026</a>
    </div>
</div>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('judges.dashboard') }}" class="nav-link @yield('nav-dashboard')">
                <i class="nav-icon fa-solid fa-house"></i>
                <p class="text-light">Main Dashboard</p>
            </a>
        </li>

        {{-- PARTICIPANT RESULTS --}}
        <li class="nav-header mt-2">PARTICIPANT RESULTS</li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Urban Planning</p>
            </a>
        </li>

        {{-- VOTING RESULTS --}}
        <li class="nav-header mt-2">VOTING RESULTS</li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Voting Results</p>
            </a>
        </li>

        {{-- Finalists --}}
        <li class="nav-header mt-2">FINALIST</li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Top Ten Participants</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Top Five Participants</p>
            </a>
        </li>
    </ul>
</nav>