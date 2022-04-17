@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Data Tables</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('/') }}">Home</a></li>
                       <li><a href="#">get_Involved</a></li>
                       <li class="active">Career</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title">Career List</h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">add Career</button>
                               <!-- Modal -->
                               <form action="{{ url('career/insert') }}" method="post">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">add Career</h4>
                                           </div>
                                           <div class="modal-body">
                                               <div class="form-group">
                                                   <input type="text" id="name-input" class="form-control" name="job_tatile" placeholder="Job Title" required>
                                               </div>
                                               <div class="form-group">
                                                   <input type="text" id="position-input" class="form-control" name="Type" placeholder="Type" required>
                                               </div>
                                               <div class="form-group">
                                                   <input type="text" id="age-input" class="form-control" name="Location" placeholder="Location" required>
                                               </div>
                                               <div class="form-group">
                                                   <input type="text" id="date-input" class="form-control " name="Salary" placeholder="Salary" required>
                                               </div>
                                               <div class="form-group">
                                                   <input type="text" id="date-input" class="form-control date-picker" name="Deadline" placeholder="Deadline" required>
                                               </div>
                                               <div class="form-group">
                                                   <input type="text" id="date-input" class="form-control " name="link" placeholder="Link" required>
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
                                               <th>job_tatile</th>
                                               <th>Type</th>
                                               <th>Location</th>
                                               <th>Salary</th>
                                               <th>Deadline</th>
                                               <th>Link</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       {{-- <tfoot> --}}
                                       @foreach ($careers as $career)

                                           <tr>
                                               <th>{{ $career->job_tatile }}</th>
                                               <th>{{ $career->Type }}</th>
                                               <th>{{ $career->Location }}</th>
                                               <th>{{ $career->Salary }}</th>
                                               <th>{{ $career->Deadline }}</th>
                                               <th>{{ $career->link }}</th>
                                               <th>
                                                 <a type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#{{ $career->id }}">Edit</a>

                                              <div class="modal fade" id="{{ $career->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                               <div class="modal-dialog">
                                                   <div class="modal-content">
                                                       <div class="modal-header">
                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                           <h3 class="modal-title" id="myModalLabel">Career title</h3>
                                                       </div>
                                                       <form action="{{ url('career/edit/insert') }}" method="post">
                                                         @csrf
                                                       <div class="modal-body">
                                                         <div class="form-group">
                                                             <input type="hidden" name="career_id" value="{{ $career->id }}">
                                                             <input type="text" id="name-input" class="form-control" name="job_tatile" value="{{ $career->job_tatile }}" required>
                                                         </div>
                                                         <div class="form-group">
                                                             <input type="text" id="position-input" class="form-control" name="Type" value="{{ $career->Type }}" required>
                                                         </div>
                                                         <div class="form-group">
                                                             <input type="text" id="age-input" class="form-control" name="Location" value="{{ $career->Location }}" required>
                                                         </div>
                                                         <div class="form-group">
                                                             <input type="text" id="date-input" class="form-control " name="Salary" value="{{ $career->Salary }}" required>
                                                         </div>
                                                         <div class="form-group">
                                                             <input type="text" id="date-input" class="form-control date-picker" name="Deadline" value="{{ $career->Deadline }}" required>
                                                         </div>
                                                         <div class="form-group">
                                                             <input type="text" id="date-input" class="form-control " name="link" value="{{ $career->link }}" required>
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
                                                 <a href="{{ url('career/delete') }}/{{ $career->id  }}" type="button" class="btn btn-danger btn-rounded" onclick="return confirm('are you sure delete this position[{{ $career->name }}]')">Delete</a>
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
