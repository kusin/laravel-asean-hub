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

<div class="modal fade" id="showModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete this data ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group mb-4">
                            <label for="team_name" class="required">Team Name</label>
                            <input type="text" class="form-control border-dark" name="team_name" id="team_name" value="PT. Karya Anak Bangsa" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="participants_name_1" class="required">Participant Name 1 (Group Leader)</label>
                            <input type="text" class="form-control border-dark" name="participants_name_1" id="participants_name_1" value="Aryajaya Alamsyah, S.Kom., M.Kom." disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="participants_name_2" class="required">Participant Name 2 (Member)</label>
                            <input type="text" class="form-control border-dark" name="participants_name_2" id="participants_name_2" value="Iim Karimah, SE." disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="participants_name_3">Participant Name 2 (Member)</label>
                            <input type="text" class="form-control border-dark" name="participants_name_3" id="participants_name_3" value="-" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="participants_name_4">Participant Name 4 (Member)</label>
                            <input type="text" class="form-control border-dark" name="participants_name_4" id="participants_name_4" value="-" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="participants_name_5">Participant Name 5 (Member)</label>
                            <input type="text" class="form-control border-dark" name="participants_name_5" id="participants_name_5" value="-" disabled>
                        </div>
                    </div>
                    {{-- col-sm --}}
                </div>
                {{-- row --}}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="origin_country" class="required">Origin of Country</label>
                            <input type="text" class="form-control border-dark" name="origin_country" id="origin_country" value="Indonesia" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="participants_phone" class="required">Phone Number</label>
                            <input type="text" class="form-control border-dark" name="participants_phone" id="participants_phone" value="0819-3285-5946" disabled>
                        </div>
                    </div>
                </div>
                {{-- row --}}

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger">
                    <i class="fas fa-trash mr-2"></i>Delete
                </button>
            </div>
        </div>
        {{-- modal-content --}}
    </div>
    {{-- modal-dialog --}}
</div>
{{-- modal --}}

@endsection