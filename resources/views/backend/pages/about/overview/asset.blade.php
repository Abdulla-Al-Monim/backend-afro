@extends("backend.layouts.backend")
@section('about-active')
active
@endsection
@section('about-overview-active')
active
@endsection
@section('about-overview-asset-active')
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
                                <h4>Our asset</h4>
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">
                                <form action="{{route('about.assert.update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput51">Title</label>
                                        <input id="t-exampleFormControlInput51" type="text" name="title" class="form-control" required value="{{$data->title}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput512">Text</label>
                                        <input id="t-exampleFormControlInput512" type="text" name="text" class="form-control" required value="{{$data->text}}">
                                    </div>
                                    
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput511">Site one text</label>
                                        <input id="t-exampleFormControlInput511" type="text" name="site_one" class="form-control" required value="{{$data->site_one}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput5111">Site  one count</label>
                                        <input id="t-exampleFormControlInput5111" type="number" name="site_percentage_one" class="form-control" required value="{{$data->site_percentage_one}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput52">Site two text</label>
                                        <input id="t-exampleFormControlInput52" type="text" name="site_two" class="form-control" required value="{{$data->site_two}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput523">Site  two count</label>
                                        <input id="t-exampleFormControlInput523" type="number" name="site_percentage_two" class="form-control" required value="{{$data->site_percentage_two}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput52">Site three text</label>
                                        <input id="t-exampleFormControlInput52" type="text" name="site_three" class="form-control" required value="{{$data->site_three}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput5234">Site   three count</label>
                                        <input id="t-exampleFormControlInput5234" type="number" name="site_percentage_three" class="form-control" required value="{{$data->site_percentage_three}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput52345">Button text</label>
                                        <input id="t-exampleFormControlInput52345" type="text" name="button_text" class="form-control" required value="{{$data->button_text}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput532">Button link</label>
                                        <input id="t-exampleFormControlInput532" type="text" name="button_link" class="form-control" required value="{{$data->button_link}}">
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