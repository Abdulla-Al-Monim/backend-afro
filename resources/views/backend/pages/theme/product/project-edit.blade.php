@extends("backend.layouts.backend")
@section('theme-active')
active
@endsection
@section('theme-project-active')
active
@endsection
@section('theme-project-portfolio-active')
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
                                <h4>Project Update</h4>
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">
                                <form action="{{route('theme.porfolio.project.update',$data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group" >
                                        <label for="name">Country</label>
                                        <select class="form-control  basic" id="id" name="contact_country_id" required>
                                            <option value="">Select Company</option>
                                        @foreach(App\Models\ContactCountry::get() as $com)
                                        <option value="{{$com->id}}" @if($com->id == $data->contact_country_id) selected @endif>{{$com->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                   
                                    <div class="form-group" >
                                        <label for="name">Client Name</label>
                                        <select class="form-control  basic" id="id" name="index_review_slider_id" required>
                                            
                                        @foreach(App\Models\IndexReviewSlider::get() as $com)
                                        <option value="{{$com->id}}"  @if($com->id == $data->index_review_slider_id) selected @endif>{{$com->title}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="idSub">Country</label>
                                        <select class="form-control  basic"  id="idSub" name="region_id" data-validation="required" required>
                                           @foreach(App\Models\Region::get() as $re)
                                                    <option value="{{$re->id}}"  @if($re->id === $data->region_id) selected @endif > {{$re->name}}</option>   
                                                @endforeach                
                                        </select>
                                    </div> -->
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput51">Project Name</label>
                                        <input id="t-exampleFormControlInput51" type="text" name="title" class="form-control" required value="{{$data->title}}">
                                    </div>
                                    
                                    
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput512">Starting Date</label>
                                        <input id="t-exampleFormControlInput512" type="date" name="starting_date" class="form-control" required value="{{$data->starting_date}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput511">End Date</label>
                                        <input id="t-exampleFormControlInput511" type="date" name="end_date" class="form-control" required value="{{$data->end_date}}">
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput4">Description</label>
                                        
                                        <textarea class="form-control ckeditor" rows="10" name="description">{{$data->description}}</textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlInput44">Key Achievements</label>
                                        
                                        <textarea class="form-control ckeditor" rows="10" name="key_achievement">{{$data->key_achievement}}</textarea>
                                    </div>
                                    
                                    <div class="form-group" >
                                        <label for="exampleFormControlFile12">Image</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="image" id="exampleFormControlFile12" >
                                        <label for="exampleFormControlFile12" class="p-color">Required dimension (W:535 H:289)</label>
                                    </div>
                                    <div class="form-group" >
                                        <label for="exampleFormControlFile121">Description Image</label>
                                        <input type="file" class="form-control-file" accept=".png, .jpg, .jpeg, .webp" name="d_image" id="exampleFormControlFile121" >
                                        <label for="exampleFormControlFile121" class="p-color">Required dimension (W:2100 H:1094)</label>
                                    </div>
                                    <div class="form-group" >
                                        <input type="submit" name="txt" class="btn btn-primary btn mb-4 mr-3" onclick="hideBtn()"  value="Save" id="btnLoad">
                                        <!-- <input type="submit" name="txt" class="mt-4 btn btn-primary "  value="Save"> -->

                                       <p class="btn btn-primary btn mb-4 mr-3" id="btnNnload"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin mr-2"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg>  Loading</p>
                                        <a href="{{route('theme.porfolio.project')}}" class="mt-4 btn btn-success">Back</a>
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
    <script type="text/javascript">
  $(document).ready(function() {
    $('select[name="company_id"]').on('change', function(){
        var company_id = $(this).val();
        if(company_id) {
            $.ajax({
                url: "{{  url('/admin/theme/project/region-ajax/') }}/"+company_id,
                type:"GET",
                dataType:"json",
                success:function(data) {
                    console.log(data)
                    $('select[name="region_id"]').html('');
                   var d =$('select[name="region_id"]').empty();
                      $.each(data, function(key, value){

                          $('select[name="region_id"]').append('<option value="'+ value.id +'">' + value.name + '</option>');

                      });

                },

            });
        } else {
            alert('danger');
        }

    });

});
</script>
<script type="text/javascript">
        $('#btnNnload').hide();
        $('#btnLoad').show();
        function hideBtn(){
            $('#btnNnload').show();
            $('#btnLoad').hide();
        }
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection