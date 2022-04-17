@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Add Programme_status</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}">Dashboard</a></li>
                       <li><a href="#">MIS PORTAL</a></li>
                       <li class="active">Programme_status</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title"> Add Programme status </h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add Programme status</button>
                               <!-- Modal -->
                               @if(session('success_message'))
                                 <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Good! </strong> {{ session('success_message') }}
                                  </div>
                              @endif

                               @if(session('message'))
                                 <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Good! </strong> {{ session('message') }}
                                  </div>
                              @endif
                               <form  action="{{ url('add/programme_status/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">Add Programme status</h4>
                                           </div>
                                           <div class="modal-body">

                                               <div class="form-group">
                                                  <label for="">Add Title<span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('title') is-invalid @enderror" name="title">
                                                   @error('title')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">  Description</label>
                                                   <textarea name="description" id="" class="form-control @error('description') is-invalid @enderror" cols="10">
                                                   </textarea>
                                                   @error('description')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror

                                               </div>

                                               <div class="form-group">
                                                 <label for="">Image<span style="color:red">*</span></label>

                                                     <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                                   @error('image')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>

                                               <div class="form-group">
                                                 <label for="">Another Description if you needed! [optional]</label>
                                                   <textarea name="another_des" id="my_ck_editor" class="form-control my-editor" cols="10"> </textarea>
                                               </div>

                                           </div>
                                           <div class="modal-footer">
                                               <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                               <button type="submit" id="add-row" class="btn btn-success">Add </button>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               </form>
                               <div class="table-responsive" style=" margin-top: 50px; padding: 0px 50px;">
                                 <h2 style="color:red; margin-bottom:30px; text-align:center">View Programe status</h2>
                                   <table id="example3_leng" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>Title</th>
                                               <th>Description</th>
                                               <th>Image</th>
                                               <th>Created At</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>


                                       @foreach ($addprogramme_status_info as  $addprogramme_status_infos)
                                         <tr>
                                             <td> {{ $addprogramme_status_infos->id }}</td>
                                             <td>{{ $addprogramme_status_infos->title }}</td>
                                             <td><p style="height: 150px;overflow: scroll;">{{ $addprogramme_status_infos->description }}</p></td>
                                             <td>
                                               <img src="{{ asset('uploads/programme_status_img') }}/{{ $addprogramme_status_infos->image }}" alt="not fount" style="width:100px; height:70px;">
                                             </td>

                                             <td><p style="height: 150px;overflow: scroll;">{{ $addprogramme_status_infos->another_description }}</p></td>
                                             <th>{{ $addprogramme_status_infos->created_at->format('d-F-Y  h:i:s A') }} </th>
                                             <th>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $addprogramme_status_infos->id }}">Edit</a>

                                            <div class="modal fade" id="{{ $addprogramme_status_infos->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel">Edit Programme status</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                       <form action="{{ url('programme_status/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="programe_id" value="{{ $addprogramme_status_infos->id }}">

                                                         <div class="form-group">
                                                           <label for=""> Title</label>
                                                             <input type="text" id="name-input" class="form-control" name="title" placeholder="enter your title" value="{{ $addprogramme_status_infos->title }}">
                                                         </div>

                                                         <div class="form-group">
                                                           <label for="">  Description</label>
                                                             <textarea name="description" id="" class="form-control" cols="10">
                                                               {{ $addprogramme_status_infos->description }}
                                                             </textarea>
                                                         </div>

                                                         <div class="form-group">
                                                            <label for="">Image</label>
                                                             <input type="file" id="name-input" class="form-control" name="image">
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
                                               <a class="btn btn-danger btn-sm" href="{{ url('addprogramme_status/delete') }}/{{ $addprogramme_status_infos->id }}"  onclick="return confirm('are you sure delete product [{{ $addprogramme_status_infos->title }}]')">Delete</a>
                                             </th>
                                         </tr>
                                         @endforeach

                                   </table>
                               </div>
                           </div>
                       </div>
                   </div>
               </div><!-- Row -->
           </div><!-- Main Wrapper -->
           <div class="page-footer">
               <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
           </div>
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
