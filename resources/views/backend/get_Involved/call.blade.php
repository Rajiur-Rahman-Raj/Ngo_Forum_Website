@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Data Tables</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="index.html">Home</a></li>
                       <li><a href="#">get_Involved</a></li>
                       <li class="active">Call/Department</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title">Call/Department</h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add New Call/Department</button>
                               <!-- Modal -->
                               <form action="{{ url('cells_department/insert') }}" method="post">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">add Call/Department</h4>
                                           </div>
                                           <div class="modal-body">
                                               <div class="form-group">
                                                   <input type="text" id="name-input" class="form-control" name="position_name" placeholder="position name" required>
                                               </div>
                                               <div class="form-group">
                                                   <input type="text" id="position-input" class="form-control" name="name" placeholder="Name" required>
                                               </div>
                                               <div class="form-group">
                                                   <textarea id="age-input" class="form-control" name="position" placeholder="position" cols="40" required></textarea >
                                               </div>
                                               <div class="form-group">
                                                   <input type="text" id="date-input" class="form-control" name="email" placeholder="Email address" required>
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

                                               <th>nu</th>
                                               <th>position_name</th>
                                               <th>name</th>
                                               <th>position</th>
                                               <th>email</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       {{-- <tfoot> --}}
                                       @foreach ($celldepartments as $celldepartment)

                                           <tr>
                                               <th>{{ $celldepartment->id }}</th>
                                               <th>{{ $celldepartment->position_name }}</th>
                                               <th>{{ $celldepartment->name }}</th>
                                               <th>{{ $celldepartment->position }}</th>
                                               <th>{{ $celldepartment->email }}</th>
                                               <th>
                                                 <a type="button" class="btn btn-sm btn-info rounded" data-toggle="modal" data-target="#{{ $celldepartment->id }}"><i class="fas fa-edit"></i></a>

                                              <div class="modal fade" id="{{ $celldepartment->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                               <div class="modal-dialog">
                                                   <div class="modal-content">
                                                       <div class="modal-header">
                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                           <h3 class="modal-title" id="myModalLabel">celldepartment</h3>
                                                       </div>
                                                       <form action="{{ url('celldepartment/edit/insert') }}" method="post">
                                                         @csrf
                                                         <div class="modal-body">
                                                         <div class="form-group">
                                                           <input type="hidden" name="celldepartment_id" value="{{ $celldepartment->id }}">
                                                             <input type="text" id="name-input" class="form-control" name="position_name" value="{{ $celldepartment->position_name }}" placeholder="position name" required>
                                                         </div>
                                                         <div class="form-group">
                                                             <input type="text" id="position-input" class="form-control" name="name" value="{{ $celldepartment->name }}" placeholder="Name" required>
                                                         </div>
                                                         <div class="form-group">
                                                             <textarea id="age-input" class="form-control" name="position" placeholder="position" cols="40" required>{{ $celldepartment->position }}</textarea >
                                                         </div>
                                                         <div class="form-group">
                                                             <input type="email" id="date-input" class="form-control" name="email" value="{{ $celldepartment->email }}" placeholder="Email address" required>
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
                                                 <a style="display:inline-block;margin-top:10px" href="{{ url('celldepartment/delete') }}/{{ $celldepartment->id  }}" type="button" class="btn btn-sm btn-danger rounded" onclick="return confirm('are you sure delete this position[{{ $celldepartment->name }}]')"><i class="fas fa-trash-alt"></i></a>
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
