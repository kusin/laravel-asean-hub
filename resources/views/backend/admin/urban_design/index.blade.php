@extends('layouts.backend_admin')

@section('nav-urban-design', 'active')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="callout callout-info">
            <span class="text-dark">
                <i class="fa-solid fa-book mr-2"></i>
                All Data Urban Design
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
            <div class="card-header"></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th rowspan="2" style="vertical-align: middle;">#</th>
                                <th rowspan="2" style="vertical-align: middle;">Action</th>
                                <th rowspan="2" style="vertical-align: middle;">Team Name</th>
                                <th rowspan="2" style="vertical-align: middle;">Country</th>
                                <th colspan="3" class="text-center">Poster Images</th>
                                <th colspan="2" class="text-center">Videos</th>
                                <th rowspan="2" style="vertical-align: middle;">Status</th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>Native</th>
                                <th>Youtube</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ number_format($loop->iteration) }}</td>
                                <td>
                                    <a href="{{ route('admin.urban-design.show') }}" class="btn btn-sm btn-outline-info">
                                        <span><i class="fa-solid fa-display mr-2"></i>Details</span>
                                    </a>
                                </td>
                                <td>{{ $item->participants->team_name ?? '-' }}</td>
                                <td>Indonesia</td>
                                <td>Available</td>
                                <td>Available</td>
                                <td>Available</td>
                                <td>Available</td>
                                <td>Available</td>
                                <td>
                                    <span class="badge badge-success badge-custom">Completed</span>
                                </td>
                            </tr>
                            @endforeach
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