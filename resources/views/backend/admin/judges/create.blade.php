@extends('layouts.backend_admin')

@section('nav-jugdes', 'active')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="callout callout-danger">
            <span class="text-dark">
                <i class="fa-solid fa-book mr-2"></i>
                Add Data Judges
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
                <span class="text-dark text-bold required">
                    Required fields. Please fill in the data correctly
                </span>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group mb-4">
                                <label for="judges_name" class="required">Name of Judges</label>
                                <input type="text" class="form-control border-dark"
                                    name="judges_name" id="judges_name" value="{{ old('judges_name') }}"
                                    placeholder="Aryajaya Alamsyah, S.Kom., M.Kom., MTA.">
                            </div>
                            <div class="form-group mb-4">
                                <label for="origin_institution" class="required">Origin of Institution</label>
                                <input type="text" class="form-control border-dark"
                                    name="origin_institution" id="origin_institution" value="{{ old('origin_institution') }}"
                                    placeholder="Politeknik Negeri Jakarta">
                            </div>
                            <div class="form-group mb-4">
                                <label for="judges_photo" class="required">Your Photo</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"
                                        name="judges_photo" id="judges_photo" required>
                                    <label class="custom-file-label border-dark" for="judges_photo">Choose file</label>
                                </div>
                            </div>
                        </div>
                        {{-- col-sm --}}
                        <div class="col-sm-4">
                            <div class="form-group mb-4">
                                <label for="judges_email" class="required">Email</label>
                                <input type="email" class="form-control border-dark"
                                    name="judges_email" id="judges_email" value="{{ old('judges_email') }}">
                            </div>
                            <div class="form-group mb-4">
                                <label for="judges_password" class="required">Password</label>
                                <input type="password" class="form-control border-dark"
                                    name="judges_password" id="judges_password" value="{{ old('judges_password') }}">
                            </div>
                        </div>
                        {{-- col-sm --}}
                    </div>
                    {{-- row --}}
                    <div class="row">
                        <div class="col-sm-2">
                            <button type="reset" class="btn btn-block btn-outline-danger">
                                <i class="fas fa-undo mr-2"></i>Reset
                            </button>
                        </div>
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-block btn-outline-success">
                                <i class="fas fa-save mr-2"></i>Submit
                            </button>
                        </div>
                        {{-- col-sm --}}
                    </div>
                    {{-- row --}}
                </form>
            </div>
            {{-- card-body --}}
        </div>
        {{-- card-danger --}}
    </div>
    {{-- col-sm --}}
</div>
{{-- row --}}
@endsection