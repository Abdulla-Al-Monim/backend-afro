@extends("backend.layouts.backend")
@section('about-active')
active
@endsection
@section('about-govermance-active')
active
@endsection
@section('about-govermance-policies-active')
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
                                <h4>Report</h4>
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">
                                <form action="{{route('about.policies.update',$data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                      
                                    <div class="form-group" >
                                        <label for="heading">Heading</label>
                                        <input id="t-heading" type="text" name="heading" class="form-control" required value="{{$data->heading}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput5">Title</label>
                                        <input id="t-exampleFormControlInput5" type="text" name="title" class="form-control" required value="{{$data->title}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput443">Description</label>
                                        
                                        <textarea class="form-control" rows="10" name="description">{!!$data->description!!}</textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlFile11">Image</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="image" id="exampleFormControlFile11" >
                                        <p class="p-color"> Required dimension (W:287 H:270)</p>
                                    </div>
                                    <div class="form-group" >
                                        <label for="file">File</label>
                                        <input type="file" class="form-control-file" accept="*/" name="file" id="file" >
                                       
                                    </div>
                                    <div class="form-group" >
                                        <input type="submit" name="txt" class="mt-4 btn btn-primary" value="Save">
                                        <a href="{{route('about.policies',$data->about_governmance_policie_id)}}" class="mt-4 btn btn-success">Back</a>
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