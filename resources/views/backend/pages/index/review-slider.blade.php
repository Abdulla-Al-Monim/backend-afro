@extends("backend.layouts.backend")
@section('index-active')
active
@endsection
@section('index-active-review-slider')
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
            <div id="basic" class="col-lg-6 col-md-6 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Sliders</h4>
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
                                            <!-- <th>Description</th> -->
                                            <th>Shwo home page</th>
                                            <th class="no-content">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($reviews as $review)
                                        <tr>
                                            
                                            <td>{{$review->title}}</td>
                                           <!--  <td>{!!$review->description!!}</td> -->
                                            <td>@if($review->home ==1) Yes @else No @endif</td>
                                            <td>
                                                
                                                <a href="{{route('index.review.slider.delete',$review->id)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" style="color: red;" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>

                                                <a href="{{route('index.review.slider.edit',$review->id)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                                                
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
                                <form action="{{route('index.review.slider.add')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput3">Name</label>
                                        <input id="exampleFormControlInput3" type="text" name="title" class="form-control" required value="">
                                    </div>
                                    <div class="form-group" >
                                        
                                        <label for="exampleFormControlInput4">Description</label>
                                        
                                        <textarea class="form-control ckeditor" rows="10" name="description"></textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput33">Rating</label>
                                         <select class="custom-select" required name="rating">
                                          <option value="1">One Star</option>
                                          <option value="2">Two Star</option>
                                          <option value="3">Three Star</option>
                                          <option value="4">Four Star</option>
                                          <option value="5">Five Star</option>
                                        </select>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput4756">Show Home Page</label>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-radio radio-primary">
                                          <input type="radio" class="new-control-input" name="home" value="1"><span class="new-control-indicator pl-2"></span>Yes
                                        </label>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-radio radio-primary">
                                          <input type="radio" class="new-control-input" name="home" value="0" ><span class="new-control-indicator pl-2"></span>No
                            
                                        </label>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlFile1">Image</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="image" id="exampleFormControlFile1">
                                        <label for="exampleFormControlFile1" class="p-color">Required dimension (W:150 H:150)</label>
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
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection