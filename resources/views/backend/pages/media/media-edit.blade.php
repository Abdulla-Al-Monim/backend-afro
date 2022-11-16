@extends("backend.layouts.backend")
@section('media-active')
active
@endsection
@section('media-media-active')
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
                                <h4>Media update</h4>
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">
                                <form action="{{route('media.update',$data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput2">Title</label>
                                        <input id="t-exampleFormControlInput2" type="text" name="title" class="form-control" required value="{{$data->title}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput2e">Date</label>
                                        <input id="t-exampleFormControlInput2e" type="date" value="{{$data->date}}" name="date" class="form-control" required value="">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput2ee">Button text</label>
                                        <input id="t-exampleFormControlInput2ee" type="text" name="button_text" class="form-control" required value="{{$data->button_text}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput2ee">Button Link</label>
                                        <input id="t-exampleFormControlInput2ee" value="{{$data->button_link}}" type="text" name="button_link" class="form-control" required value="">
                                    </div>
                                    
                                    <div class="form-group" >
                                        <input type="submit" name="txt" class="mt-4 btn btn-primary" value="Save">
                                        <a href="{{route('media')}}" class="mt-4 btn btn-success">Back</a>
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