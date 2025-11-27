@extends('layouts.backend_participants')
@section('nav-dashboard', 'active')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="callout callout-danger">
            <span class="text-dark">
                <i class="fa-solid fa-book mr-2"></i>
                Welcome to the ASEAN Hub International Design Competition 2026
            </span>
        </div>
    </div>
    {{-- /.col --}}
</div>
{{-- /.row --}}

<div class="row">

    <div class="col-sm-4">
        <div class="card card-danger card-outline">
            <div class="card-body box-profile">
                <div class="text-center mb-3">
                    <img class="profile-user-img img-fluid img-circle"
                        src="{{ asset('adminlte/dist/img/user8-128x128.jpg') }}"
                        alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">Participants of Name Team</h3>
                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <span class="float-left">Complete Registration</span>
                        <span class="float-right badge badge-success badge-custom">Finished</span>
                    </li>
                    <li class="list-group-item">
                        <span class="float-left">Complete Urban Design</span>
                        <span class="float-right badge badge-danger badge-custom">Not Finished</span>
                    </li>
                </ul>
            </div>
        </div>
        {{-- card --}}
    </div>
    {{-- col-sm --}}

    <div class="col-sm-8">
        <div class="card card-danger card-outline">
            <div class="card-header">
                <span class="text-dark text-bold required">Announcement of Contest Winners</span>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="alert alert-light" role="alert">
                    <h4 class="alert-heading">Congratulations</h4>
                    <h4 class="alert-heading">
                        You are a top 10 finalist, the presentation of the results of the city planning will be held on May 5, 2025 at the DKI Jakarta City Hall.
                    </h4>
                </div>
            </div>
        </div>
        {{-- card --}}
    </div>
    {{-- /.col-sm --}}

    <div class="col-sm-12">
        <div class="card card-danger card-outline">
            <div class="card-header">
                <span class="text-dark text-bold required">
                    Design Area of Asean HUB Kebayoran Baru.
                </span>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body d-flex justify-content-center">
                <figure class="figure">
                    <img src="{{ asset('adminlte/dist/img/peta-1-EN.png') }}" class="figure-img img-fluid" alt="...">
                </figure>
            </div>
        </div>
        {{-- card-danger --}}
    </div>
    {{-- col-sm --}}

    <div class="col-sm-12">
        <div class="card card-danger card-outline">
            <div class="card-header">
                <span class="text-dark text-bold required">
                    Design Area of Asean HUB Kebayoran Baru.
                </span>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body d-flex justify-content-center">
                <figure class="figure">
                    <img src="{{ asset('adminlte/dist/img/peta-2-EN.png') }}" class="figure-img img-fluid" alt="...">
                </figure>
            </div>
        </div>
        {{-- card-danger --}}
    </div>
    {{-- col-sm --}}

</div>
{{-- row --}}
@endsection