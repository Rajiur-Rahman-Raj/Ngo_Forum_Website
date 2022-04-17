@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Add All Banner</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="index.html">Home</a></li>
                       <li><a href="#">Home Page</a></li>
                       <li class="active">Add Home Banner</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title">Banner add view</h4>
                           </div>
                           @if(session('success_message'))
                             <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Good! </strong> {{ session('success_message') }}
                              </div>
                          @endif
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm mb-3" data-toggle="modal" data-target="#myModal3">Add Banner Image</button>
                               <!-- Modal -->

                               {{-- test rate content form --}}
                               <form action="{{ url('banner/image/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                                 <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                     <div class="modal-content">
                                       <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                         <h4 class="modal-title" id="myModalLabel">Add Banner Image</h4>
                                       </div>
                                       <div class="modal-body">
                                         <div class="form-group">
                                           <label for="">Banner Title</label> <span style="color:red">*</span>
                                           <input type="text" id="name-input" class="form-control" name="title" required>
                                         </div>
                                         <div class="form-group">
                                           <label for="">Choose Banner Image</label> <span style="color:red">*</span>
                                           <input type="file" id="name-input" class="form-control" name="image" required>
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

                              {{-- wqtl category wise content table --}}
                               <div class="table-responsive" style=" margin-top: 50px; padding: 0px 50px;">
                                 <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                    <h2 style="color:red; margin-bottom:30px; text-align:center">View banner images</h2>
                                     <thead>
                                         <tr>
                                             <th>SL No.</th>
                                             <th>Banner Title</th>
                                             <th>Image</th>
                                             <th>created_at</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>

                                     @foreach ($all_banner_images as $all_banner_image)
                                       <tr>
                                           <td> {{ $all_banner_image->id }}</td>
                                           <td> {{ $all_banner_image->title }}</td>
                                           <td>
                                             <img src="{{ asset('uploads/banner_image') }}/{{ $all_banner_image->image }}" alt="not fount" style="width:100px; height:70px;">
                                           </td>
                                           <th>{{ $all_banner_image->created_at->format('d-F-Y  h:i:s A') }}</th>
                                           <th>
                                             <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#wqtl{{ $all_banner_image->id }}">Edit</a>
                                          <div class="modal fade" id="wqtl{{ $all_banner_image->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                           <div class="modal-dialog">
                                               <div class="modal-content">
                                                   <div class="modal-header">
                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                       <h3 class="modal-title" id="myModalLabel">Edit</h3>
                                                   </div>
                                                   <div class="modal-body">
                                                      <form action="{{ url('banner/image/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                       @csrf
                                                       <input type="hidden" name="category_id" value="{{ $all_banner_image->id }}">

                                                        <div class="form-group">
                                                          <label for="">Update Title</label> <span style="color:red">*</span>
                                                          <input type="text" id="name-input" class="form-control" name="title" value="{{ $all_banner_image->title }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="">Update Banner Image</label> <span style="color:red">*</span>
                                                          <input type="file" id="name-input" class="form-control" name="image" required>
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
                                             <a class="btn btn-danger btn-sm" href="{{ url('banner/image/delete') }}/{{ $all_banner_image->id }}" onclick="return confirm('are you sure delete data!')">Delete</a>
                                           </th>
                                       </tr>

                                       @endforeach
                           </div>
                       </div>
                   </div>
               </div><!-- Row -->
           </div><!-- Main Wrapper -->
           {{-- <div class="page-footer">
               <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
           </div> --}}
       </div><!-- Page Inner -->
   </main><!-- Page Content -->
@endsection
