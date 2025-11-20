@extends('layouts.backend_judges')
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

    <div class="col-sm-4">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ number_format($number_participants) }}</h3>
                <p class="text-light">Number of Participants</p>
            </div>
            <div class="icon"><i class="fa-solid fa-user-graduate"></i></div>
            <a href="{{-- route('admin.judges.index') --}}" class="small-box-footer"><i class="fa-solid fa-clone mr-2"></i>More Details</a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ number_format($number_urban_design) }}</h3>
                <p class="text-light">Number of Urban Design</p>
            </div>
            <div class="icon"><i class="fa-solid fa-user-graduate"></i></div>
            <a href="{{-- route('admin.judges.index') --}}" class="small-box-footer"><i class="fa-solid fa-clone mr-2"></i>More Details</a>
        </div>
    </div>
    {{-- /.col --}}
</div>
{{-- /.row --}}
@endsection