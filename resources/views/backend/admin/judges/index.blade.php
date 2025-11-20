@extends('layouts.backend_admin')

@section('nav-jugdes', 'active')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="callout callout-danger">
            <span class="text-dark">
                <i class="fa-solid fa-book mr-2"></i>
                List of All Judges
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
                <a href="{{ route('admin.judges.create') }}" class="btn btn-outline-success">
                    <i class="fa-solid fa-square-plus mr-2"></i>Add Data
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Name of Judges</th>
                                <th>Origin of Institution</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ number_format($loop->iteration) }}</td>
                                <td><img src="{{ asset('adminlte/dist/img/user8-128x128.jpg') }}" class="img-fluid"></td>
                                <td>{{ $item->judges_name ?? '-' }}</td>
                                <td>{{ $item->origin_institution ?? '-' }}</td>
                                <td>{{ $item->judges_email ?? '-' }}</td>
                                <td>
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