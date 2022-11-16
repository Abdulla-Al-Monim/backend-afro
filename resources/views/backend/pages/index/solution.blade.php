
@extends("backend.layouts.backend")
@section('index-active')
active
@endsection
@section('index-active-solution')
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
                                <h4>Solution Section</h4>
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">
                                <form action="{{route('index.solution.update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput1">Heading</label>
                                        <input id="exampleFormControlInput1" type="text" name="heading" class="form-control" required value="{{$solution->heading}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput2">Description</label>
                                        <textarea class="form-control" rows="10" name="description">{{$solution->description}}</textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput3">Text one</label>
                                        <input id="exampleFormControlInput3" type="text" name="text_one" class="form-control" required value="{{$solution->text_one}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput4">Text two</label>
                                        <input id="exampleFormControlInput4" type="text" name="text_two" class="form-control" required value="{{$solution->text_two}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput5">Text three</label>
                                        <input id="exampleFormControlInput5" type="text" name="text_three" class="form-control" required value="{{$solution->text_three}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput6">Text four</label>
                                        <input id="exampleFormControlInput6" type="text" name="text_four" class="form-control" required value="{{$solution->text_four}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput7">Text five</label>
                                        <input id="exampleFormControlInput7" type="text" name="text_five" class="form-control" required value="{{$solution->text_five}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput8">Text six</label>
                                        <input id="exampleFormControlInput3" type="text" name="text_six" class="form-control" required value="{{$solution->text_six}}">
                                    </div>
                                    <!-- <div class="form-group" >
                                        <label for="exampleFormControlFile8">Background Image</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="image" id="exampleFormControlFile8">
                                    </div>
                                    <label for="exampleFormControlFile8" class="p-color">Required dimension (W:535 H:74)</label> -->
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