@extends('layouts.Dashboard')

@section('content')

<style>
    .modal-dialog {
        width: 1200px !important; 
    }
</style>
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">All News</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}">Dashboard</a></li>
                       <li><a href="#">Add News</a></li>
                       <li class="active">add all news</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title"> Add  All newses </h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add newses</button>
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
                              
                              <style>
                                  .form-control{
                                      padding : 5px 10px !important;
                                  }
                              </style>
                               <form  action="{{ url('all/news/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">add Newses</h4>
                                           </div>
                                           <div class="modal-body">
                                             <div class="form-group">
                                               <label for=""> Select News Category </label>
                                               <select class="@error('category_id') is-invalid @enderror" name="news_category_id" style="width:100%;height: 40px;">
                                                 <option value="">--Select One--</option>
                                                 @foreach ($category_news_details as $key => $category_news_detail)
                                                   <option value="{{ $category_news_detail->id }}">{{ $category_news_detail->category_name }}</option>
                                                 @endforeach
                                               </select>
                                               @error('category_id')
                                                   <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                   </span>
                                               @enderror
                                             </div>
                                             
                                             <div class="form-group">
                                                <label for="exampleInputEmail1">News Date</label>
                                                <input type="date" class="form-control @error('created_at') is-invalid @enderror" id="created_at" aria-describedby="created_at" placeholder="Enter Date" name="created_at" value="{{ old('created_at') }}">
                                                @error('created_at')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                             <div class="form-group">
                                                <label for="exampleInputEmail1">News Title</label>
                                                <input type="text" class="form-control @error('category_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your News Title" name="news_title" value="{{ old('product_name') }}">
                                                @error('news_title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                               <label for="">News Image</label>
                                                <input type="file" id="name-input" class="form-control @error('news_image') is-invalid @enderror" name="news_image">
                                                @error('news_image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                              <label for="">News Description</label>
                                                <textarea name="news_description" id="" class="form-control" cols="10" rows="10"></textarea>
                                                @error('news_description')
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
                                 <h2 style="color:red; margin-bottom:30px; text-align:center">View All News</h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>News Category</th>
                                               <th>news_title</th>
                                               <th>news_description</th>
                                               <th>news_image</th>
                                               <th>Another Description</th>
                                               <th>created_at</th>
                                               <th>News Status</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       {{-- <tfoot> --}}

                                       @foreach ($all_news_details as $all_news_detail)
                                         <tr>
                                             <td> {{ $all_news_detail->id }}</td>
                                             <td> {{ App\NewsCategory::find($all_news_detail->news_category_id)->category_name }}</td>
                                             <td>{{ $all_news_detail->news_title }}</td>
                                             <td><p style="height:80px; overflow:scroll;">{{ $all_news_detail->news_description }}</p></td>
                                             <td>
                                               <img src="{{ asset('uploads/all_news_image') }}/{{ $all_news_detail->news_image }}" alt="not fount" style="width:100px; height:70px;">
                                              </td>
                                              <td><p style="height:80px; overflow:scroll;"> {{ $all_news_detail->ck_description }} </p></td>
                                             <td>{{ $all_news_detail->created_at->format('d-F-Y  h:i:s A') }}</td>
                                             <td>
                                               @if ($all_news_detail->news_status == 'active')
                                                 <a href="#" style="font-size:20px;">active</a>
                                               @else
                                                 <a href="#" style="font-size:20px;">deactive</a>
                                               @endif
                                            </td>
                                             <td>
                                               @if ($all_news_detail->news_status == 'active')
                                                 <a type="button" class="btn btn-sm" href="{{ url('news/deactive') }}/{{ $all_news_detail->id }}"  style="background-color:#c60b81!important; color:white; margin-bottom:7px">Dactive</a>
                                               @else
                                                 <a type="button" class="btn btn-sm" href="{{ url('news/active') }}/{{ $all_news_detail->id }}"  style="background-color:#148f14!important; color:white; margin-bottom:7px">Active</a>
                                               @endif
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $all_news_detail->id }}" style="margin-bottom:7px;">Edit</a>
                                            <div class="modal fade" id="{{ $all_news_detail->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel">Edit Existing Project</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                       <form action="{{ url('single/news/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name=" news_id" value="{{ $all_news_detail->id }}">
                                                         <div class="form-group">
                                                           <label for="">Select Category</label>
                                                         <select class="" name="category_id" style="width:100%;height: 40px;">
                                                            @foreach ($category_news_details as $key => $category_news_detail)
                                                              <option value="{{ $category_news_detail->id }}" {{ ($all_news_detail->news_category_id == $category_news_detail->id)?'selected':'' }}>{{ $category_news_detail->category_name }}</option>
                                                            @endforeach
                                                          </select>
                                                        </div>
                                                         <div class="form-group">
                                                           <label for="">News Title</label>
                                                             <input type="text" id="name-input" class="form-control" name="news_title" value="{{ $all_news_detail->news_title }}">
                                                         </div>

                                                           <div class="form-group">
                                                              <label for="">News Image</label>
                                                               <input type="file" id="name-input" class="form-control" name="news_image">
                                                           </div>

                                                           <div class="form-group">
                                                             <label for="">News Description</label>
                                                               <textarea name="news_description" id="" class="form-control" cols="10" rows="10">
                                                                 {{ $all_news_detail->news_description }}
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
                                              <a class="btn btn-danger btn-sm" href="{{ url('news/delete') }}/{{ $all_news_detail->id }}"  onclick="return confirm('are you sure delete product [{{ $all_news_detail->news_title }}]')">Delete</a>

                                             </td>
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
                                        {{-- </tfoot> --}}

@endsection
