@extends("backend.layouts.backend")
@section('about-active')
active
@endsection
@section('about-report-active')
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
            <div id="basic" class="col-lg-6 col-md-6 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Presentation</h4>
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            

                                            <th class="no-content">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($datas as $data)
                                        <tr>
                                            
                                            <td>{{$data->title}}</td>
                                            
                                            <td>
                                                <a href="{{route('about.presentation.delete',$data->id)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" style="color: red;" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>

                                                <a href="{{route('about.presentation.edit',$data->id)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                                                
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
                                <form action="{{route('about.presentation.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input id="" type="hidden" name="about_report_id" value="{{$p_id}}" class="form-control" value="">
                                    <div class="form-group" >
                                        <label for="heading">Heading</label>
                                        <input id="t-heading" type="text" name="heading" class="form-control" required value="">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput5">Title</label>
                                        <input id="t-exampleFormControlInput5" type="text" name="title" class="form-control" required value="">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput443">Description</label>
                                        
                                        <textarea class="form-control" rows="10" name="description"></textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlFile11">Image</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="image" id="exampleFormControlFile11" required>
                                        <p class="p-color"> Required dimension (W:287 H:270)</p>
                                    </div>
                                    <div class="form-group" >
                                        <label for="file">File</label>
                                        <input type="file" class="form-control-file" accept="*/" name="file" id="file" required>
                                       
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