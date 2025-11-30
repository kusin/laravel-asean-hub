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

    <div class="col-sm-4">
        <div class="card card-info card-outline">
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid img-thumbnail img-circle mb-2"
                        src="{{ asset('adminlte/dist/img/user8-128x128.jpg') }}"
                        alt="User profile picture">
                    <p class="text-normal">Aryajaya Alamsyah, S.Kom., M.Kom.</p>
                </div>
                <table class="table border-bottom mb-2">
                    <tbody>
                        <tr>
                            <td class="text-left">Last Login</td>
                            <td class="text-right">2026-01-01 - 19:00</td>
                        </tr>
                    </tbody>
                </table>
                <a href="" class="btn btn-block btn-outline-danger">Logout</a>
            </div>
        </div>
        {{-- card --}}
    </div>
    {{-- col --}}

    <div class="col-sm-8">
        <div class="row">
            <div class="col-sm-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>3</h3>
                        <p class="text-light">Number of Administrators</p>
                    </div>
                    <div class="icon"><i class="fa-solid fa-user-graduate"></i></div>
                </div>
            </div>
            {{-- col --}}

            <div class="col-sm-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ number_format($number_judges) }}</h3>
                        <p class="text-light">Number of Judges</p>
                    </div>
                    <div class="icon"><i class="fa-solid fa-user-graduate"></i></div>
                </div>
            </div>
            {{-- col --}}

            <div class="col-sm-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ number_format($number_participants) }}</h3>
                        <p class="text-dark">Number of Participants</p>
                    </div>
                    <div class="icon"><i class="fa-solid fa-user-graduate"></i></div>
                </div>
            </div>
            {{-- col --}}

            <div class="col-sm-6">
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
    </div>
    {{-- col --}}

</div>
{{-- row --}}

<div class="row">
    <div class="col-sm-12">
        <div class="callout callout-info">
            <span class="text-dark">
                <i class="fa-solid fa-book mr-2"></i>
                Information About the Progress of the Asian Hub Competition
            </span>
        </div>
    </div>
    {{-- col --}}
    <div class="col-sm-12">
        <div class="card card-info card-outline">
            <div class="card-header">
                <span class="text-dark">Judges Assessment Report on Urban Planning Design</span>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name of Judges</th>
                                <th>Stage Competition</th>
                                <th>Number of Assessment</th>
                                <th>Number of Participants</th>
                                <th>Percentage</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Prof. Dr. Imas Sukaesih Sitanggang, M.Kom.</td>
                                <td>Assessment One</td>
                                <td>100</td>
                                <td>100</td>
                                <td>100%</td>
                                <td><span class="badge badge-success badge-custom">Completed</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Dr. Imam Marzuki Shofi, MT.</td>
                                <td>Assessment One</td>
                                <td>50</td>
                                <td>100</td>
                                <td>50%</td>
                                <td><span class="badge badge-warning badge-custom">On progress</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Husni Teja Sukmana, M.Sc., Ph.D.</td>
                                <td>Assessment One</td>
                                <td>50</td>
                                <td>100</td>
                                <td>50%</td>
                                <td><span class="badge badge-warning badge-custom">On progress</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Aryajaya Alamsyah, S.Kom., M.Kom.</td>
                                <td>Assessment One</td>
                                <td>50</td>
                                <td>100</td>
                                <td>50%</td>
                                <td><span class="badge badge-warning badge-custom">On progress</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Other Judges</td>
                                <td>Assessment One</td>
                                <td>0</td>
                                <td>100</td>
                                <td>0%</td>
                                <td><span class="badge badge-danger badge-custom">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name of Judges</th>
                                <th>Stage Competition</th>
                                <th>Number of Assessment</th>
                                <th>Number of Participants</th>
                                <th>Percentage</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Prof. Dr. Imas Sukaesih Sitanggang, M.Kom.</td>
                                <td>Assessment Two</td>
                                <td>100</td>
                                <td>100</td>
                                <td>100%</td>
                                <td><span class="badge badge-success badge-custom">Completed</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Dr. Imam Marzuki Shofi, MT.</td>
                                <td>Assessment Two</td>
                                <td>50</td>
                                <td>100</td>
                                <td>50%</td>
                                <td><span class="badge badge-warning badge-custom">On progress</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Husni Teja Sukmana, M.Sc., Ph.D.</td>
                                <td>Assessment Two</td>
                                <td>50</td>
                                <td>100</td>
                                <td>50%</td>
                                <td><span class="badge badge-warning badge-custom">On progress</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Aryajaya Alamsyah, S.Kom., M.Kom.</td>
                                <td>Assessment Two</td>
                                <td>50</td>
                                <td>100</td>
                                <td>50%</td>
                                <td><span class="badge badge-warning badge-custom">On progress</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Other Judges</td>
                                <td>Assessment Two</td>
                                <td>0</td>
                                <td>100</td>
                                <td>0%</td>
                                <td><span class="badge badge-danger badge-custom">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <small class="text-dark">
                    Date Data Access {{ now()->format('Y-m-d') }} - {{ now()->format('H:i') }} WIB
                </small>
            </div>
        </div>
        {{-- card-danger --}}
    </div>
    {{-- col --}}
</div>
{{-- row --}}

@endsection