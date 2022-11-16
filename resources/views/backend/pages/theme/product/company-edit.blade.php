@extends("backend.layouts.backend")
@section('theme-active')
active
@endsection
@section('theme-project-active')
active
@endsection
@section('theme-project-company-active')
active
@endsection
@section("style")
    <link href="{{ asset('backend') }}/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/editors/markdown/simplemde.min.css">
        <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('backend') }}/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/plugins/select2/select2.min.css">
    <link href="{{ asset('backend') }}/assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/plugins/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/plugins/select2/select2.min.css">
    
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
                                <h4>Company Update</h4>
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">
                                <form action="{{route('theme.project.community.update',$data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput3">Name</label>
                                        <input id="exampleFormControlInput3" type="text" name="name" class="form-control" required value="{{$data->name}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput33">Address</label>
                                        <input id="exampleFormControlInput33" type="text" name="address" class="form-control" required value="{{$data->address}}">
                                    </div>
                                    <h4>Location</h4>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput32">Longitude</label>
                                        <input id="exampleFormControlInput32" type="text" name="longitude" class="form-control" required value="{{$data->companyLocation->longitude}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="latitude">Latitude</label>
                                        <input id="latitude" type="text" name="latitude" class="form-control" required value="{{$data->companyLocation->latitude}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlFile1">Icon</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="Icon" id="exampleFormControlFile1">
                                        <p class="p-color"> Required dimension (W:200 H:40)</p>
                                    </div>
                                    <div class="form-group" >
                                        <input type="submit" name="txt" class="mt-4 btn btn-primary" value="Update">
                                        <a href="{{route('theme.project.company')}}" class="mt-4 btn btn-success">Back</a>
                                        <!-- <input type="submit" name="txt" class="mt-4 btn btn-primary" value="Back"> -->
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
<script src="{{ asset('backend') }}/plugins/select2/select2.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/select2/custom-select2.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('backend') }}/assets/js/scrollspyNav.js"></script>
    <!-- <script src="plugins/tagInput/tags-input.js"></script> -->
    <script src="{{ asset('backend') }}/assets/js/users/account-settings.js"></script>
    <script src="{{ asset('backend') }}/plugins/table/datatable/datatables.js"></script>
    <script>
        $('#zero-config').DataTable({
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        });
        $(".tagging").select2({
            tags: true
        });
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection