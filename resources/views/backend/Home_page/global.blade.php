@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Global & National Events</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}">Dashboard</a></li>
                       <li><a href="#">Home_page</a></li>
                       <li class="active">Add Global & National Events</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title"> Add Global & National Events </h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add Global & National Events</button>
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
                               <form  action="{{ url('global/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">add Global & National Events</h4>
                                           </div>
                                           <div class="modal-body">


                                               <div class="form-group">
                                                 <label for="">Date <span style="color:red">*</span></label>
                                                   <input type="number" id="name-input" class="form-control @error('date') is-invalid @enderror" name="date" placeholder="enter your date">
                                                   @error('date')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Manth <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('manth') is-invalid @enderror" name="manth" placeholder="enter your Manth">
                                                   @error('manth')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Title<span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('title') is-invalid @enderror"  name="title">
                                                   @error('title')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Description</label>
                                                   <textarea name="description" class="form-control" cols="10" required> </textarea>
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
                                 <h2 style="color:red; margin-bottom:30px; text-align:center">View Global</h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>

                                               <th>Date</th>
                                               <th>Manth</th>
                                               <th>title</th>
                                               <th>Description</th>
                                               <th>Created At</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       {{-- <tfoot> --}}

                                       @foreach ($global_info as  $global_infos)
                                         <tr>
                                             <td> {{ $global_infos->id }}</td>

                                             <td>{{ $global_infos->date }}</td>

                                             <td>{{ $global_infos->manth }}</td>
                                             <td>{{ $global_infos->title }}</td>
                                             <td>{{ $global_infos->description }}</td>
                                             <th>{{ $global_infos->created_at->format('d-F-Y  h:i:s A') }} </th>
                                             <th>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $global_infos->id }}">Edit</a>

                                            <div class="modal fade" id="{{ $global_infos->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel">Edit Policy</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                       <form action="{{ url('global/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="global_id" value="{{ $global_infos->id }}">

                                                         <div class="form-group">
                                                           <label for="">Date</label>
                                                             <input type="number" id="name-input" class="form-control" name="date" value="{{ $global_infos->date }}">
                                                         </div>
                                                         <div class="form-group">
                                                           <label for="">Manth</label>
                                                             <input type="text" id="name-input" class="form-control" name="manth" value="{{ $global_infos->manth }}">
                                                         </div>
                                                         <div class="form-group">
                                                           <label for="">Title</label>
                                                             <input type="text" id="name-input" class="form-control" name="title" value="{{ $global_infos->title }}">
                                                         </div>
                                                         <div class="form-group">
                                                           <label for="">Description</label>
                                                             <textarea name="description" id="name-input" class="form-control" cols="10">
                                                               {{ $global_infos->description }}
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
                                               <a class="btn btn-danger btn-sm" href="{{ url('global/delete') }}/{{ $global_infos->id }}"  onclick="return confirm('are you sure delete policy [{{ $global_infos->title }}]')">Delete</a>
                                             </th>
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
