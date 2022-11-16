@extends("backend.layouts.backend")
@section('about-active')
active
@endsection
@section('about-management-active')
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
                                <h4>Management Team Update</h4>
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">
                                <form action="{{route('about.management.update',$data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput5">Name</label>
                                        <input id="t-exampleFormControlInput5" type="text" name="name" class="form-control" required value="{{$data->name}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput5">Email</label>
                                        <input id="t-exampleFormControlInput5" type="email" name="email" class="form-control" required value="{{$data->email}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput52">Designation</label>
                                        <input id="t-exampleFormControlInput52" type="text" name="designation" class="form-control" required value="{{$data->designation}}">
                                    </div>
                                    <!--<div class="form-group" >-->
                                    <!--    <label for="exampleFormControlInput53">Appointed to the Board</label>-->
                                    <!--    <input id="t-exampleFormControlInput53" type="date" name="join_date" class="form-control" required value="{{$data->join_date}}">-->
                                    <!--</div>-->
                                    <!--<div class="form-group" >-->
                                    <!--    <label for="exampleFormControlInput533">Committees</label>-->
                                    <!--    <input id="t-exampleFormControlInput533" type="text" name="committe" class="form-control" required value="{{$data->committe}}">-->
                                    <!--</div>-->
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput443">Executive Statement</label>
                                        
                                        <textarea class="form-control ckeditor" rows="10" name="skill_xperience">{{$data->skill_xperience}}</textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput4434">The Office</label>
                                        
                                        <textarea class="form-control ckeditor" rows="10" name="other">{{$data->other}}</textarea>
                                    </div>
                                    <!--<div class="form-group" >-->
                                    <!--    <label for="appointment">Appointment</label>-->
                                    <!--    <input id="t-appointment" type="text" name="appointment" class="form-control" required value="{{$data->appointment}}">-->
                                    <!--</div>-->
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput533">Facebook</label>
                                        <input id="t-exampleFormControlInput533" type="text" name="fb" class="form-control" required value="{{$data->fb}}">
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
                                    <div class="form-group" >
                                        <label for="Linked">Linked in</label>
                                        <input id="t-Linked" type="text" name="linkenin" class="form-control" required value="{{$data->linkenin}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlFile1">Profile</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="image" id="exampleFormControlFile1">
                                        <p class="p-color"> Required dimension (W:300 H:350)</p>
                                    </div>

                                    <div class="form-group" >
                                        <label for="exampleFormControlFile11">Qr code</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="qr" id="exampleFormControlFile11">
                                        <p class="p-color"> Required dimension (W:100 H:100)</p>
                                    </div>
                                    <div class="form-group" >
                                        <input type="submit" name="txt" class="mt-4 btn btn-primary" value="Update">
                                        <a href="{{route('about.management')}}" class="mt-4 btn btn-success">Back</a>
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