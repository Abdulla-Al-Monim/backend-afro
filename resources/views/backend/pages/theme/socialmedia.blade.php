@extends("backend.layouts.backend")
@section('theme-active')
active
@endsection
@section('theme-contact-active')
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
    <div class="container">
        <div class="row layout-top-spacing">
            <div id="basic" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Social media</h4>
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">
                                <form method="post" action="{{route('theme.social.update')}}">
                                    @csrf
                                    
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput533">Facebook</label>
                                        <input id="t-exampleFormControlInput533" type="text" name="facebook" class="form-control" required value="{{$data->facebook}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput5333">Twitter</label>
                                        <input id="t-exampleFormControlInput5333" type="text" name="twitter" class="form-control" required value="{{$data->twitter}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="instra">Instragram</label>
                                        <input id="t-instra" type="text" name="instra" class="form-control" required value="{{$data->instra}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="youtube">Youtube</label>
                                        <input id="t-youtube" type="text" name="youtube" class="form-control" required value="{{$data->youtube}}">
                                    </div>
                                     <input type="submit" name="txt" class="mt-4 btn btn-primary">
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