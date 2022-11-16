@extends("backend.layouts.backend")
@section('theme-active')
active
@endsection
@section('theme-contact-a-active')
active
@endsection
@section('theme-contact-country-active')
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
            <div id="basic" class="col-lg-6 col-md-6 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Countries</h4>
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th class="no-content">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($datas as $data)
                                        <tr>
                                            
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>
                                                <a href="{{route('contact.country.delete',$data->id)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" style="color: red;" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
                                                <a href="{{route('contact.country.edit',$data->id)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                                                
                                            </td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>                                        
                        </div>

                    </div>
                </div>
            </div>
            <div id="basic" class="col-lg-6 col-md-6 layout-spacing">
                <div class="statbox widget box box-shadow">
                    
                        <div class="row">
                                           
                        </div>
                    
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Add</h4>
                            </div>  
                            <div class=" col-12">
                                <form action="{{route('contact.country.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput3">Country Name</label>
                                        <input id="exampleFormControlInput3" type="text" name="name" class="form-control" required value="">
                                    </div>
                                    <div class="form-group" >
                                        <label for="registation_name">Registation Name</label>
                                        <input id="registation_name" type="text" name="registation_name" class="form-control" required value="">
                                    </div>
                                    <div class="form-group" >
                                        <label for="address">Address</label>
                                        <input id="address" type="text" name="address" class="form-control" required value="">
                                    </div>
                                    <div class="form-group" >
                                        <label for="phone">Phone</label>
                                        <input id="phone" type="text" name="phone" class="form-control" required value="">
                                    </div>
                                    <div class="form-group" >
                                        <label for="country_manager">Country manager</label>
                                        <input id="country_manager" type="text" name="country_manager" class="form-control" required value="">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput33">Email</label>
                                        <input id="exampleFormControlInput33" type="email" name="email" class="form-control" required value="">
                                    </div>
                                    <h4>Location</h4>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput32">Longitude</label>
                                        <input id="exampleFormControlInput32" type="text" name="longitude" class="form-control" required value="">
                                    </div>
                                    <div class="form-group" >
                                        <label for="latitude">Latitude</label>
                                        <input id="latitude" type="text" name="latitude" class="form-control" required value="">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlFile1">Country Icon</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="Icon" id="exampleFormControlFile1">
                                        <p class="p-color"> Required dimension (W:200 H:40)</p>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlFile11">Image</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="image" id="exampleFormControlFile11">
                                        <p class="p-color"> Required dimension (W:287 H:170)</p>
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