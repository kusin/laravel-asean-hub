@extends('layouts.backend_admin')

@section('nav-participants', 'active')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="callout callout-danger">
            <span class="text-dark">
                <i class="fa-solid fa-book mr-2"></i>
                List of All Participants
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
                                <th>#</th>
                                <th>List of Participants</th>
                                <th>Name of Team</th>
                                <th>Email Team</th>
                                <th>Contact Person</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ number_format($loop->iteration) }}</td>
                                <td>
                                    <ul>
                                        <li>{{ $item->participants_name_1 ?? '-' }}</li>
                                        <li>{{ $item->participants_name_2 ?? '-' }}</li>
                                        <li>{{ $item->participants_name_3 ?? '-' }}</li>
                                        <li>{{ $item->participants_name_4 ?? '-' }}</li>
                                        <li>{{ $item->participants_name_5 ?? '-' }}</li>
                                    </ul>
                                </td>
                                <td>{{ $item->team_name ?? '-' }}</td>
                                <td>{{ $item->participants_email ?? '-' }}</td>
                                <td>{{ $item->participants_contact_person ?? '-' }}</td>
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