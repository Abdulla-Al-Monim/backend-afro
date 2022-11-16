@extends("backend.layouts.backend")
@section('index-active')
active
@endsection
@section('index-active-button')
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
                                <h4>Button Update</h4>
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">
                                <form action="{{route('index.header.button.update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput2">Button one text</label>
                                        <input id="t-exampleFormControlInput2" type="text" name="text_one" class="form-control" required value="{{$headerButtton->text_one}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput3">Button one link</label>
                                        <input id="exampleFormControlInput3" type="text" name="link_one" class="form-control" required value="{{$headerButtton->link_one}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput4">Button two text</label>
                                        <input id="t-exampleFormControlInput4" type="text" name="text_two" class="form-control" required value="{{$headerButtton->text_two}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput5">Button two link</label>
                                        <input id="exampleFormControlInput5" type="text" name="link_two" class="form-control" required value="{{$headerButtton-> link_two}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput6">Button three text</label>
                                        <input id="t-exampleFormControlInput6" type="text" name="text_three" class="form-control" required value="{{$headerButtton->text_three}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput7">Button three link</label>
                                        <input id="exampleFormControlInput7" type="text" name="link_three" class="form-control" required value="{{$headerButtton->link_three}}">
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