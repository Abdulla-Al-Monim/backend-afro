@extends("backend.layouts.backend")
@section('theme-active')
active
@endsection
@section('theme-logo-active')
    active
@endsection
@section("style")
    <link href="{{ asset('backend') }}/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/editors/markdown/simplemde.min.css">
        <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('backend') }}/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/plugins/select2/select2.min.css">
    <link href="{{ asset('backend') }}/assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/plugins/dropify/dropify.min.css">
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
                                <h4>Logo Settings</h4>
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">

                                <form method="post" action="{{route('theme.logo.update')}}"enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                       
                                        <input type="file" name="header_logo" id="input-file-max-fst" class="dropify" data-default-file="{{asset($data->header_logo)}}" data-max-file-size="2M" />
                                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Header Logo</p>
                                    </div>
                                   <div class="form-group">
                                       
                                        <input type="file" name="footer_logo" id="input-file-max-fst" class="dropify" data-default-file="{{asset($data->footer_logo)}}" data-max-file-size="2M" />
                                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Footer Logo</p>
                                    </div>
                                    <div class="form-group">
                                       
                                        <input type="file" name="admin_logo" id="input-file-max-fsts" class="dropify" data-default-file="{{asset($data->admin_logo)}}" data-max-file-size="2M" />
                                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Admin Logo</p>
                                    </div>
                                    <div class="form-group">
                                       
                                        <input type="file" id="input-file-max-fsm" name="fav_icon" class="dropify" data-default-file="{{asset($data->fav_icon)}}" data-max-file-size="2M" />
                                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Fav Icon</p>
                                    </div>
                                    <input type="submit" name="txt" class="mt-4 btn btn-primary" value="save">
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
<script src="{{ asset('backend') }}/plugins/dropify/dropify.min.js"></script>
@endsection