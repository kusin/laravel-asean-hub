@extends('layouts.backend_admin')

@section('nav-participants', 'active')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="callout callout-info">
            <span class="text-dark">
                <i class="fa-solid fa-book mr-2"></i>
                Show Data Participants
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
            <div class="card-body">

                <div class="text-center">
                    <h4 class="d-block text-normal mb-2">PT. Karya Anak Bangsa</h4>
                    <span class="d-block text-muted mb-4">aryajaya.alamsyah@aseanhub.jakarta.go.id</span>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <table class="table border-bottom mb-4">
                            <tr>
                                <td class="text-left">Status Registration</td>
                                <td class="text-right">
                                    <span class="badge badge-success badge-custom">Completed</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left">Upload Design</td>
                                <td class="text-right">
                                    <span class="badge badge-success badge-custom">Completed</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left">Last Updated</td>
                                <td class="text-right">2026-01-01 / 19:00</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm-6">
                        <table class="table border-bottom mb-4">
                            <tr>
                                <td class="text-left">Assessment One</td>
                                <td class="text-right">
                                    <span class="badge badge-success badge-custom">Approved</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left">Assessment Two</td>
                                <td class="text-right">
                                    <span class="badge badge-success badge-custom">Approved</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left">Final Assessment</td>
                                <td class="text-right">
                                    <span class="badge badge-danger badge-custom">Rejected</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    {{-- col --}}
                </div>
                {{-- row --}}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="participants_name_1">Participant Name 1 (Group Leader)</label>
                            <input type="text" class="form-control border-dark" name="participants_name_1" id="participants_name_1" value="Aryajaya Alamsyah" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="participants_name_2">Participant Name 2 (Member)</label>
                            <input type="text" class="form-control border-dark" name="participants_name_2" id="participants_name_2" value="Iim Karimah" disabled>
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
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="origin_country">Origin of Country</label>
                            <input type="text" class="form-control border-dark" name="origin_country" id="origin_country" value="Indonesia" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-4">
                            <label for="participants_phone">Phone Number</label>
                            <input type="text" class="form-control border-dark" name="participants_phone" id="participants_phone" value="0819-3285-5946" disabled>
                        </div>
                    </div>
                    {{-- col-sm --}}
                </div>
                {{-- row --}}

            </div>
            {{-- card-body --}}
        </div>
        {{-- card --}}
    </div>
    {{-- col-sm --}}
</div>
{{-- row --}}

@endsection