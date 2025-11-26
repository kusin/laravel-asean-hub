@extends('layouts.backend_admin')

@section('nav-urban-design', 'active')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="callout callout-danger">
            <span class="text-dark">
                <i class="fa-solid fa-book mr-2"></i>
                List of All Urban Design
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
            <div class="card-header"></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th rowspan="2" style="vertical-align: middle;">#</th>
                                <th rowspan="2" style="vertical-align: middle;">Team Name</th>
                                <th rowspan="2" style="vertical-align: middle;">Design Title</th>
                                <th colspan="2" style="vertical-align: middle;">Last Updated</th>
                                <th rowspan="2" style="vertical-align: middle;" class="text-center text-nowrap">Top 05</th>
                                <th rowspan="2" style="vertical-align: middle;" class="text-center text-nowrap">Top 10</th>
                                <th rowspan="2" style="vertical-align: middle;" class="text-center text-nowrap">Action</th>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ number_format($loop->iteration) }}</td>
                                <td>{{ $item->participants->team_name ?? '-' }}</td>
                                <td>{{ $item->design_title ?? '-' }}</td>
                                <td>{{ $item->created_at?->format('Y-m-d') }}</td>
                                <td>{{ $item->created_at?->format('H:i') }}</td>
                                <td class="text-center text-nowrap">
                                    <a class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-xmark"></i></a>
                                </td>
                                <td class="text-center text-nowrap">
                                    <a class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-xmark"></i></a>
                                </td>
                                <td class="text-center text-nowrap">
                                    <a href="" class="btn btn-sm btn-outline-info"><i class="fa-solid fa-display"></i></a>
                                    <a href="" class="btn btn-sm btn-outline-warning"><i class="fa-solid fa-edit"></i></a>
                                    <a href="" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash"></i></a>
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