@extends('layouts.Dashboard')

@section('content')
<style>
    .modal-dialog{
        width: 1200px !important;
    }
</style>
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">All Programmes</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}">Dashboard</a></li>
                       <li><a href="#">Add Programme</a></li>
                       <li class="active">add all Programme</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title"> Add  All Programme </h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add Programme</button>
                               <button type="button" class="btn btn-success m-b-sm mb-3" data-toggle="modal" data-target="#myModal1">Update Humanitarian & Emergency Support</button>
                               <!--<button type="button" class="btn btn-success m-b-sm mb-3" data-toggle="modal" data-target="#myModal2">Add Project of humanitarian Assistance</button>-->
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

                              @foreach ($human_infos as $human_info)
                                <form action="{{ url('update/human/insert') }}" method="post" enctype="multipart/form-data">
                                  @csrf
                                  <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title" id="myModalLabel">Update Humanitarian Assistance</h4>
                                        </div>
                                        <div class="modal-body">
                                          <div class="form-group">
                                            <input type="hidden" id="name-input" class="form-control" name="human_id" value="{{ $human_info->id }}">
                                          </div>

                                          <div class="form-group">
                                            <label for="">Upload Image</label> <span style="color:red">*</span>
                                            <input type="file" name="image" type="text" rows="8" cols="80" class="form-control">
                                          </div>

                                          <div class="form-group">
                                            <label for="">Side Image Description</label> <span style="color:red">*</span>
                                            <textarea name="description" type="text" rows="8" cols="80" class="form-control" required>
                                              {{ $human_info->description }}
                                            </textarea>
                                          </div>

                                          <div class="form-group">
                                              <label for="">Details Description</label></span>
                                              <textarea name="ck_description" id="my_ck_editor" class="form-control my-editor" cols="10">{{ $human_info->ck_description }}</textarea>
                                          </div>

                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                          <button type="submit" id="add-row" class="btn btn-success">Update</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              @endforeach




                              {{-- i am here --}}

                              <!--<form  action="{{ url('human/project/insert') }}" method="post" enctype="multipart/form-data">-->
                              <!--  @csrf-->
                              <!--<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
                              <!--    <div class="modal-dialog">-->
                              <!--        <div class="modal-content">-->
                              <!--            <div class="modal-header">-->
                              <!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                              <!--                <h4 class="modal-title" id="myModalLabel">Add Project Of Humanitarian Assistance</h4>-->
                              <!--            </div>-->
                              <!--            <div class="modal-body">-->
                              <!--                <div class="form-group">-->
                              <!--                  <label for="">Project Name <span style="color:red">*</span></label>-->
                              <!--                    <input type="text" id="name-input" class="form-control" name="project_name" placeholder="Enter Your Project name" cols="40" required>-->
                              <!--                </div>-->
                              <!--                <div class="form-group">-->
                              <!--                  <label for="">Project Duration <span style="color:red">*</span></label>-->
                              <!--                    <input type="text" id="name-input" class="form-control" name="project_duration" placeholder="enter project duration" cols="40" required>-->

                              <!--                 </div>-->

                              <!--                <div class="form-group">-->
                              <!--                  <label for="">Year <span style="color:red">*</span></label>-->
                              <!--                    <input type="text" id="name-input" class="form-control" name="year" placeholder="enter year" cols="40" required>-->
                              <!--                </div>-->

                              <!--                <div class="form-group">-->
                              <!--                  <label for="">Donar / partners <span style="color:red">*</span></label>-->
                              <!--                    <input type="text" id="name-input" class="form-control" name="project_donor" placeholder="enter your project donar" cols="40" required>-->
                              <!--                </div>-->
                              <!--                <div class="form-group">-->
                              <!--                  <label for="">Thematic Area <span style="color:red">*</span></label>-->
                              <!--                    <input type="text" id="name-input" class="form-control" name="thematic_area" placeholder="what is your Thematic Area" cols="40" required>-->
                              <!--                </div>-->
                              <!--            </div>-->
                              <!--            <div class="modal-footer">-->
                              <!--                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>-->
                              <!--                <button type="submit"  class="btn btn-success">Add</button>-->
                              <!--            </div>-->
                              <!--        </div>-->
                              <!--    </div>-->
                              <!--</div>-->
                              <!--</form>-->





                               <form  action="{{ url('all/programme/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">add Programme</h4>
                                           </div>
                                           <div class="modal-body">
                                             <div class="form-group">
                                               <label for=""> Select Programme Category <span style="color:red">*</span></label>
                                               <select class="@error('category_id') is-invalid @enderror" name="programme_category_id" style="width:100%;height: 40px;">
                                                 <option value="">--Select One--</option>
                                                 @foreach ($programme_categories as $key => $programme_detail)
                                                   <option value="{{ $programme_detail->id }}">{{ $programme_detail->category_name }}</option>
                                                 @endforeach
                                               </select>
                                               @error('category_id')
                                                   <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                   </span>
                                               @enderror
                                             </div>

                                             <div class="form-group">
                                                <label for="">programme title </label>
                                                 <input type="text" id="name-input" class="form-control @error('programme_title') is-invalid @enderror" name="programme_title">
                                                 @error('programme_title')
                                                     <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                     </span>
                                                 @enderror
                                             </div>

                                             {{-- <div class="form-group">
                                               <label for="">Title Description</label>
                                                 <textarea name="title_description" id="" class="form-control" cols="10" rows="10"></textarea>
                                                 @error('title_description')
                                                     <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                     </span>
                                                 @enderror
                                             </div> --}}

                                            <div class="form-group">
                                               <label for="">programme Image</label>
                                                <input type="file" id="name-input" class="form-control @error('programme_image') is-invalid @enderror" name="programme_image">
                                                @error('programme_image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                              <label for="">image Description</label>
                                                <textarea name="image_description" id="" class="form-control" cols="10" rows="10"></textarea>
                                                @error('image_description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                              <label for="">Add Another any description If You Needed! [optional]</label>
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
                                 <h2 style="color:red; margin-bottom:30px; text-align:center">View All Programme</h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>Programme Category</th>
                                               <th>Programme Title</th>
                                               {{-- <th>Title Description</th> --}}
                                               <th>Programme Image</th>
                                               <th>Image Description</th>
                                               <th>Another Description</th>
                                               <th>created_at</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>

                                       @foreach ($all_pogramme_details as $all_programme_detail)
                                         <tr>
                                             <td> {{ $all_programme_detail->id }}</td>
                                             <td> {{ App\Programme_categorie::find($all_programme_detail->programme_category_id)->category_name }}</td>
                                             <td>{{ $all_programme_detail->programme_title }}</td>
                                             {{-- <td><p style="height:80px; overflow:scroll;">{{ $all_programme_detail->title_description }}</p></td> --}}
                                             <td>
                                               <img src="{{ asset('uploads/all_programme_image') }}/{{ $all_programme_detail->programme_image }}" alt="not fount" style="width:100px; height:70px;">
                                             </td>
                                              <td><p style="height:80px; overflow:scroll;">{{ $all_programme_detail->image_description }}</p></td>
                                              <td><p style="height:80px; overflow:scroll;"> {{ $all_programme_detail->ck_description }} </p></td>
                                             <th>{{ $all_programme_detail->created_at->format('d-F-Y  h:i:s A') }}</th>
                                             <th>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $all_programme_detail->id }}">Edit</a>

                                            <div class="modal fade" id="{{ $all_programme_detail->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel">Edit Existing Project</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                        <form action="{{ url('all/programme/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="programme_id" value="{{ $all_programme_detail->id }}">
                                                         <div class="form-group">
                                                           <label for="">Select Category</label>
                                                         <select class="" name="category_id" style="width:100%;height: 40px;">
                                                            @foreach ($programme_categories as $key => $programme_categorie)
                                                              <option value="{{ $programme_categorie->id }}" {{ ($all_programme_detail->programme_category_id == $programme_categorie->id)?'selected':'' }}>{{ $programme_categorie->category_name }}</option>
                                                            @endforeach
                                                          </select>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="">progrmme title</label>
                                                          <input type="text" id="name-input" class="form-control" name="programme_title" value="{{ $all_programme_detail->programme_title }}">
                                                        </div>
                                                        {{-- <div class="form-group">
                                                          <label for="">Title Description <span style="color:red">*</span></label>
                                                            <textarea name="title_description" id="" class="form-control" cols="10" rows="10">
                                                              {{ $all_programme_detail->title_description }}
                                                            </textarea>

                                                        </div> --}}
                                                           <div class="form-group">
                                                              <label for="">programme Image</label>
                                                               <input type="file" id="name-input" class="form-control" name="programme_image">
                                                           </div>

                                                           <div class="form-group">
                                                             <label for="">image Description</label>
                                                               <textarea name="image_description" id="" class="form-control" cols="10" rows="10">
                                                                 {{ $all_programme_detail->image_description }}
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
                                               <a class="btn btn-danger btn-sm" href="{{ url('all/programme/delete') }}/{{ $all_programme_detail->id }}"  onclick="return confirm('are you sure delete programme [{{ $all_programme_detail->programme_description }}]')">Delete</a>
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

                               {{-- SECOND HERE --}}

                               <div class="table-responsive" style=" margin-top: 50px; padding: 0px 50px;">
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                     <h2 style="color:red; margin-bottom:50px; text-align:center">View Project Of Humanitarian & Emergency Support</h2>

                                       <thead>
                                           <tr>
                                               <th>No:</th>
                                               <th>project_name</th>
                                               <th>project_duration</th>
                                               <th>year</th>
                                               <th>project_donor</th>
                                               <th>thematic_area</th>
                                               <th>created_at</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       {{-- <tfoot> --}}
                                       @foreach ($human_project_infos as $human_project_info)

                                           <tr>
                                               <th>{{ $human_project_info->id }}</th>
                                               <th>{{ $human_project_info->project_name }}</th>
                                               <th>{{ $human_project_info->project_duration }}</th>
                                               <th>{{ $human_project_info->year }} </th>
                                               <th>{{ $human_project_info->project_donor }} </th>
                                               <th> {{ $human_project_info->thematic_area }}</th>
                                               <th>{{ $human_project_info->created_at->format('d-F-Y  h:i:s A') }}</th>
                                               <th>
                                                 <a type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#human{{ $human_project_info->id }}">Edit</a>

                                              <div class="modal fade" id="human{{ $human_project_info->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                               <div class="modal-dialog">
                                                   <div class="modal-content">
                                                       <div class="modal-header">
                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                           <h3 class="modal-title" id="myModalLabel">Update Project Of Humanitarian Assistance</h3>
                                                       </div>
                                                            <form action="{{ url('human/project/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                              @csrf
                                                              <div class="modal-body">
                                                                <input type="hidden" name="human_id" value="{{ $human_project_info->id }}">
                                                                  <div class="form-group">
                                                                    <label for="">Project Name <span style="color:red">*</span></label>
                                                                      <input type="text" id="name-input" class="form-control" name="project_name" value="{{ $human_project_info->project_name }}" cols="40">
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <label for="">Project Duration <span style="color:red">*</span></label>
                                                                      <input type="text" id="name-input" class="form-control" name="project_duration" value="{{ $human_project_info->project_duration }}" cols="40">

                                                                   </div>

                                                                  <div class="form-group">
                                                                    <label for="">Year <span style="color:red">*</span></label>
                                                                      <input type="text" id="name-input" class="form-control" name="year" value="{{ $human_project_info->year }}" cols="40">
                                                                  </div>

                                                                  <div class="form-group">
                                                                    <label for="">Donar / partners <span style="color:red">*</span></label>
                                                                      <input type="text" id="name-input" class="form-control" name="project_donor" value="{{ $human_project_info->project_donor }}" cols="40">
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <label for="">Thematic Area <span style="color:red">*</span></label>
                                                                      <input type="text" id="name-input" class="form-control" name="thematic_area" value="{{ $human_project_info->thematic_area }}" cols="40">
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
                                                 <a href="{{ url('human/project/delete') }}/{{ $human_project_info->id }}" class="btn btn-danger btn-rounded" onclick="return confirm('are you sure delete this project[{{ $human_project_info->project_name }}]')">Delete</a>
                                               </th>
                                           </tr>


                                         @endforeach
                                       {{-- </tfoot> --}}
                                   </table>
                               </div>






@endsection
