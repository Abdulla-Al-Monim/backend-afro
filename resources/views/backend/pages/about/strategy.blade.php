@extends("backend.layouts.backend")
@section('about-active')
active
@endsection
@section('about-strategy-active')
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
                                <h4>Strategy</h4>
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">
                                <form action="{{route('about.strategy.update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput5">Title one</label>
                                        <input id="t-exampleFormControlInput5" type="text" name="title_one" class="form-control" required value="{{$data->title_one}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput443">Description one</label>
                                        
                                        <textarea class="form-control ckeditor" rows="10" name="description_one">{{$data->description_one}}</textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlFile1">Image one</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="image_one" id="exampleFormControlFile1">
                                        <label for="exampleFormControlFile1" class="p-color">Required dimension (W:860 H:410)</label>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput53">Title two</label>
                                        <input id="t-exampleFormControlInput53" type="text" name="title_two" class="form-control" required value="{{$data->title_two}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput44">Description two</label>
                                        
                                        <textarea class="form-control ckeditor" rows="10" name="description_two">{{$data->description_two}}</textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlFile11">Image two</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="image_two" id="exampleFormControlFile11">
                                        <label for="exampleFormControlFile11" class="p-color">Required dimension (W:420 H:344)</label>
                                    </div>
                                   <!--  <div class="form-group" >
                                        <label for="exampleFormControlInput53">Button text one</label>
                                        <input id="t-exampleFormControlInput53" type="text" name="button_one_text" class="form-control" required value="{{$data->button_one_text}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput532">Button link one</label>
                                        <input id="t-exampleFormControlInput532" type="text" name="button_link_one" class="form-control" required value="{{$data->button_link_one}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput533">Button text two</label>
                                        <input id="t-exampleFormControlInput533" type="text" name="button_two_text" class="form-control" required value="{{$data->button_two_text}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput53332">Button link two</label>
                                        <input id="t-exampleFormControlInput53332" type="text" name="button_link_two" class="form-control" required value="{{$data->button_link_two}}">
                                    </div> -->
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput443">Footer</label>
                                        
                                        <textarea class="form-control ckeditor" rows="10" name="footer">{{$data->footer}}</textarea>
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