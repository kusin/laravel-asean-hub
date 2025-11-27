@extends('layouts.backend_admin')

@section('nav-jugdes', 'active')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="callout callout-info">
            <span class="text-dark">
                <i class="fa-solid fa-book mr-2"></i>
                Show Data Judges
            </span>
        </div>
        {{-- callout --}}
    </div>
    {{-- col-sm --}}
</div>
{{-- row --}}

<div class="row">
    <div class="col-sm-12">
        <div class="card card-info card-outline">
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid img-thumbnail img-circle mb-2"
                        src="{{ asset('adminlte/dist/img/user8-128x128.jpg') }}"
                        alt="User profile picture">
                    <p class="text-normal">Aryajaya Alamsyah, S.Kom., M.Kom.</p>
                </div>
                <table class="table border-bottom">
                    <tbody>
                        <tr>
                            <td class="text-left">Status Data</td>
                            <td class="text-right">
                                <span class="badge badge-success badge-custom">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">Last Updated</td>
                            <td class="text-right">2026-01-01 - 19:00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- card --}}
    </div>
    {{-- col-sm --}}
    <div class="col-sm-12">
        <div class="card card-info card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group mb-4">
                            <label for="judges_name">Name of Judges</label>
                            <input type="text" class="form-control border-dark" name="judges_name" id="judges_name" value="Aryajaya Alamsyah, S.Kom., M.Kom." disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="origin_country">Origin of Country</label>
                            <input type="text" class="form-control border-dark" name="origin_country" id="origin_country" value="Indonesia" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="origin_institution">Origin of Institution</label>
                            <input type="text" class="form-control border-dark" name="origin_institution" id="origin_institution" value="Politeknik Negeri Jakarta" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="jugdes_task">Assessment Stage</label>
                            <input type="text" class="form-control border-dark" name="jugdes_task" id="jugdes_task" value="Stage One" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="judges_email">Email</label>
                            <input type="email" class="form-control border-dark" name="judges_email" id="judges_email" value="aryajaya.alamsyah@aseanhub.jakarta.go.id" disabled>
                        </div>
                    </div>
                    {{-- col-sm --}}
                </div>
                {{-- row --}}
            </div>
        </div>
        {{-- card --}}
    </div>
    {{-- col-sm --}}
</div>
{{-- row --}}

@endsection