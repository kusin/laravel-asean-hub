<div class="user-panel mt-3 mb-3 pb-3 d-flex">
    <div class="image">
        <img src="{{ asset('adminlte/dist/img/logo-dki.png') }}" class="img-fluid">
    </div>
    <div class="info">
        <a href="{{ route('admin.dashboard') }}" class="d-block text-light">ASEAN HUB 2026</a>
    </div>
</div>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link @yield('nav-dashboard')">
                <i class="nav-icon fa-solid fa-building-columns"></i>
                <p class="text-light">Main Dashboard</p>
            </a>
        </li>

        {{-- USER ACCESS --}}
        <li class="nav-header mt-2">USER ACCESS</li>
        <li class="nav-item">
            <a href="{{ route('admin.judges.index') }}" class="nav-link @yield('nav-jugdes')">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Judges</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.participants.index') }}" class="nav-link @yield('nav-participants')">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Participants</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.voters.index') }}" class="nav-link @yield('nav-voters')">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Voters</p>
            </a>
        </li>

        {{-- PARTICIPANT RESULTS --}}
        <li class="nav-header mt-2">PARTICIPANT RESULTS</li>
        <li class="nav-item">
            <a href="{{ route('admin.urban-design.index') }}" class="nav-link @yield('nav-urban-design')">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Urban Design</p>
            </a>
        </li>

        {{-- VOTING RESULTS --}}
        <li class="nav-header mt-2">VOTING RESULTS</li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Assessment One</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Assessment Two</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Final Assessment</p>
            </a>
        </li>

        {{-- Company Profile --}}
        <li class="nav-header mt-2">SI. Company Profile</li>
        <li class="nav-item">
            <a href="{{-- route('admin.pegawai.index') --}}" class="nav-link">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Home</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{-- route('admin.mitra.index') --}}" class="nav-link">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Resource</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{-- route('admin.mitra.index') --}}" class="nav-link">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Aplication Guideline</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{-- route('admin.mitra.index') --}}" class="nav-link">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Exhibition</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{-- route('admin.mitra.index') --}}" class="nav-link">
                <i class="nav-icon fa-solid fa-book"></i>
                <p class="text-light">Announcement</p>
            </a>
        </li>
    </ul>
</nav>