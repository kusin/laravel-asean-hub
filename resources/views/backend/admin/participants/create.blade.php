@extends('layouts.backend_admin')

@section('nav-participants', 'active')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="callout callout-success">
            <span class="text-dark">
                <i class="fa-solid fa-book mr-2"></i>
                Add Data Participants
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
            <div class="card-body">
                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-4">
                                <label for="team_name" class="required">Team Name</label>
                                <input type="text" class="form-control border-dark" name="team_name" id="team_name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-4">
                                <label for="participants_name_1" class="required">Participant Name 1 (Group Leader)</label>
                                <input type="text" class="form-control border-dark" name="participants_name_1" id="participants_name_1">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-4">
                                <label for="participants_name_2" class="required">Participant Name 2 (Member)</label>
                                <input type="text" class="form-control border-dark" name="participants_name_2" id="participants_name_2">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-4">
                                <label for="participants_name_3">Participant Name 2 (Member)</label>
                                <input type="text" class="form-control border-dark" name="participants_name_3" id="participants_name_3">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-4">
                                <label for="participants_name_4">Participant Name 4 (Member)</label>
                                <input type="text" class="form-control border-dark" name="participants_name_4" id="participants_name_4">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-4">
                                <label for="participants_name_5">Participant Name 5 (Member)</label>
                                <input type="text" class="form-control border-dark" name="participants_name_5" id="participants_name_5">
                            </div>
                        </div>
                        {{-- col-sm --}}
                    </div>
                    {{-- row --}}

                    <div class="row">
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
                                <label for="participants_phone" class="required">Phone Number</label>
                                <input type="text" class="form-control border-dark" name="participants_phone" id="participants_phone">
                            </div>
                        </div>
                    </div>
                    {{-- row --}}

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group mb-4">
                                <label for="judges_email" class="required">Email</label>
                                <input type="email" class="form-control border-dark" name="judges_email" id="judges_email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-4">
                                <label for="judges_password" class="required">Password</label>
                                <input type="password" class="form-control border-dark" name="judges_password" id="judges_password">
                            </div>
                        </div>
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
            <div class="card-footer">
                <span class="d-block text-right text-dark required">Required fields. Please fill in the data correctly</span>
            </div>
        </div>
        {{-- card-success --}}
    </div>
    {{-- col-sm --}}
</div>
{{-- row --}}

@endsection