@extends("backend.layouts.backend")
@section('where-active')
active
@endsection
@section('where-active-banner')
active
@endsection
@section("style")
    <link href="{{ asset('backend') }}/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/editors/markdown/simplemde.min.css">
        <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('backend') }}/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/plugins/select2/select2.min.css">
    <link href="{{ asset('backend') }}/assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
    
@endsection
@section("wrapper")
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div id="basic" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Banner</h4>
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">
                                <form action="{{route('where.banner.update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput5">Title</label>
                                        <input id="t-exampleFormControlInput5" type="text" name="title" class="form-control" required value="{{$banner->title}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlFile1">Background Image</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="image" id="exampleFormControlFile1">
                                        <label for="exampleFormControlFile1" class="p-color">Required dimension (W:2100 H:1094)</label>
                                    </div>

                                    <div class="form-group" >
                                        <label for="exampleFormControlFile1">Background Video</label>
                                        <input type="file" class="form-control-file" accept="video/*" name="video" id="exampleFormControlFile1">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput4756">Default</label>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-radio radio-primary">
                                          <input type="radio" class="new-control-input" name="default" value="0" @if($banner->default == 0) checked @endif><span class="new-control-indicator pl-2"></span>Image
                                        </label>
                                    </div>
                                    
                                    <div class="n-chk">
                                        <label class="new-control new-radio radio-primary">
                                          <input type="radio" class="new-control-input" name="default" value="1" @if($banner->default == 1) checked @endif><span class="new-control-indicator pl-2"></span>Video
                            
                                        </label>
                                    </div>
                                    <div class="form-group" >
                                        <input type="submit" name="txt" class="mt-4 btn btn-primary" value="Save">
                                    </div>
                                </form>
                            </div>                                        
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section("script")
<script src="{{ asset('backend') }}/plugins/highlight/highlight.pack.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('backend') }}/assets/js/scrollspyNav.js"></script>
    <!-- <script src="plugins/tagInput/tags-input.js"></script> -->
    <script src="{{ asset('backend') }}/assets/js/users/account-settings.js"></script>
@endsection