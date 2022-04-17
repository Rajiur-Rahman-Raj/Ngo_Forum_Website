@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Training Centers</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}">Dashboard</a></li>
                       <li><a href="#">Service</a></li>
                       <li class="active">Training Centers</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title">Training Centers</h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add Training Centers</button>
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
                               <form  action="{{ url('center/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">Add Training Centers</h4>
                                           </div>
                                           <div class="modal-body">

                                               <div class="form-group">
                                                  <label for="">Region<span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('region') is-invalid @enderror" name="region" required>
                                                   @error('region')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Contact Person <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('person') is-invalid @enderror" placeholder="person" name="person">
                                                   @error('person')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Designation <span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control" placeholder="designation" name="designation">
                                               </div>

                                               <div class="form-group">
                                                 <label for="">Street address</label>
                                                 <input type="text" id="name-input" class="form-control @error('address') is-invalid @enderror" placeholder="enter name" name="address">
                                                 @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Tel Phone</label>
                                                 <input type="text" id="name-input" class="form-control @error('tel_phone') is-invalid @enderror" placeholder="enter your tel phone" name="tel_phone">
                                                 @error('tel_phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">mob:number</label>
                                                 <input type="text" id="name-input" class="form-control @error('number') is-invalid @enderror" name="number">
                                                 @error('number')
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
                                                 <label for="">Fax</label>
                                                 <input type="text" id="name-input" class="form-control @error('fax') is-invalid @enderror" name="fax">
                                                 @error('fax')
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
                                 <h2 style="color:red; margin-bottom:30px; text-align:center">View Training Centers </h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>region</th>
                                               <th>person</th>
                                               <th>Designation</th>
                                               <th>address</th>
                                               <th>tel phone/mob number</th>
                                               <th>Email/Fex</th>
                                               <th>Created At</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       {{-- <tfoot> --}}

                                       @foreach ($center_infos as  $center_info)
                                         <tr>
                                             <td> {{ $center_info->id }}</td>

                                             <td>{{ $center_info->region }}</td>

                                             <td>{{ $center_info->person }}</td>
                                             <td>{{ $center_info->designation }}</td>

                                             <td>{{ $center_info->address }}</td>
                                             <td>
                                               {{ $center_info->tel_phone }},{{ $center_info->number }}
                                             </td>
                                             <td>
                                               {{ $center_info->email }},{{ $center_info->fax }}
                                             </td>

                                             <td>{{ $center_info->created_at->format('d-F-Y  h:i:s A') }} </td>
                                             <td>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $center_info->id }}">Edit</a>

                                            <div class="modal fade" id="{{ $center_info->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel">Edit</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                       <form action="{{ url('center/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="center_id" value="{{ $center_info->id }}">
                                                         <div class="form-group">
                                                            <label for="">Region</label>
                                                             <input type="text" id="name-input" class="form-control" name="region" value="{{ $center_info->region }}">
                                                         </div>
                                                         <div class="form-group">
                                                           <label for="">Contact Person</label>
                                                             <input type="text" id="name-input" class="form-control" name="person" value="{{ $center_info->person }}">
                                                         </div>
                                                         <div class="form-group">
                                                           <label for=""> designation</label>
                                                             <input type="text" id="name-input" class="form-control" name="designation" value="{{ $center_info->designation }}">
                                                         </div>

                                                         <div class="form-group">
                                                           <label for="">address</label>
                                                             <input type="text" id="name-input" class="form-control" name="address" value="{{ $center_info->address }}">
                                                         </div>

                                                         <div class="form-group">
                                                            <label for="">tel Phone</label>
                                                             <input type="text" id="name-input" class="form-control" name="tel_phone" value="{{ $center_info->tel_phone }}">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="">mob number</label>
                                                             <input type="text" id="name-input" class="form-control" name="number" value="{{ $center_info->number }}">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="">Email</label>
                                                             <input type="email" id="name-input" class="form-control" name="email" value="{{ $center_info->email }}">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="">Fax</label>
                                                             <input type="text" id="name-input" class="form-control" name="fax" value="{{ $center_info->fax }}">
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
                                               <a class="btn btn-danger btn-sm" href="{{ url('center/delete') }}/{{ $center_info->id }}"  onclick="return confirm('are you sure delete this data!')">Delete</a>
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
