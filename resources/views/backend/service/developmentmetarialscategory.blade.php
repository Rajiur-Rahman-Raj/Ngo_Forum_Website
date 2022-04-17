@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Development Metarials Category</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}">Dashboard</a></li>
                       <li><a href="#">service</a></li>
                       <li class="active">Development Metarials Category</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title"> Add Development Metarials Category </h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add Category</button>
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
                               <form  action="{{ url('development/category/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">add Development Metarials Category</h4>
                                           </div>
                                           <div class="modal-body">
                                             <div class="form-group">
                                               <label for=""> Category Name <span style="color:red">*</span> </label>
                                                 <input type="text" id="name-input" class="form-control" name="category_name" placeholder="enter your metarial category" required>
                                             </div>

                                             <div class="form-group">
                                               <label for=""> Category Description </label>
                                                <textarea name="category_description" rows="8" cols="80" type="text"></textarea>
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
                               <div class="table-responsive" style="margin-top: 50px; padding: 0px 50px;">
                                 <h2 style="color:red; margin-bottom:30px; text-align:center">View Category List</h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>Category Name</th>
                                               <th>Description</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>


                                       @forelse($metarials_categories as $metarials_category)
                                         <tr>
                                             <td> {{ $metarials_category->id }}</td>
                                             <td>{{ $metarials_category->category_name }}</td>
                                             <td>
                                               <p style="height:90px; overflow:scroll;">{{ $metarials_category->category_description }}</p>
                                             </td>
                                             <th>{{ $metarials_category->created_at->format('d-F-Y  h:i:s A') }}</th>
                                             <th>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $metarials_category->id }}">Edit</a>

                                            <div class="modal fade" id="{{ $metarials_category->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel">Edit Metarials Category</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                       <form action="{{ url('metarials/category/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="metarials_id" value="{{ $metarials_category->id }}">
                                                         <div class="form-group">
                                                           <label for=""> Category Name </label>
                                                             <input type="text" id="name-input" class="form-control" name="category_name" value="{{ $metarials_category->category_name }}">
                                                         </div>
                                                         <div class="form-group">
                                                           <label for=""> Category Description </label>
                                                            <textarea name="category_description" rows="8" cols="70" type="text">
                                                              {{ $metarials_category->category_description }}
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
                                               <a class="btn btn-danger btn-sm" href="{{ url('metarial/category/delete') }}/{{ $metarials_category->id }}"  onclick="return confirm('are you sure delete product [{{ $metarials_category->category_name }}]')">Delete</a>
                                             </th>
                                         </tr>
                                       @empty
                                         <tr class="text-center text-danger">
                                           <td colspan="4"> No Data Available</td>
                                         </tr>
                                       @endforelse
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
