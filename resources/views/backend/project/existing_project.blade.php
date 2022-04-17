@extends('layouts.Dashboard')

@section('content')
<style>
    #mceu_119{
        display:none !important;
    }
    #mceu_118{
        display:none !important;
    }
    #mceu_117{
        display:none !important;
    }
</style>
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Existing Projects</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}">Dashboard</a></li>
                       <li><a href="#">project</a></li>
                       <li class="active">Existing Projects</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title"> Add Existing Projects </h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add Existing Project</button>
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
                               <form  action="{{ url('existing/project/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">add Existing Project</h4>
                                           </div>
                                           <div class="modal-body">

                                               <div class="form-group">
                                                  <label for="">Existing Project Logo <span style="color:red">*</span></label>
                                                   <input type="file" id="name-input" class="form-control @error('existing_image') is-invalid @enderror" name="existing_image">
                                                   @error('existing_image')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Project Title <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('existing_title') is-invalid @enderror" name="existing_title" placeholder="enter your project title" required>
                                                   @error('existing_title')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>

                                               <div class="form-group">
                                                 <label for=""> Project Description <span style="color:red">*</span></label>
                                                   <textarea name="description_one" id="" class="form-control @error('description_one') is-invalid @enderror" cols="10" required></textarea>
                                                   @error('description_one')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>

                                               <div class="form-group">
                                                 <label for="">Project Period <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('existing_period') is-invalid @enderror" placeholder="enter your project period" name="existing_period" required>
                                                   @error('existing_period')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>

                                               <div class="form-group">
                                                 <label for="">Project Donar <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('existing_donar') is-invalid @enderror" placeholder="enter your project donar" name="existing_donar" required>
                                                   @error('existing_donar')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>

                                               <div class="form-group">
                                                 <label for="">Project Budget <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('total_baget') is-invalid @enderror" placeholder="how much your project budget.." name="total_baget" required>
                                                   @error('total_baget')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>

                                               <div class="form-group">
                                                 <label for="">Location <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('location') is-invalid @enderror" placeholder="enter location" name="location" required>
                                                   @error('location')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>

                                               <div class="form-group">
                                                  <label for="">Existing Project Details Image [optional]</label>
                                                   <input type="file" id="name-input" class="form-control" name="existing_details_image">
                                               </div>

                                               <div class="form-group">
                                                 <label for="">Project Metarials / Details Description [optional]</label>
                                                   <textarea name="existing_description" id="my_ck_editor" class="form-control my-editor" cols="10"> </textarea>
                                               </div>

                                               <div class="form-group">
                                                 <label for="" style="color:red; font-size:19px">Add Focal Person:</label><br>
                                                 <label for="">Name<span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control"  name="focal_name">
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Designation<span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control"  name="focal_designation">
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Phone<span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control"  name="focal_phone">
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Email<span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control"  name="focal_email">
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Add Related Links</label>
                                                   <textarea name="related_link" id="my_ck_editor" class="form-control my-editor" cols="10"> </textarea>
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Add Related Documents</label>
                                                   <textarea name="related_document" id="my_ck_editor" class="form-control my-editor" cols="10"> </textarea>
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
                                 <h2 style="color:red; margin-bottom:30px; text-align:center">View Existing Project</h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>Title</th>
                                               <th>Logo</th>
                                               <th>Description</th>
                                               <th>Project Period</th>
                                               <th>Project Donar</th>
                                               <th>Total Budget</th>
                                               <th>Location</th>
                                               <th>Details image</th>
                                               <th>Metarial/Details Description</th>
                                               <th>Focal Person Name</th>
                                               <th>Designation</th>
                                               <th>Phone</th>
                                               <th>Email</th>
                                               <th>Related Links</th>
                                               <th>Related Documents</th>
                                               <th>Created At</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       {{-- <tfoot> --}}

                                       @foreach ($existing_project_info as  $existing_project_infos)
                                         <tr>
                                             <td> {{ $existing_project_infos->id }}</td>
                                             <td>{{ $existing_project_infos->existing_title }}</td>
                                             <td>
                                               <img src="{{ asset('uploads/existing_project_img') }}/{{ $existing_project_infos->existing_image }}" alt="not fount" style="width:100px; height:70px;">
                                             </td>
                                             <td><p style="height: 150px;overflow: scroll;">{{ $existing_project_infos->description_one }}</p></td>
                                             <td>{{ $existing_project_infos->existing_period }}</td>
                                             <td>{{ $existing_project_infos->existing_donar }}</td>
                                             <td>{{ $existing_project_infos->total_baget }}</td>
                                             <td>{{ $existing_project_infos->location }}</td>
                                             <td>
                                               <img src="{{ asset('uploads/existing_project_img') }}/{{ $existing_project_infos->existing_details_image }}" alt="not fount" style="width:100px; height:70px;">
                                             </td>
                                             <td><p style="height: 150px;overflow: scroll;">{{ $existing_project_infos->existing_description }}</p></td>
                                             <td> {{ $existing_project_infos->focal_name }}</td>
                                             <td> {{ $existing_project_infos->focal_designation }}</td>
                                             <td> {{ $existing_project_infos->focal_phone }}</td>
                                             <td> {{ $existing_project_infos->focal_email }}</td>
                                             <td><p style="height: 150px;overflow: scroll;">{{ $existing_project_infos->related_link }}</p></td>
                                             <td><p style="height: 150px;overflow: scroll;">{{ $existing_project_infos->related_document }}</p></td>
                                             <th>
                                                 @if(is_null($existing_project_infos->created_at))
                                                 @else
                                                 {{ $existing_project_infos->created_at->format('d-F-Y  h:i:s A') }} 
                                                 @endif
                                             </th>
                                             <th>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $existing_project_infos->id }}">Edit</a>

                                            <div class="modal fade" id="{{ $existing_project_infos->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel">Edit Existing Project</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                       <form action="{{ url('existing/project/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="existing_id" value="{{ $existing_project_infos->id }}">
                                                         <div class="form-group">
                                                            <label for="">Existing Project Logo</label>
                                                            <input type="file" id="name-input" class="form-control" name="existing_image">

                                                         </div>
                                                         <div class="form-group">
                                                           <label for="">Project Title</label>
                                                             <input type="text" id="name-input" class="form-control" name="existing_title" value="{{ $existing_project_infos->existing_title }}">

                                                         </div>

                                                         <div class="form-group">
                                                           <label for=""> Project Description</label>
                                                             <textarea name="description_one" id="" class="form-control" cols="10">
                                                               {{ $existing_project_infos->description_one }}
                                                             </textarea>

                                                         </div>

                                                         <div class="form-group">
                                                           <label for="">Project Period</label>
                                                             <input type="text" id="name-input" class="form-control" name="existing_period" value="{{ $existing_project_infos->existing_period }}">

                                                         </div>

                                                         <div class="form-group">
                                                           <label for="">Project Donar</label>
                                                             <input type="text" id="name-input" class="form-control" name="existing_donar" value="{{ $existing_project_infos->existing_donar }}">

                                                         </div>

                                                         <div class="form-group">
                                                           <label for="">Project Budget</label>
                                                             <input type="text" id="name-input" class="form-control" name="total_baget" value="{{ $existing_project_infos->total_baget }}">

                                                         </div>

                                                         <div class="form-group">
                                                           <label for="">Location</label>
                                                             <input type="text" id="name-input" class="form-control" name="location" value="{{ $existing_project_infos->location }}">

                                                         </div>

                                                         <div class="form-group">
                                                            <label for="">Existing Project Details Image</label>
                                                             <input type="file" id="name-input" class="form-control" name="existing_details_image">
                                                         </div>

                                                         <div class="form-group">
                                                           <label for="" style="color:red; font-size:19px">Edit Focal Person:</label><br>
                                                           <label for="">Name</label>
                                                             <input type="text" id="name-input" class="form-control" value="{{ $existing_project_infos->focal_name }}" name="focal_name">
                                                         </div>
                                                         <div class="form-group">
                                                           <label for="">Designation</label>
                                                             <input type="text" id="name-input" class="form-control" value="{{ $existing_project_infos->focal_designation }}" name="focal_designation">
                                                         </div>
                                                         <div class="form-group">
                                                           <label for="">Phone</label>
                                                             <input type="text" id="name-input" class="form-control" value="{{ $existing_project_infos->focal_phone }}" name="focal_phone">
                                                         </div>
                                                         <div class="form-group">
                                                           <label for="">Email</label>
                                                             <input type="text" id="name-input" class="form-control" value="{{ $existing_project_infos->focal_email }}" name="focal_email">
                                                         </div>
                                                         <div class="form-group">
                                                         <label for="">Add Related Links</label>
                                                           <textarea name="related_link" class="form-control" cols="10">{{ $existing_project_infos->related_link }}</textarea>
                                                       </div>
                                                           <div class="form-group">
                                                                <label for="">Add Related Documents</label>
                                                               <textarea name="related_document" class="form-control" cols="10">{{ $existing_project_infos->related_document }}</textarea>
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
                                               <a class="btn btn-danger btn-sm" href="{{ url('existing/project/delete') }}/{{ $existing_project_infos->id }}"  onclick="return confirm('are you sure delete product [{{ $existing_project_infos->existing_title }}]')">Delete</a>
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
        
        $(document).on('focusin', function(e) {
        if ($(e.target).closest(".mce-window").length) {
        e.stopImmediatePropagation();
        }
        });
      </script>
      
   @endsection
@endsection
