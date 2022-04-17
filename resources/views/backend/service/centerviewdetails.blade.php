@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Training Center Details</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}">Dashboard</a></li>
                       <li><a href="#">Service</a></li>
                       <li class="active">Training Center Details</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title">Training Center Details</h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add Training Center Details</button>
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
                               <form  action="{{ url('training_center_detail/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">Add Training Center Details</h4>
                                           </div>
                                           <div class="modal-body">

                                             <div class="form-group">
                                               <label for=""> Select Center Name <span style="color:red">*</span></label>
                                               <select class="@error('center_category_id') is-invalid @enderror" name="center_category_id" style="width:100%;height: 40px;">
                                                 <option value="">--Select One--</option>
                                                 @foreach ($center_details as $key => $center_detail)
                                                   <option value="{{ $center_detail->id }}">{{ $center_detail->region }}</option>
                                                 @endforeach
                                               </select>
                                               @error('center_category_id')
                                                   <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                   </span>
                                               @enderror
                                             </div>
                                               <div class="form-group">
                                                  <label for="">Categories<span style="color:red">*</span></label>
                                                   <input type="text" id="name-input" class="form-control @error('category_name') is-invalid @enderror" name="category_name" required>
                                                   @error('category_name')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                   @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Description</label>
                                                   <textarea  name="description" class="form-control" cols="10" required></textarea>
                                               </div>

                                               <div class="form-group">
                                                 <label for="">Capacity</label>
                                                 <textarea name="capacity" class="form-control @error('capacity') is-invalid @enderror" cols="10" required></textarea>
                                                 @error('capacity')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                               </div>
                                               <div class="form-group">
                                                 <label for="">Rates</label>
                                                <textarea name="rates" class="form-control" cols="10" required></textarea>
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
                                 <h2 style="color:red; margin-bottom:30px; text-align:center">View Training Center Details</h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>Center Name</th>
                                               <th>Categories</th>
                                               <th>Description</th>
                                               <th>Capacity</th>
                                               <th>Rates</th>
                                               <th>Created At</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       {{-- <tfoot> --}}

                                       @foreach ($training_center_detail_infos as  $detail_info)
                                         <tr>
                                             <td> {{ $detail_info->id }}</td>
                                             <td> {{ App\Center::find($detail_info->center_category_id)->region }}</td>
                                             <td>{{ $detail_info->category_name }}</td>
                                             <td><p style="height: 150px;overflow: scroll;">{{ $detail_info->description }}</p></td>
                                             <td>{{ $detail_info->capacity }}</td>
                                             <td>{{ $detail_info->rates }}</td>
                                             <td>{{ $detail_info->created_at->format('d-F-Y  h:i:s A') }} </td>
                                             <td>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $detail_info->id }}">Edit</a>

                                            <div class="modal fade" id="{{ $detail_info->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel">Edit</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                       <form action="{{ url('center_detail/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="center_id" value="{{ $detail_info->id }}">
                                                         <select class="" name="category_id" style="width:100%;height: 40px;">
                                                            @foreach ($center_details as $key => $center_detail)
                                                              <option value="{{ $center_detail->id }}" {{ ($detail_info->center_category_id == $center_detail->id)?'selected':'' }}>{{ $center_detail->region }}</option>
                                                            @endforeach
                                                          </select>
                                                         <div class="form-group">
                                                            <label for="">Categories</label>
                                                             <input type="text" id="name-input" class="form-control" name="category_name" value="{{ $detail_info->category_name }}">
                                                         </div>

                                                         <div class="form-group">
                                                           <label for="">Description</label>
                                                          <textarea name="description" class="form-control" cols="10">{{ $detail_info->description }}</textarea>
                                                         </div>

                                                         <div class="form-group">
                                                            <label for="">Capacity</label>
                                                             <input type="text" id="name-input" class="form-control" name="capacity" value="{{ $detail_info->capacity }}">
                                                         </div>

                                                         <div class="form-group">
                                                           <label for="">Rates</label>
                                                          <textarea name="rates" class="form-control" cols="10">{{ $detail_info->rates }}</textarea>
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
                                               <a class="btn btn-danger btn-sm" href="{{ url('center_details/delete') }}/{{ $detail_info->id }}"  onclick="return confirm('are you sure delete this data!')">Delete</a>
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

    <script>
      CKEDITOR.replace('my_ck_editor', options);
    </script>
   @endsection
