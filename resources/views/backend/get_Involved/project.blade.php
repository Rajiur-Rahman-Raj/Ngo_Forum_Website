@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Data Tables</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="index.html">Home</a></li>
                       <li><a href="#">get_Involved</a></li>
                       <li class="active">Project Offices</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title">Project Offices List</h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">add Project Offices</button>
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
                               <form action="{{ url('project/office/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">add Project Offices</h4>
                                           </div>
                                           <div class="modal-body">
                                               <div class="form-group">
                                                   <input type="text" id="name-input" class="form-control" name="project_location" placeholder="project_location" required>
                                               </div>
                                               <div class="form-group">
                                                   <input type="text" id="position-input" class="form-control" name="project_name" placeholder="project_name">
                                               </div>
                                               <div class="form-group">
                                                   <input type="file" id="age-input" class="form-control" name="funded_logo">
                                               </div>
                                               <div class="form-group">
                                                   <input type="text" id="date-input" class="form-control" name="contact_parson" placeholder="contact_parson">
                                               </div>
                                               <div class="form-group">
                                                   <input type="text" id="date-input" class="form-control" name="address" placeholder="address">
                                               </div>
                                               <div class="form-group">
                                                   <input type="text" id="date-input" class="form-control" name="phone" placeholder="phone">
                                               </div>
                                               <div class="form-group">
                                                   <input type="text" id="date-input" class="form-control" name="email" placeholder="email">
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
                               <div class="table-responsive">
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>SL</th>
                                               <th>project_location</th>
                                               <th>project_name</th>
                                               <th>funded_logo</th>
                                               <th>contact_parson</th>
                                               <th>address</th>
                                               <th>phone</th>
                                               <th>email</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       {{-- <tfoot> --}}
                                       @foreach ($project_office as $project)

                                           <tr>
                                               <th>{{ $project->id }}</th>
                                               <th>{{ $project->project_location }}</th>
                                               <th>{{ $project->project_name }}</th>
                                               <th>
                                                 <img src="{{ asset('uploads/project_office_logo') }}/{{ $project->funded_logo }}" alt="not fount" style="width:100px; height:70px;">
                                               </th>
                                               <th>{{ $project->contact_parson }}</th>
                                               <th>{{ $project->address }}</th>
                                               <th>{{ $project->phone }}</th>
                                               <th>{{ $project->email }}</th>
                                               <th>
                                                 <a type="button" class="btn btn-info rounded" data-toggle="modal" data-target="#{{ $project->id }}">Edit</a>

                                              <div class="modal fade" id="{{ $project->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                               <div class="modal-dialog">
                                                   <div class="modal-content">
                                                       <div class="modal-header">
                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                           <h3 class="modal-title" id="myModalLabel">project project_office</h3>
                                                       </div>
                                                       <div class="modal-body">
                                                         <form action="{{ url('project/office/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                           @csrf
                                                           <input type="hidden" name="project_id" value="{{ $project->id }}">
                                                         <div class="form-group">
                                                             <input type="text" id="name-input" class="form-control" name="project_location" value="{{ $project->project_location }}" required>
                                                         </div>
                                                         <div class="form-group">
                                                             <input type="text" id="position-input" class="form-control" name="project_name" value="{{ $project->project_name }}" required>
                                                         </div>
                                                         <div class="form-group">
                                                             <input type="file" id="age-input" class="form-control" name="funded_logo" required>
                                                         </div>
                                                         <div class="form-group">
                                                             <input type="text" id="date-input" class="form-control" name="contact_parson" value="{{ $project->contact_parson }}" required>
                                                         </div>
                                                         <div class="form-group">
                                                             <input type="text" id="date-input" class="form-control" name="address" value="{{ $project->address }}" required>
                                                         </div>
                                                         <div class="form-group">
                                                             <input type="text" id="date-input" class="form-control" name="phone" value="{{ $project->phone }}" required>
                                                         </div>
                                                         <div class="form-group">
                                                             <input type="text" id="date-input" class="form-control" name="email" value="{{ $project->email }}" required>
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
                                                 <a class="btn btn-danger btn-sm" href="{{ url('project/delete') }}/{{ $project->id }}"  onclick="return confirm('are you sure delete product [{{ $project->project_name }}]')">Delete</a>
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
@endsection
