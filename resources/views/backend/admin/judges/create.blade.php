@extends('layouts.backend_admin')

@section('nav-jugdes', 'active')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="callout callout-success">
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
        <div class="card card-success card-outline">
            <div class="card-header">
                <span class="card-title text-dark text-bold required">Required fields. Please fill in the data correctly</span>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-4">
                                <label for="judges_name" class="required">Name of Judges</label>
                                <input type="text" class="form-control border-dark" name="judges_name" id="judges_name" placeholder="ex. Aryajaya Alamsyah, S.Kom., M.Kom.">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-4">
                                <label for="origin_country" class="required">Origin of Country</label>
                                <select class="custom-select form-control border-dark" name="origin_country" id="origin_country">
                                    <option value="" selected disabled></option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="South-Korea">South Korea</option>
                                    <option value="Netherlands">Netherlands</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-4">
                                <label for="origin_institution" class="required">Origin of Institution</label>
                                <input type="text" class="form-control border-dark" name="origin_institution" id="origin_institution" placeholder="ex. Politeknik Negeri Jakarta">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-4">
                                <label for="jugdes_task" class="required">Task of Judges</label>
                                <select class="custom-select form-control border-dark" name="jugdes_task" id="jugdes_task">
                                    <option value="" selected disabled></option>
                                    <option value="First-Stage">First-Stage</option>
                                    <option value="Second-Stage">Second-Stage</option>
                                    <option value="Third-Stage">Third-Stage</option>
                                </select>
                            </div>
                        </div>
                        {{-- col-sm --}}
                    </div>
                    {{-- row --}}

                    <div class="row">
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-block btn-outline-danger">
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
        {{-- card-success --}}
    </div>
    {{-- col-sm --}}
</div>
{{-- row --}}
@endsection