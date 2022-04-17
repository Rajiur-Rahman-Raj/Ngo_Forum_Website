@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Water Quality Testing Lab Micro Kit</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="index.html">Home</a></li>
                       <li><a href="#">Service</a></li>
                       <li class="active">Micro Kit</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title">Micro Kit Add View</h4>
                           </div>
                           @if(session('success_message'))
                             <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Good! </strong> {{ session('success_message') }}
                              </div>
                          @endif
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm mb-3" data-toggle="modal" data-target="#myModal">Update Micro Kit</button>
                               <button type="button" class="btn btn-success m-b-sm mb-3" data-toggle="modal" data-target="#myModal2">Add Video Tutorials of field kits</button>
                               <!-- Modal -->
                               @foreach ($microkit_infos as $microkit_info)
                                 <form action="{{ url('update/microkit/insert') }}" method="post" enctype="multipart/form-data">
                                   @csrf
                                   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                     <div class="modal-dialog">
                                       <div class="modal-content">
                                         <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                           <h4 class="modal-title" id="myModalLabel">Update Micro Kit</h4>
                                         </div>
                                         <div class="modal-body">
                                           <div class="form-group">
                                             <input type="hidden" id="name-input" class="form-control" name="microkit_id" value="{{ $microkit_info->id }}">
                                           </div>
                                           <div class="form-group">
                                             <label for="">Microkit Image</label> <span style="color:red">*</span>
                                             <input type="file" id="name-input" class="form-control" name="logo" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Description</label> <span style="color:red">*</span>

                                             <textarea name="description" type="text" rows="8" cols="80" required>
                                               {{ $microkit_info->description }}
                                             </textarea>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Type Of Result (Qualitative)</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control" name="qualitative" value="{{ $microkit_info->qualitative }}" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Origin</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control" name="origin" value="{{ $microkit_info->origin }}" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Location</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control"  name="location" value="{{ $microkit_info->location }} " required>
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

                               {{-- video tutorial of field kits form --}}

                               {{-- other service form --}}

                               <form  action="{{ url('video/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">Add Video Tutorials</h4>
                                           </div>
                                           <div class="modal-body">
                                               <div class="form-group">
                                                 <label for="">Add Video Link</label>
                                                   <textarea name="video_link"  class="form-control" cols="10" required> </textarea>
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
                                    <h2 style="color:red; margin-bottom:30px; text-align:center">View Video Tutorials Link</h2>
                                     <thead>
                                         <tr>
                                             <th>Video Tutorials Link</th>
                                             <th>created_at</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>

                                     @foreach ($video_links as $video_link)
                                       <tr>
                                           <td> {{ $video_link->video_link }}</td>
                                           <th>{{ $video_link->created_at->format('d-F-Y  h:i:s A') }}</th>
                                           <th>
                                             <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#video{{ $video_link->id }}">Edit</a>
                                          <div class="modal fade" id="video{{ $video_link->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                           <div class="modal-dialog">
                                               <div class="modal-content">
                                                   <div class="modal-header">
                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                       <h3 class="modal-title" id="myModalLabel">Edit</h3>
                                                   </div>
                                                   <div class="modal-body">
                                                      <form action="{{ url('video/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                       @csrf
                                                       <input type="hidden" name="video_id" value="{{ $video_link->id }}">
                                                       <div class="form-group">
                                                         <label for="">Update Video Link</label>
                                                           <textarea name="video_link"  class="form-control" cols="10" required>
                                                             {{ $video_link->video_link }}
                                                           </textarea>
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
                                             <a class="btn btn-danger btn-sm" href="{{ url('video/delete') }}/{{ $video_link->id }}" onclick="return confirm('are you sure delete data!')">Delete</a>
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
