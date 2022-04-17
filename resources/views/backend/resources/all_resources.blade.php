@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">All resources</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}">Dashboard</a></li>
                       <li><a href="#">Add resources</a></li>
                       <li class="active">add all resources</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title"> Add  All resources </h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add resources</button>
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
                               <form  action="{{ url('all/resources/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">add resources</h4>
                                           </div>
                                           <div class="modal-body">
                                             <div class="form-group">
                                               <label for=""> Select resources Category </label>
                                               <select class="@error('category_id') is-invalid @enderror" name="resources_category_id" style="width:100%;height: 40px;" required>
                                                 <option value="">--Select One--</option>
                                                 @foreach ($category_resources_details as $key => $category_resources_detail)
                                                   <option value="{{ $category_resources_detail->id }}">{{ $category_resources_detail->category_name }}</option>
                                                 @endforeach
                                               </select>
                                               @error('category_id')
                                                   <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                   </span>
                                               @enderror
                                             </div>

                                            <div class="form-group">
                                               <label for="">upload file</label>
                                               <input type="file" id="name-input" class="form-control" name="file_download">
                                            </div>

                                            <div class="form-group">
                                               <label for="">upload file image</label>
                                               <input type="file" id="name-input" class="form-control @error('resources_image') is-invalid @enderror" name="resources_image" required>
                                                @error('resources_image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                              <label for="">resource title</label>
                                                <input type="text" id="name-input" class="form-control @error('image_title') is-invalid @enderror" name="image_title" required>
                                                @error('image_title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                              <label for="">Add Another any description [ If You Needed! ]</label>
                                                <textarea name="ck_description" id="my_ck_editor" class="form-control my-editor" cols="10"> </textarea>
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
                                 <h2 style="color:red; margin-bottom:30px; text-align:center">View All Resources</h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>resources Category</th>
                                               <th>title</th>
                                               <th>image</th>
                                               <th>file</th>
                                               <th>Another Description</th>
                                               <th>created_at</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>

                                       @foreach ($all_resources_details as $all_resources_detail)
                                         <tr>
                                             <td> {{ $all_resources_detail->id }}</td>
                                             <td> {{ App\resourcesCategory::find($all_resources_detail->resources_category_id)->category_name }}</td>
                                             <td>{{ $all_resources_detail->image_title }}</p></td>
                                             <td>
                                               <img src="{{ asset('uploads/all_resources_image') }}/{{ $all_resources_detail->resources_image }}" alt="not fount" style="width:100px; height:70px;">
                                              </td>
                                              <td> {{ $all_resources_detail->file_download }}</td>
                                              <td><p style="height:80px; overflow:scroll;"> {{ $all_resources_detail->ck_description }} </p></td>
                                             <th>{{ $all_resources_detail->created_at->format('d-F-Y  h:i:s A') }}</th>
                                             <th>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $all_resources_detail->id }}">Edit</a>

                                            <div class="modal fade" id="{{ $all_resources_detail->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel">Edit resources</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                       <form action="{{ url('single/resources/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name=" resources_id" value="{{ $all_resources_detail->id }}">
                                                         <div class="form-group">
                                                           <label for="">Select Category</label>
                                                         <select class="" name="category_id" style="width:100%;height: 40px;">
                                                            @foreach ($category_resources_details as $key => $category_resources_detail)
                                                              <option value="{{ $category_resources_detail->id }}" {{ ($all_resources_detail->resources_category_id == $category_resources_detail->id)?'selected':'' }}>{{ $category_resources_detail->category_name }}</option>
                                                            @endforeach
                                                          </select>
                                                        </div>


                                                           <div class="form-group">
                                                              <label for="">resources Image</label>
                                                               <input type="file" id="name-input" class="form-control" name="resources_image">
                                                           </div>

                                                           <div class="form-group">
                                                             <label for="">image_title</label>
                                                               <input type="text" id="name-input" class="form-control" name="image_title" value="{{ $all_resources_detail->image_title }}">

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
                                               <a class="btn btn-danger btn-sm" href="{{ url('resources/delete') }}/{{ $all_resources_detail->id }}"  onclick="return confirm('are you sure delete resources [{{ $all_resources_detail->resources_title }}]')">Delete</a>
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
