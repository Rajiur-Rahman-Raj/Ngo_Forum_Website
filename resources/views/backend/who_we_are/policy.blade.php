@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Policy Formulating</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}">Dashboard</a></li>
                       <li><a href="#">who are you</a></li>
                       <li class="active">Add policy</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title"> Add policy </h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add policy</button>
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
                               <form  action="{{ url('policy/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">add policy</h4>
                                           </div>
                                           <div class="modal-body">

                                               <div class="form-group">
                                                  <label for="">Mamber Image <span style="color:red">*</span></label>
                                                   <input type="file" id="name-input" class="form-control @error('mamber_image') is-invalid @enderror" name="mamber_image">
                                                   @error('mamber_image')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Mamber Name <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('mamber_name') is-invalid @enderror" name="mamber_name" placeholder="enter your mamber name">
                                                   @error('mamber_name')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Mamber Title <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('mamber_title') is-invalid @enderror" name="mamber_title" placeholder="enter your mamber title">
                                                   @error('mamber_title')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Mamber possession<span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('possession') is-invalid @enderror"  name="possession">
                                                   @error('possession')
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
                                 <h2 style="color:red; margin-bottom:30px; text-align:center">View Policy</h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>mamber_image</th>
                                               <th>mamber_name</th>
                                               <th>mamber_title</th>
                                               <th>possession</th>
                                               <th>Created At</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       {{-- <tfoot> --}}

                                       @foreach ($policy_info as  $policy_infos)
                                         <tr>
                                             <td> {{ $policy_infos->id }}</td>
                                             <td>
                                               <img src="{{ asset('uploads/policy_image') }}/{{ $policy_infos->mamber_image }}" alt="not fount" style="width:100px; height:70px;">
                                             </td>
                                             <td>{{ $policy_infos->mamber_name }}</td>

                                             <td>{{ $policy_infos->mamber_title }}</td>
                                             <td>{{ $policy_infos->possession }}</td>
                                             <th>{{ $policy_infos->created_at->format('d-F-Y  h:i:s A') }} </th>
                                             <th>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $policy_infos->id }}">Edit</a>

                                            <div class="modal fade" id="{{ $policy_infos->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel">Edit Policy</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                       <form action="{{ url('policy/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="policy_id" value="{{ $policy_infos->id }}">
                                                         <div class="form-group">
                                                            <label for="">manber_image</label>
                                                             <input type="file" id="name-input" class="form-control" name="mamber_image">
                                                         </div>
                                                         <div class="form-group">
                                                           <label for="">mamber_name</label>
                                                             <input type="text" id="name-input" class="form-control" name="mamber_name" value="{{ $policy_infos->mamber_name }}">
                                                         </div>
                                                         <div class="form-group">
                                                           <label for="">mamber_title</label>
                                                             <input type="text" id="name-input" class="form-control" name="mamber_title" value="{{ $policy_infos->mamber_title }}">
                                                         </div>
                                                         <div class="form-group">
                                                           <label for="">possession</label>
                                                             <input type="text" id="name-input" class="form-control" name="possession" value="{{ $policy_infos->possession }}">
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
                                               <a class="btn btn-danger btn-sm" href="{{ url('policy/delete') }}/{{ $policy_infos->id }}"  onclick="return confirm('are you sure delete policy [{{ $policy_infos->mamber_name }}]')">Delete</a>
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
