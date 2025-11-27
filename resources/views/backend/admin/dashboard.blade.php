@extends('layouts.backend_admin')
@section('nav-dashboard', 'active')
@section('content')

<div class="row">

    <div class="col-sm-12">
        <div class="callout callout-info">
            <span class="text-dark">
                <i class="fa-solid fa-book mr-2"></i>
                Information About the Number of User Accesses
            </span>
        </div>
    </div>
    {{-- col --}}

    <div class="col-sm-3">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>3</h3>
                <p class="text-light">Number of Administrators</p>
            </div>
            <div class="icon"><i class="fa-solid fa-user-graduate"></i></div>
        </div>
    </div>
    {{-- col --}}

    <div class="col-sm-3">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ number_format($number_judges) }}</h3>
                <p class="text-light">Number of Judges</p>
            </div>
            <div class="icon"><i class="fa-solid fa-user-graduate"></i></div>
        </div>
    </div>
    {{-- col --}}

    <div class="col-sm-3">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ number_format($number_participants) }}</h3>
                <p class="text-dark">Number of Participants</p>
            </div>
            <div class="icon"><i class="fa-solid fa-user-graduate"></i></div>
        </div>
    </div>
    {{-- col --}}

    <div class="col-sm-3">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ number_format($number_voters) }}</h3>
                <p class="text-light">Number of Voters</p>
            </div>
            <div class="icon"><i class="fa-solid fa-user-graduate"></i></div>
        </div>
    </div>
    {{-- col --}}

</div>
{{-- row --}}

@endsection