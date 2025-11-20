@extends('layouts.backend_participants')
@section('nav-urban-design', 'active')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="callout callout-danger">
            <span class="text-dark">
                <i class="fa-solid fa-book mr-2"></i>
                Complete Urban Design - Upload Your Design
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
                        <div class="col-sm-12">
                            <div class="form-group mb-4">
                                <label for="design_title" class="required">Design Title</label>
                                <input type="text" class="form-control border-dark"
                                    name="design_title" id="design_title" placeholder="Maximum of 10 words">
                            </div>
                            <div class="form-group mb-4">
                                <label for="design_description" class="required">Design Description</label>
                                <textarea class="form-control border-dark" name="design_description" id="design_description" rows="12" placeholder="Maximum of 500 words"></textarea>
                                <small class="text-muted">Maximum three paragraphs</small>
                            </div>
                        </div>
                        {{-- col-sm --}}
                    </div>
                    {{-- row --}}
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-4">
                                <label for="design_presentation" class="required">Presentation Slides</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="design_presentation" id="design_presentation" required>
                                    <label class="custom-file-label border-dark" for="design_presentation">Choose file</label>
                                </div>
                                <small class="text-muted">Accepted format : PDF, PPTX, ODP. Max 10MB</small>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group mb-4">
                                <label for="image_1" class="required">Poster Image 1</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image_1" id="image_1" required>
                                    <label class="custom-file-label border-dark" for="image_1">Choose file</label>
                                </div>
                                <small class="text-muted">Accepted format : JPEG. Max 10MB</small>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group mb-4">
                                <label for="image_2" class="required">Poster Image 2</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image_2" id="image_1" required>
                                    <label class="custom-file-label border-dark" for="image_2">Choose file</label>
                                </div>
                                <small class="text-muted">Accepted format : JPEG. Max 10MB</small>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group mb-4">
                                <label for="image_3" class="required">Poster Image 3</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image_3" id="image_3" required>
                                    <label class="custom-file-label border-dark" for="image_3">Choose file</label>
                                </div>
                                <small class="text-muted">Accepted format : JPEG. Max 10MB</small>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group mb-4">
                                <label for="video_native" class="required">Upload Video</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="video_native" id="video_native" required>
                                    <label class="custom-file-label border-dark" for="video_native">Choose file</label>
                                </div>
                                <small class="text-muted">Accepted format : MP4, MOV, AVI, MKV. Max 10MB</small>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group mb-4">
                                <label for="video_youtube" class="required">Link Youtube</label>
                                <input type="text" class="form-control border-dark"
                                    name="video_youtube" id="video_youtube" value="{{ old('video_youtube') }}">
                            </div>
                        </div>
                        {{-- col --}}
                    </div>
                    {{-- row-sm --}}
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