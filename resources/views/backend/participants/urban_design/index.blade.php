@extends('layouts.backend_participants')
@section('nav-urban-design', 'active')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="callout callout-danger">
            <span class="text-dark">
                <i class="fa-solid fa-book mr-2"></i>
                Complete Urban Design - Upload Your Design
            </span>
        </div>
        {{-- callout --}}
    </div>
    {{-- col-sm --}}
</div>
{{-- row --}}

<div class="row">
    <div class="col-sm-12">
        <div class="card card-danger card-outline">
            <div class="card-header">
                <a href="{{ route('participants.urban-design.create') }}" class="btn btn-outline-success">
                    <i class="fa-solid fa-square-plus mr-2"></i>Add Data
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th rowspan="2" style="vertical-align: middle;">#</th>
                                <th rowspan="2" style="vertical-align: middle;">Design Title</th>
                                <th rowspan="2" style="vertical-align: middle;">Design Description</th>
                                <th rowspan="2" style="vertical-align: middle;">Presentation Slides</th>
                                <th colspan="3" class="text-center">Poster Images</th>
                                <th colspan="2" class="text-center">Videos</th>
                                <th rowspan="2" style="vertical-align: middle;" class="text-center text-nowrap">Action</th>
                            </tr>
                            <tr>
                                <th>Poster 1</th>
                                <th>Poster 2</th>
                                <th>Poster 3</th>
                                <th>Native</th>
                                <th>Youtube</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>

                                <!-- Poster 1–3 -->
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>

                                <!-- Videos -->
                                <td>-</td>
                                <td>-</td>

                                <td class="text-center text-nowrap">
                                    <a href="" class="btn btn-sm btn-outline-info"><i class="fa-solid fa-display"></i></a>
                                    <a href="" class="btn btn-sm btn-outline-warning"><i class="fa-solid fa-edit"></i></a>
                                    <a href="" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>2.</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>

                                <!-- Poster 1–3 -->
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>

                                <!-- Videos -->
                                <td>-</td>
                                <td>-</td>

                                <td class="text-center text-nowrap">
                                    <a href="" class="btn btn-sm btn-outline-info"><i class="fa-solid fa-display"></i></a>
                                    <a href="" class="btn btn-sm btn-outline-warning"><i class="fa-solid fa-edit"></i></a>
                                    <a href="" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
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
    {{-- col-sm --}}
</div>
{{-- row --}}

@endsection