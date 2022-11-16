@extends("backend.layouts.backend")
@section('index-active')
active
@endsection
@section('index-active-academy')
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
                                <h4>Approach</h4>
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">
                                <form action="{{route('index.academy.update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput1">Title</label>
                                        <input id="t-exampleFormControlInput1" type="text" name="title" class="form-control" required value="{{$academy->title}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlFile2">Icon One</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="icon_one" id="exampleFormControlFile2">
                                        <label for="exampleFormControlFile2" class="p-color">Required dimension (W:24 H:24)</label>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput3"> Text one</label>
                                        <input id="t-exampleFormControlInput3" type="text" name="text_one" class="form-control" required value="{{$academy->text_one}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput43">Icon two</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="icon_two" id="exampleFormControlFile43">
                                        <label for="exampleFormControlFile43" class="p-color">Required dimension (W:24 H:24)</label>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput5"> Text two</label>
                                        <input id="t-exampleFormControlInput5" type="text" name="text_two" class="form-control" required value="{{$academy->text_two}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlFile6">Icon three</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="icon_three" id="exampleFormControlFile6">
                                        <label for="exampleFormControlFile6" class="p-color">Required dimension (W:24 H:24)</label>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput27"> Text three</label>
                                        <input id="t-exampleFormControlInput27" type="text" name="text_three" class="form-control" required value="{{$academy->text_three}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlFile18">Icon four</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="icon_four" id="exampleFormControlFile18">
                                        <label for="exampleFormControlFile18" class="p-color">Required dimension (W:24 H:24)</label>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput21"> Text four</label>
                                        <input id="t-exampleFormControlInput2"1 type="text" name="text_four" class="form-control" required value="{{$academy->text_four}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput21"> Youtube link</label>
                                        <input id="t-exampleFormControlInput2"1 type="text" name="link" class="form-control" required value="{{$academy->link}}">
                                    </div>
                                    <!-- <div class="form-group" >
                                        <label for="exampleFormControlFile12">Image</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="image" id="exampleFormControlFile12">
                                    </div> -->
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