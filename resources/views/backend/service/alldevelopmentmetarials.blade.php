@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">All Development Metarials</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}">Dashboard</a></li>
                       <li><a href="#">service</a></li>
                       <li class="active">Category wise Development Metarials</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title"> Add  Category wise Development Metarials </h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add Metarials</button>
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
                               <form  action="{{ url('categorywise/metarials/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">add Development Metarials</h4>
                                           </div>
                                           <div class="modal-body">
                                             <div class="form-group">
                                               <label for=""> Select Metarials Category <span style="color:red">*</span></label>
                                               <select class="" name="metarials_category_id" style="width:100%;height: 40px;" required>
                                                 <option value="">--Select One--</option>
                                                 @foreach ($metarial_catagories as $metarial_catagory)
                                                   <option value="{{ $metarial_catagory->id }}">{{ $metarial_catagory->category_name }}</option>
                                                 @endforeach
                                               </select>
                                             </div>
                                            <div class="form-group">
                                               <label for="">Metarial Image</label>
                                                <input type="file" id="name-input" class="form-control" name="image">
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
                               <div class="table-responsive" style=" margin-top: 50px; padding: 0px 50px;">
                                 <h2 style="color:red; margin-bottom:30px; text-align:center">View Developments Metarials</h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>Category Name</th>
                                               <th>Metarial Image</th>
                                               <th>created_at</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>

                                       @foreach ($metarials_details as $metarials_detail)
                                         <tr>
                                             <td> {{ $metarials_detail->id }}</td>
                                             <td> {{ App\Metarialscategory::find($metarials_detail->metarials_category_id)->category_name }}</td>

                                             <td>
                                               <img src="{{ asset('uploads/metarials_img') }}/{{ $metarials_detail->image }}" alt="not fount" style="width:100px; height:70px;">
                                             </td>
                                             <th>{{ $metarials_detail->created_at->format('d-F-Y  h:i:s A') }}</th>
                                             <th>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $metarials_detail->id }}">Edit</a>

                                            <div class="modal fade" id="{{ $metarials_detail->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel">Edit Existing Project</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                        <form action="{{ url('metarials/details/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="metarials_id" value="{{ $metarials_detail->id }}">
                                                         <div class="form-group">
                                                           <label for="">Select Category</label>
                                                         <select class="" name="category_id" style="width:100%;height: 40px;">
                                                            @foreach ($metarial_catagories as $metarial_catagoriy)
                                                              <option value="{{ $metarial_catagoriy->id }}" {{ ($metarials_detail->metarials_category_id == $metarial_catagoriy->id)?'selected':'' }}>{{ $metarial_catagoriy->category_name }}</option>
                                                            @endforeach
                                                          </select>
                                                        </div>

                                                         <div class="form-group">
                                                            <label for="">Metarial Image</label>
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
                                               <a class="btn btn-danger btn-sm" href="{{ url('metarial/details/delete') }}/{{ $metarials_detail->id }}"  onclick="return confirm('are you sure delete data!">Delete</a>
                                             </th>
                                         </tr>



                                         @endforeach

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
