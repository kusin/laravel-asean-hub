@extends('layouts.backend_admin')

@section('nav-urban-design', 'active')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="callout callout-info">
            <span class="text-dark">
                <i class="fa-solid fa-book mr-2"></i>
                All Data Urban Design
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

                {{-- 1. Judul --}}
                <div class="text-center">
                    <h4 class="d-block text-normal mb-2">PT. Karya Anak Bangsa - Indonesia</h4>
                    <span class="d-block text-muted mb-4">aryajaya.alamsyah@aseanhub.jakarta.go.id</span>
                </div>

                {{-- 2. File Upload --}}
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

                {{-- 3. Title + Description --}}
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group mb-4">
                            <label for="design_title">Design Title</label>
                            <input type="text" class="form-control border-dark" name="design_title" id="design_title" value="DKI Jakarta Goes To Green 2045" disabled>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group mb-4">
                            <label for="design_description">Design Description</label>
                            <textarea class="form-control border-dark" name="design_description" id="design_description" rows="15" disabled style="text-align:justify;">
                            {{ $data }}
                            </textarea>
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