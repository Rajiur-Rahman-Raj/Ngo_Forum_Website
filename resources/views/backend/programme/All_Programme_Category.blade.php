@extends('layouts.Dashboard')

@section('content')
<style>
    .modal-dialog{
        width: 1200px;
    }
    #mceu_39{
        display: none !important;
     }
     .mce-notification-inner{
        display: none !important;
     }
</style>

  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Programme</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}">Dashboard</a></li>
                       <li><a href="#">Add programme</a></li>
                       <li class="active">add programme Category</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title"> Add Programme Category</h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add Programme category</button>
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
                               <form  action="{{ url('category/programme/insert') }}" method="post" enctype="multipart/form-data">
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
                                               <label for=""> Category Name </label>
                                                 <input type="text" id="name-input" class="form-control" name="category_name" placeholder="enter your category name" value="{{ old('category_name') }}" required>
                                             </div>
                                             <div class="form-group">
                                               <label for="">Category Description</label>
                                                     <textarea type="text" name="category_description" class="my-editor" rows="8" cols="80">
                                                       {{ old('category_description') }}
                                                     </textarea>
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
                                 <h2 style="color:red; margin-bottom:30px; text-align:center">View Category List</h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>Category Name</th>
                                               <th>Category Description</th>
                                               <th>created_at</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>


                                       @forelse($category_pogramme_details as  $programme_category)
                                         <tr>
                                             <td> {{ $programme_category->id }}</td>
                                             <td>{{ $programme_category->category_name }}</td>
                                             <td>{{ $programme_category->category_description }}</td>
                                             <th>{{ $programme_category->created_at->format('d-F-Y  h:i:s A') }}</th>
                                             <th>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $programme_category->id }}">Edit</a>

                                            <div class="modal fade" id="{{ $programme_category->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel">Edit news Category</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                       <form action="{{ url('category/programme/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="category_id" value="{{ $programme_category->id }}">
                                                         <div class="form-group">
                                                           <label for=""> Category Name </label>
                                                             <input type="text" id="name-input" class="form-control" name="category_name" placeholder="enter your news category" value="{{ $programme_category->category_name }}">
                                                         </div>
                                                         <div class="form-group">
                                                           <label for="">Category Description</label>
                                                           <textarea type="text" name="category_description" rows="8" cols="70" class="form-control">{{ $programme_category->category_description }}</textarea>
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
                                               <a class="btn btn-danger btn-sm" href="{{ url('category/programme/delete') }}/{{ $programme_category->id }}"  onclick="return confirm('are you sure delete product [{{ $programme_category->category_name }}]')">Delete</a>
                                             </th>
                                         </tr>
                                       @empty
                                         <tr class="text-center text-danger">
                                           <td colspan="4"> No Data Available</td>
                                         </tr>
                                       @endforelse


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