@extends('layouts.backend_admin')

@section('nav-participants', 'active')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="callout callout-info">
            <span class="text-dark">
                <i class="fa-solid fa-book mr-2"></i>
                All Data Participants
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
            <div class="card-header">
                <a href="{{ route('admin.participants.create') }}" class="btn btn-outline-success">
                    <i class="fa-solid fa-square-plus mr-2"></i>Add Data
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Action</th>
                                <th>Name of Team</th>
                                <th>Email of Team</th>
                                <th>Country</th>
                                <th>Registration</th>
                                <th>Urban Design</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ number_format($loop->iteration) }}</td>
                                <td>
                                    <a href="{{ route('admin.participants.show') }}" class="btn btn-sm btn-outline-info"><i class="fa-solid fa-display"></i></a>
                                    <a href="{{ route('admin.participants.edit') }}" class="btn btn-sm btn-outline-warning"><i class="fa-solid fa-edit"></i></a>
                                    <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#showModal">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                                <td>{{ $item->team_name ?? '-' }}</td>
                                <td>{{ $item->participants_email ?? '-' }}</td>
                                <td>Indonesia</td>
                                <td><span class="badge badge-success badge-custom">Completed</span></td>
                                <td><span class="badge badge-success badge-custom">Completed</span></td>
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