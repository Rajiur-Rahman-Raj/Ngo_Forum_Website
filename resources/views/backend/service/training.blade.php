@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Training page</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}">Dashboard</a></li>
                       <li><a href="#">Service</a></li>
                       <li class="active">Training</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title">Training</h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add Training</button>
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
                               <form  action="{{ url('training/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">Add Training</h4>
                                           </div>
                                           <div class="modal-body">

                                               <div class="form-group">
                                                  <label for="">Training Image<span style="color:red">*</span></label>
                                                   <input type="file" id="name-input" class="form-control @error('training_image') is-invalid @enderror" name="training_image" required>
                                                   @error('training_image')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for=""> Title <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('title') is-invalid @enderror" placeholder="title" name="title">
                                                   @error('title')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Description</label>
                                                   <textarea name="description" id="my_ck_editor" class="form-control my-editor" cols="10" required> </textarea>
                                               </div>

                                               <div class="form-group">
                                                 <label for="">Add Contact Info</label>
                                                 <label for="">Your Name</label>
                                                 <input type="text" id="name-input" class="form-control @error('name') is-invalid @enderror" placeholder="enter name" name="name">
                                                 @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Your Designation</label>
                                                 <input type="text" id="name-input" class="form-control @error('designation') is-invalid @enderror" placeholder="enter your designation" name="designation">
                                                 @error('designation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Phone</label>
                                                 <input type="text" id="name-input" class="form-control @error('phone') is-invalid @enderror" name="phone">
                                                 @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Email</label>
                                                 <input type="email" id="name-input" class="form-control @error('email') is-invalid @enderror" name="email">
                                                 @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Location</label>
                                                 <input type="text" id="name-input" class="form-control @error('location') is-invalid @enderror" name="location">
                                                 @error('location')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
                                 <h2 style="color:red; margin-bottom:30px; text-align:center">View Training Data </h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>Training Image</th>
                                               <th>title</th>
                                               <th>Description</th>
                                               <th>name</th>
                                               <th>Designation</th>
                                               <th>phone</th>
                                               <th>Email</th>
                                               <th>Location</th>
                                               <th>Created At</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       {{-- <tfoot> --}}

                                       @foreach ($training_infos as  $training_info)
                                         <tr>
                                             <td> {{ $training_info->id }}</td>
                                             <td>
                                               <img src="{{ asset('uploads/training_image') }}/{{ $training_info->training_image }}" alt="not fount" style="width:100px; height:70px;">
                                             </td>
                                             <td>{{ $training_info->title }}</td>
                                             <td><p style="height: 150px;overflow: scroll;">{{ $training_info->description }}</p></td>
                                             <td>{{ $training_info->name }}</td>
                                             <td>{!! $training_info->designation !!}</td>
                                             <td>{{ $training_info->phone }}</td>
                                             <td>{{ $training_info->email }}</td>
                                             <td>{{ $training_info->location }}</td>
                                             <td>{{ $training_info->created_at->format('d-F-Y  h:i:s A') }} </td>
                                             <td>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $training_info->id }}">Edit</a>

                                            <div class="modal fade" id="{{ $training_info->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel">Edit</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                       <form action="{{ url('training/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="training_id" value="{{ $training_info->id }}">
                                                         <div class="form-group">
                                                            <label for="">Training image</label>
                                                             <input type="file" id="name-input" class="form-control" name="training_image">
                                                         </div>
                                                         <div class="form-group">
                                                           <label for="">title</label>
                                                             <input type="text" id="name-input" class="form-control" name="title" value="{{ $training_info->title }}">
                                                         </div>

                                                         <div class="form-group">
                                                           <label for="">name</label>
                                                             <input type="text" id="name-input" class="form-control" name="name" value="{{ $training_info->name }}">
                                                         </div>

                                                         <div class="form-group">
                                                            <label for="">Designation</label>
                                                             <input type="text" id="name-input" class="form-control" name="designation" value="{{ $training_info->designation }}">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="">Phone</label>
                                                             <input type="text" id="name-input" class="form-control" name="phone" value="{{ $training_info->phone }}">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="">Email</label>
                                                             <input type="email" id="name-input" class="form-control" name="email" value="{{ $training_info->email }}">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="">Location</label>
                                                             <input type="text" id="name-input" class="form-control" name="location" value="{{ $training_info->location }}">
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
                                               <a class="btn btn-danger btn-sm" href="{{ url('training/delete') }}/{{ $training_info->id }}"  onclick="return confirm('are you sure delete this data!')">Delete</a>
                                             </td>
                                         </tr>
                                         @endforeach
                                       {{-- </tfoot> --}}
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
