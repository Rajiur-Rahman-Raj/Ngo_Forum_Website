@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Water Quality Testing Lab Cox Lab</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="index.html">Home</a></li>
                       <li><a href="#">Service</a></li>
                       <li class="active">Cox Lab</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title">Cox Lab ADD VIEW</h4>
                           </div>
                           @if(session('success_message'))
                             <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Good! </strong> {{ session('success_message') }}
                              </div>
                          @endif
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm mb-3" data-toggle="modal" data-target="#myModal">Update Cox Lab</button>
                               <button type="button" class="btn btn-success m-b-sm mb-3" data-toggle="modal" data-target="#myModal2">Add Cox Lab Parameter Wise Test</button>
                               <button type="button" class="btn btn-success m-b-sm mb-3" data-toggle="modal" data-target="#myModal3">Add Cos Lab Other Services</button>
                               <!-- Modal -->
                               @foreach ($coxlab_infos as $coxlab_info)
                                 <form action="{{ url('update/coxlab/insert') }}" method="post" enctype="multipart/form-data">
                                   @csrf
                                   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                     <div class="modal-dialog">
                                       <div class="modal-content">
                                         <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                           <h4 class="modal-title" id="myModalLabel">Update Cox Lab</h4>
                                         </div>
                                         <div class="modal-body">
                                           <div class="form-group">
                                             <input type="hidden" id="name-input" class="form-control" name="coxlab_id" value="{{ $coxlab_info->id }}">
                                           </div>
                                           <div class="form-group">
                                             <label for="">Coxlab logo</label> <span style="color:red">*</span>
                                             <input type="file" id="name-input" class="form-control" name="logo" required>
                                           </div>
                                           <div class="form-group">
                                             <label for=""> Title </label> <span style="color:red">*</span>
                                             <input type="text" id="name-input" class="form-control" name="title" value="{{ $coxlab_info->title }}" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Description</label> <span style="color:red">*</span>

                                             <textarea name="description" type="text" rows="8" cols="80" required>
                                               {{ $coxlab_info->description }}
                                             </textarea>
                                           </div>
                                           <div class="form-group">
                                             <label for="" style="color:red; font-size:19px"> Add Contact Information for wqtl </label><br>
                                             <label for="">Name</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control" name="name" value="{{ $coxlab_info->name }}" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Designation</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control" name="designation" value="{{ $coxlab_info->designation }}" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Phone</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control"  name="phone" value="{{ $coxlab_info->phone }}" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Email</label> <span style="color:red">*</span>
                                             <input type="email" id="position-input" class="form-control"  name="email" value="{{ $coxlab_info->email }}" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Location</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control"  name="location" value="{{ $coxlab_info->location }} " required>
                                           </div>

                                           <div class="form-group">
                                             <label for="" style="color:red; font-size:19px"> Add Focal Person for wqtl </label><br>
                                             <label for="">Name</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control" name="focal_name" value="{{ $coxlab_info->focal_name }}" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Designation</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control" name="focal_designation" value="{{ $coxlab_info->focal_designation }} " required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Phone</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control"  name="focal_phone" value="{{ $coxlab_info->focal_phone }}" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Email</label> <span style="color:red">*</span>
                                             <input type="email" id="position-input" class="form-control"  name="focal_email" value="{{ $coxlab_info->focal_email }}" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Location</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control"  name="focal_location" value="{{ $coxlab_info->focal_location }}" required>
                                           </div>
                                         </div>
                                         <div class="modal-footer">
                                           <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                           <button type="submit" id="add-row" class="btn btn-success">Update</button>
                                         </div>
                                       </div>
                                     </div>
                                   </div>
                                 </form>
                               @endforeach

                               {{-- test rate content form --}}
                               <form action="{{ url('coxlab_test_rate/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                                 <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                     <div class="modal-content">
                                       <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                         <h4 class="modal-title" id="myModalLabel">Add Coxlab Test Rate</h4>
                                       </div>
                                       <div class="modal-body">
                                         <div class="form-group">
                                           <label for="">SL No.</label> <span style="color:red">*</span>
                                           <input type="text" id="name-input" class="form-control" name="serial_number" required>
                                         </div>
                                         <div class="form-group">
                                           <label for="">Parameters</label> <span style="color:red">*</span>
                                           <input type="text" id="position-input" class="form-control" name="parameters" required>
                                         </div>
                                         <div class="form-group">
                                           <label for="">Method</label> <span style="color:red">*</span>
                                           <input type="text" id="position-input" class="form-control" name="method" required>
                                         </div>
                                         <div class="form-group">
                                           <label for="">Unit Cost (BDT)</label> <span style="color:red">*</span>
                                           <input type="text" id="position-input" class="form-control"  name="cost" required>
                                         </div>
                                       </div>
                                       <div class="modal-footer">
                                         <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                         <button type="submit" id="add-row" class="btn btn-success">Add</button>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                               </form>

                               {{-- other service form --}}

                               <form  action="{{ url('coxlab/other/service/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">Add Cox Lab Other Services</h4>
                                           </div>
                                           <div class="modal-body">
                                               <div class="form-group">
                                                 <label for="">write other services</label>
                                                   <textarea name="service" id="my_ck_editor" class="form-control my-editor" cols="10" required> </textarea>
                                               </div>
                                           </div>
                                           <div class="modal-footer">
                                               <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                               <button type="submit" id="add-row" class="btn btn-success">Add</button>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               </form>

                               <div class="table-responsive" style="margin-top: 50px; padding: 0px 50px;">
                                 <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                    <h2 style="color:red; margin-bottom:30px; text-align:center">View Cox Lab Test Rate</h2>
                                     <thead>
                                         <tr>
                                             <th>SL No.</th>
                                             <th>Parameters</th>
                                             <th>Method</th>
                                             <th>Unit Cost (BDT)</th>
                                             <th>created_at</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>

                                     @foreach ($coxlab_test_rate_contents as $coxlab_test_rate_content)
                                       <tr>
                                           <td> {{ $coxlab_test_rate_content->serial_number }}</td>
                                           <td> {{ $coxlab_test_rate_content->parameters }}</td>
                                           <td> {{ $coxlab_test_rate_content->method }}</td>
                                           <td> {{ $coxlab_test_rate_content->cost }}</td>
                                           <th>{{ $coxlab_test_rate_content->created_at->format('d-F-Y  h:i:s A') }}</th>
                                           <th>
                                             <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#coxlab{{ $coxlab_test_rate_content->id }}">Edit</a>
                                          <div class="modal fade" id="coxlab{{ $coxlab_test_rate_content->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                           <div class="modal-dialog">
                                               <div class="modal-content">
                                                   <div class="modal-header">
                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                       <h3 class="modal-title" id="myModalLabel">Edit</h3>
                                                   </div>
                                                   <div class="modal-body">
                                                      <form action="{{ url('coxlab_test_rate_content/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                       @csrf
                                                       <input type="hidden" name="testrate_id" value="{{ $coxlab_test_rate_content->id }}">
                                                       <div class="form-group">
                                                         <label for="">SL No.</label> <span style="color:red">*</span>
                                                         <input type="text" id="name-input" class="form-control" name="serial_number" value="{{ $coxlab_test_rate_content->serial_number }}" required>
                                                       </div>
                                                       <div class="form-group">
                                                         <label for="">Parameters</label> <span style="color:red">*</span>
                                                         <input type="text" id="position-input" class="form-control" name="parameters" value="{{ $coxlab_test_rate_content->parameters }}" required>
                                                       </div>
                                                       <div class="form-group">
                                                         <label for="">Method</label> <span style="color:red">*</span>
                                                         <input type="text" id="position-input" class="form-control" name="method" value="{{ $coxlab_test_rate_content->method }}" required>
                                                       </div>
                                                       <div class="form-group">
                                                         <label for="">Unit Cost (BDT)</label> <span style="color:red">*</span>
                                                         <input type="text" id="position-input" class="form-control"  name="cost" value="{{ $coxlab_test_rate_content->cost }}"  required>
                                                       </div>
                                                   </div>
                                                   <div class="modal-footer">
                                                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                       <button type="submit" class="btn btn-success">Save changes</button>
                                                   </div>
                                                </form>
                                               </div>
                                           </div>
                                       </div>
                                             <a class="btn btn-danger btn-sm" href="{{ url('coxlab_test_rate_content/delete') }}/{{ $coxlab_test_rate_content->id }}" onclick="return confirm('are you sure delete data!')">Delete</a>
                                           </th>
                                       </tr>

                                       @endforeach

                               <div class="table-responsive" style="margin-top: 50px; padding:0px 50px;">
                                 <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                    <h2 style="color:red; margin-bottom:30px; text-align:center">View Cox Lab Other Services</h2>
                                     <thead>
                                         <tr>
                                             <th>Other Services</th>
                                             <th>created_at</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>

                                     @foreach ($coxlab_other_services as $coxlab_other_service)
                                       <tr>
                                           <td> {{ $coxlab_other_service->service }}</td>
                                           <th>{{ $coxlab_other_service->created_at->format('d-F-Y  h:i:s A') }}</th>
                                           <th>
                                       </div>
                                             <a class="btn btn-danger btn-sm" href="{{ url('coxlab_test_rate_content/delete') }}/{{ $coxlab_other_service->id }}" onclick="return confirm('are you sure delete data!')">Delete</a>
                                           </th>
                                       </tr>

                                       @endforeach

                           </div>
                       </div>
                   </div>
               </div><!-- Row -->
           </div><!-- Main Wrapper -->
           {{-- <div class="page-footer">
               <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
           </div> --}}
       </div><!-- Page Inner -->
   </main><!-- Page Content -->

   @section('custom_js')
     <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

     <script>
        var editor_config = {
          path_absolute : "/",
          selector: "textarea.my-editor",
          plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
          relative_urls: false,
          file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
              cmsURL = cmsURL + "&type=Images";
            } else {
              cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
              file : cmsURL,
              title : 'Filemanager',
              width : x * 0.8,
              height : y * 0.8,
              resizable : "yes",
              close_previous : "no"
            });
          }
        };

        tinymce.init(editor_config);
      </script>

    <script>
      CKEDITOR.replace('my_ck_editor', options);
    </script>
   @endsection
@endsection
