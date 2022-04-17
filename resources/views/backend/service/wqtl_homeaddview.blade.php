@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Water Quality Testing Lab Home Page</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="index.html">Home</a></li>
                       <li><a href="#">Service</a></li>
                       <li class="active">Wqtl add home Page</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title">Wqtl home page add view</h4>
                           </div>
                           @if(session('success_message'))
                             <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Good! </strong> {{ session('success_message') }}
                              </div>
                          @endif
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm mb-3" data-toggle="modal" data-target="#myModal">Update Wqtl home page Description</button>
                               <button type="button" class="btn btn-success m-b-sm mb-3" data-toggle="modal" data-target="#myModal2">Add Wqtl home image</button>
                               <!-- Modal -->
                               @foreach ($wqtl_home_infos as $wqtl_home_info)
                                 <form action="{{ url('update/wqtl_home/insert') }}" method="post" enctype="multipart/form-data">
                                   @csrf
                                   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                     <div class="modal-dialog">
                                       <div class="modal-content">
                                         <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                           <h4 class="modal-title" id="myModalLabel">Update wqtl home Description</h4>
                                         </div>
                                         <div class="modal-body">
                                           <div class="form-group">
                                             <input type="hidden" id="name-input" class="form-control" name="wqtl_id" value="{{ $wqtl_home_info->id }}">
                                           </div>
                                           <div class="form-group">
                                             <label for="">Update Description</label> <span style="color:red">*</span>

                                             <textarea name="description" type="text" rows="8" cols="80" class="form-control my-editor" id="my_ck_editor" required>
                                               {{ $wqtl_home_info->description }}
                                             </textarea>
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

                               <form  action="{{ url('wqtl/homeimage/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">Add wqtl home image</h4>
                                           </div>
                                           <div class="modal-body">
                                               <div class="form-group">
                                                 <label for="">Choose Image</label>
                                                 <input type="file" name="image" class="form-control" required>
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

                               <div class="table-responsive" style="margin-top: 50px; padding:0px 50px;">
                                 <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                    <h2 style="color:red; margin-bottom:30px; text-align:center">View Wqtl home images</h2>
                                     <thead>
                                         <tr>
                                             <th>wqtl home images</th>
                                             <th>created_at</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>

                                     @foreach ($wqtl_home_images as $wqtl_home_image)
                                       <tr>
                                         <td>
                                           <img src="{{ asset('uploads/wqtlhome_image') }}/{{ $wqtl_home_image->image }}" alt="not fount" style="width:100px; height:70px;">
                                         </td>
                                           <th>{{ $wqtl_home_image->created_at->format('d-F-Y  h:i:s A') }}</th>
                                           <th>
                                             <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#wqtl{{ $wqtl_home_image->id }}">Edit</a>
                                          <div class="modal fade" id="wqtl{{ $wqtl_home_image->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                           <div class="modal-dialog">
                                               <div class="modal-content">
                                                   <div class="modal-header">
                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                       <h3 class="modal-title" id="myModalLabel">Edit</h3>
                                                   </div>
                                                   <div class="modal-body">
                                                      <form action="{{ url('wqtlhomeimage/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                       @csrf
                                                       <input type="hidden" name="homeimage_id" value="{{ $wqtl_home_image->id }}">
                                                       <div class="form-group">
                                                         <label for="">Update Image</label>
                                                         <input type="file" name="image" class="form-control" required>
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
                                             <a class="btn btn-danger btn-sm" href="{{ url('wqtl_home_image/delete') }}/{{ $wqtl_home_image->id }}" onclick="return confirm('are you sure delete data!')">Delete</a>
                                           </th>
                                       </div>

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
