@extends('layouts.backend_participants')
@section('nav-assessment', 'active')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="callout callout-danger">
            <span class="text-dark">
                <i class="fa-solid fa-book mr-2"></i>
                Results of Assessment Judges for Your Design Urban.
            </span>
        </div>
        {{-- callout --}}
    </div>
    {{-- col-sm --}}

    <div class="col-sm-12">
        <div class="callout callout-danger pb-1">
            <span class="text-dark">The assessment criteria are as follows</span>
            <ol class="text-dark">
                <li>Innovation and Originality (weighting: 25%)</li>
                <li>Design Quality and Urban Integration (weighting: 30%)</li>
                <li>Sustainability (weighting: 20%)</li>
                <li>Feasibility (weighting: 15%)</li>
                <li>Presentation Quality (weighting: 10%)</li>
            </ol>
        </div>
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
                                <th width="5%" rowspan="2" style="vertical-align: middle;">#</th>
                                <th width="20%" rowspan="2" style="vertical-align: middle;">Judges Name</th>
                                <th width="25%" colspan="5" class="text-center">Assessment Criteria</th>
                                <th width="50%" rowspan="2" style="vertical-align: middle;">Comments</th>
                            </tr>
                            <tr>
                                <th width="5%">1</th>
                                <th width="5%">2</th>
                                <th width="5%">3</th>
                                <th width="5%">4</th>
                                <th width="5%">5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Judges 1</td>
                                <td>90</td>
                                <td>90</td>
                                <td>90</td>
                                <td>95</td>
                                <td>100</td>
                                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum itaque ratione atque vel temporibus, vero officia optio quisquam, rerum enim nisi eveniet, voluptatibus omnis tenetur. Accusantium similique fugit aliquid laborum.</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Judges 2</td>
                                <td>90</td>
                                <td>90</td>
                                <td>90</td>
                                <td>95</td>
                                <td>100</td>
                                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum itaque ratione atque vel temporibus, vero officia optio quisquam, rerum enim nisi eveniet, voluptatibus omnis tenetur. Accusantium similique fugit aliquid laborum.</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Judges 3</td>
                                <td>90</td>
                                <td>90</td>
                                <td>90</td>
                                <td>95</td>
                                <td>100</td>
                                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum itaque ratione atque vel temporibus, vero officia optio quisquam, rerum enim nisi eveniet, voluptatibus omnis tenetur. Accusantium similique fugit aliquid laborum.</td>
                            </tr>
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