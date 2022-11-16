@extends("backend.layouts.backend")
@section('sustainability-active')
active
@endsection
@section('sustainability-driving-active')
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
                                <h4> Driving business</h4>
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">
                                <form action="{{route('sustainability.driving.update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput51">Heading</label>
                                        <input id="t-exampleFormControlInput51" type="text" name="title_heading" class="form-control" required value="{{$data->title_heading}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput5">Title one</label>
                                        <input id="t-exampleFormControlInput5" type="text" name="title_one" class="form-control" required value="{{$data->title_one}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput52">Description one</label>
                                        <textarea class="form-control ckeditor" rows="10" name="description_one">{{$data->description_one}}</textarea>
                                    </div>
                                   

                                    <div class="form-group" >
                                        <label for="exampleFormControlInput521">Title two</label>
                                        <input id="t-exampleFormControlInput521" type="text" name="title_two" class="form-control" required value="{{$data->title_two}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput41">Description two</label>
                                        
                                        <textarea class="form-control ckeditor" rows="10" name="description_two">{{$data->description_two}}</textarea>
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