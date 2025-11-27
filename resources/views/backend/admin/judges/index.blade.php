@extends('layouts.backend_admin')

@section('nav-jugdes', 'active')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="callout callout-info">
            <span class="text-dark">
                <i class="fa-solid fa-book mr-2"></i>
                All Data Judges
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
                                <th>Action</th>
                                <th>Name of Judges</th>
                                <th>Origin of Institution</th>
                                <th>Email</th>
                                <th>Assessment</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ number_format($loop->iteration) }}</td>
                                <td>
                                    <a href="{{ route('admin.judges.show') }}" class="btn btn-sm btn-outline-info"><i class="fa-solid fa-display"></i></a>
                                    <a href="{{ route('admin.judges.edit') }}" class="btn btn-sm btn-outline-warning"><i class="fa-solid fa-edit"></i></a>
                                    <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#showModal">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                                <td>{{ $item->judges_name ?? '-' }}</td>
                                <td>{{ $item->origin_institution ?? '-' }}</td>
                                <td>{{ $item->judges_email ?? '-' }}</td>
                                <td><span class="badge badge-warning badge-custom">On progress</span></td>
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