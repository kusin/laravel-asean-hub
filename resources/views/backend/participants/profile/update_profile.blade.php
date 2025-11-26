@extends('layouts.backend_participants')
@section('nav-update-profile', 'active')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="callout callout-danger">
            <span class="text-dark">
                <i class="fa-solid fa-book mr-2"></i>
                Complete Registration - Update Your Profile
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

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group mb-4">
                                <label for="participants_email" class="required">Email</label>
                                <input type="text" class="form-control border-dark" name="participants_email" id="participants_email">
                            </div>
                            <div class="form-group mb-4">
                                <label for="participants_password" class="required">Password</label>
                                <input type="text" class="form-control border-dark" name="participants_password" id="participants_password">
                            </div>
                        </div>
                    </div>
                    {{-- row --}}

                    <div class="row">
                        <div class="col-sm-12">
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
                            <div class="form-group mb-4">
                                <label for="participants_name_3">Participant Name 3 (Member)</label>
                                <input type="text" class="form-control border-dark" name="participants_name_3" id="participants_name_3">
                            </div>
                            <div class="form-group mb-4">
                                <label for="participants_name_4">Participant Name 4 (Member)</label>
                                <input type="text" class="form-control border-dark" name="participants_name_4" id="participants_name_4">
                            </div>
                            <div class="form-group mb-4">
                                <label for="participants_name_5">Participant Name 5 (Member)</label>
                                <input type="text" class="form-control border-dark" name="participants_name_5" id="participants_name_5">
                            </div>
                            <div class="form-group mb-4">
                                <label for="participants_contact_person">Contact Person</label>
                                <input type="text" class="form-control border-dark" name="participants_contact_person" id="participants_contact_person">
                            </div>
                        </div>
                    </div>
                    {{-- row --}}

                    <div class="row">
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
        </div>
        {{-- card-danger --}}
    </div>
    {{-- col-sm --}}
</div>
{{-- row --}}

@endsection