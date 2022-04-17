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
               <h3 class="breadcrumb-header">Data Tables</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('/') }}">Home</a></li>
                       <li><a href="#">Project</a></li>
                       <li class="active">implemented projects</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title">Add Your Implemented Project</h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">add implemented project</button>
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
                               <form  action="{{ url('implemented/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">Add implemented project form</h4>
                                           </div>
                                           <div class="modal-body">
                                               <div class="form-group">
                                                 <div class="form-group">
                                                    <label for="">Add Project Logo [optional]</label>
                                                     <input type="file" id="name-input" class="form-control" name="project_logo">

                                                 </div>
                                                 <label for="">Project Name <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('project_name') is-invalid @enderror" name="project_name" placeholder="Enter Your Project name" cols="40">
                                                   @error('project_name')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Short Description of Implemented Project [optional]</label>
                                                   <input type="text" id="name-input" class="form-control @error('short_description') is-invalid @enderror" name="short_description" placeholder="write project sort description" cols="40">
                                                   @error('short_description')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                                </div>
                                               <div class="form-group">
                                                 <label for="">Project Duration <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('project_duration') is-invalid @enderror" name="project_duration" placeholder="enter project duration" cols="40">
                                                   @error('project_duration')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                                </div>

                                               <div class="form-group">
                                                 <label for="">Year <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('year') is-invalid @enderror" name="year" placeholder="enter year" cols="40">
                                                   @error('year')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Donar / partners <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('project_donor') is-invalid @enderror" name="project_donor" placeholder="enter your project donar" cols="40">
                                                   @error('project_donor')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Thematic Area <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('thematic_area') is-invalid @enderror" name="thematic_area" placeholder="what is your Thematic Area" cols="40">
                                                   @error('thematic_area')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>

                                               <div class="form-group">
                                                 <label for=""> Total Budget <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('total_baget') is-invalid @enderror" name="total_baget" placeholder="how much your project budget" cols="40">
                                                   @error('total_baget')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>

                                               <div class="form-group">
                                                 <label for=""> Location <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('location') is-invalid @enderror" name="location" placeholder="enter location" cols="40">
                                                   @error('location')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>

                                               <div class="form-group">
                                                  <label for="">select Project Details Image [optional]</label>
                                                   <input type="file" id="name-input" class="form-control" name="details_image">

                                               </div>

                                               <div class="form-group">
                                                  <label for="">Project Details Description / metarials [optional]</label>
                                                   <textarea type="text"  class="form-control my-editor" rows="10" name="details_description" ></textarea>
                                               </div>

                                               <div class="form-group">
                                                 <label for="" style="color:red; font-size:19px">Add Focal Person:</label><br>
                                                 <label for="">Name<span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control"  name="focal_name" required>
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Designation<span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control"  name="focal_designation" required>
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Phone<span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control"  name="focal_phone" required>
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Email<span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control"  name="focal_email" required>
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
                                               <button type="submit"  class="btn btn-success">Add</button>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               </form>
                               <div class="table-responsive" style=" margin-top: 50px; padding: 0px 50px;">
                                 <h2 style="color:red; margin-bottom:50px; text-align:center">View Implemented Projects</h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>No:</th>
                                               <th>project_name</th>
                                               <th>project_logo</th>
                                               <th>short_description</th>
                                               <th>project_duration</th>
                                               <th>year</th>
                                               <th>project_donor</th>
                                               <th>thematic_area</th>
                                               <th>total budget</th>
                                               <th>location</th>
                                               <th>details_image</th>
                                               <th>Metarial/details description</th>
                                               <th>Focal Person Name</th>
                                               <th>Designation</th>
                                               <th>Phone</th>
                                               <th>Email</th>
                                               <th>Related Links</th>
                                               <th>Related Documents</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       {{-- <tfoot> --}}
                                       @foreach ($implemented_all_infos as $implemented_all_info)

                                           <tr>
                                               <th>{{ $implemented_all_info->id }}</th>
                                               <th>{{ $implemented_all_info->project_name }}</th>
                                               <td>
                                                 <img src="{{ asset('uploads/implemented_project_img') }}/{{ $implemented_all_info->project_logo }}" alt="not fount" style="width:100px; height:70px;">
                                               </td>
                                               <td><p style="height: 150px;overflow: scroll;">{{ $implemented_all_info->short_description }}</p></td>
                                               <th>{{ $implemented_all_info->project_duration }}</th>
                                               <th>{{ $implemented_all_info->year }} </th>
                                               <th>{{ $implemented_all_info->project_donor }} </th>
                                               <th> {{ $implemented_all_info->thematic_area }}</th>
                                               <th> {{ $implemented_all_info->total_baget }}</th>
                                               <th> {{ $implemented_all_info->location }}</th>
                                               <td>
                                                 <img src="{{ asset('uploads/implemented_project_img') }}/{{ $implemented_all_info->details_image }}" alt="not fount" style="width:100px; height:70px;">
                                               </td>
                                               <td><p style="height: 150px;overflow: scroll;">{{ $implemented_all_info->details_description }}</p></td>
                                               <td> {{ $implemented_all_info->focal_name }}</td>
                                               <td> {{ $implemented_all_info->focal_designation }}</td>
                                               <td> {{ $implemented_all_info->focal_phone }}</td>
                                               <td> {{ $implemented_all_info->focal_email }}</td>
                                               <td><p style="height: 150px;overflow: scroll;">{{ $implemented_all_info->related_link }}</p></td>
                                               <td><p style="height: 150px;overflow: scroll;">{{ $implemented_all_info->related_document }}</p></td>
                                               <th>
                                                 <a type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#{{ $implemented_all_info->id }}">Edit</a>

                                              <div class="modal fade" id="{{ $implemented_all_info->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                               <div class="modal-dialog">
                                                   <div class="modal-content">
                                                       <div class="modal-header">
                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                           <h3 class="modal-title" id="myModalLabel">implemented Edit</h3>
                                                       </div>
                                                            <form action="{{ url('implemented/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                              @csrf
                                                              <div class="modal-body">
                                                                <div class="form-group">
                                                                  <div class="form-group">
                                                                    <input type="hidden" name="implemented_id" value="{{ $implemented_all_info->id }}">
                                                                     <label for="">Add Project Logo [optional]</label>
                                                                      <input type="file" id="name-input" class="form-control" name="project_logo">

                                                                  </div>
                                                                  <label for="">Project Name <span style="color:red">*</span></label>
                                                                    <input type="text" id="name-input" class="form-control" name="project_name" placeholder="Name" cols="40" value="{{ $implemented_all_info->project_name }}">
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="">Short Description of Implemented Project [optional]</label>
                                                                    <textarea class="form-control" name="short_description" placeholder="Name">{!! $implemented_all_info->short_description !!}</textarea>
                                                                 </div>
                                                                <div class="form-group">
                                                                  <label for="">Project Duration <span style="color:red">*</span></label>
                                                                    <input type="text" id="name-input" class="form-control" name="project_duration" placeholder="Name" cols="40" value="{{ $implemented_all_info->project_duration }}">
                                                                 </div>

                                                                <div class="form-group">
                                                                  <label for="">Year<span style="color:red">*</span></label>
                                                                    <input type="text" id="name-input" class="form-control" name="year" placeholder="Name" cols="40" value="{{ $implemented_all_info->year }}">

                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="">Donar / partners <span style="color:red">*</span></label>
                                                                    <input type="text" id="name-input" class="form-control" name="project_donor" placeholder="Name" cols="40" value="{{ $implemented_all_info->project_donor }}">

                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="">Thematic Area <span style="color:red">*</span></label>
                                                                    <input type="text" id="name-input" class="form-control" name="thematic_area" placeholder="Name" cols="40" value="{{ $implemented_all_info->thematic_area }}">
                                                                </div>

                                                                <div class="form-group">
                                                                  <label for=""> Total Budget <span style="color:red">*</span></label>
                                                                    <input type="text" id="name-input" class="form-control" name="total_baget" placeholder="Name" cols="40" value="{{ $implemented_all_info->total_baget }}">
                                                                </div>

                                                                <div class="form-group">
                                                                  <label for=""> Location <span style="color:red">*</span></label>
                                                                    <input type="text" id="name-input" class="form-control" name="location" placeholder="Name" cols="40" value="{{ $implemented_all_info->location }}">
                                                                </div>

                                                                <div class="form-group">
                                                                   <label for="">select Project Details Image [optional]</label>
                                                                    <input type="file" id="name-input" class="form-control" name="details_image">
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="" style="color:red; font-size:19px">Edit Focal Person:</label><br>
                                                                  <label for="">Name</label>
                                                                    <input type="text" id="name-input" class="form-control" value="{{ $implemented_all_info->focal_name }}" name="focal_name">
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="">Designation</label>
                                                                    <input type="text" id="name-input" class="form-control" value="{{ $implemented_all_info->focal_designation }}" name="focal_designation">
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="">Phone</label>
                                                                    <input type="text" id="name-input" class="form-control" value="{{ $implemented_all_info->focal_phone }}" name="focal_phone">
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="">Email</label>
                                                                    <input type="text" id="name-input" class="form-control" value="{{ $implemented_all_info->focal_email }}" name="focal_email">
                                                                </div>
                                                                <div class="form-group">
                                                                 <label for="">Add Related Links</label>
                                                                   <textarea name="related_link" class="form-control" cols="10">{{ $implemented_all_info->related_link }}</textarea>
                                                               </div>
                                                               <div class="form-group">
                                                                    <label for="">Add Related Documents</label>
                                                                   <textarea name="related_document" class="form-control" cols="10">{{ $implemented_all_info->related_document }}</textarea>
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
                                                 <a href="{{ url('implemented/delete') }}/{{ $implemented_all_info->id }}" class="btn btn-danger btn-rounded" onclick="return confirm('are you sure delete this project[{{ $implemented_all_info->project_name }}]')">Delete</a>
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
@endsection



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

   @endsection
