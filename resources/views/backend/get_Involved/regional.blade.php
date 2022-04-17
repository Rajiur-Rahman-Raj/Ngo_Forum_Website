@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Data Tables</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('/') }}">Home</a></li>
                       <li><a href="#">get_Involved</a></li>
                       <li class="active">Regional Offices</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title">Regional Offices List</h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">add Regional Offices</button>
                               <!-- Modal -->
                               <form action="{{ url('regional/insert') }}" method="post">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">add regional_office</h4>
                                           </div>
                                           <div class="modal-body">
                                               <div class="form-group">
                                                   <input type="text" id="name-input" class="form-control" name="region" placeholder="Region" required>
                                               </div>
                                               <div class="form-group">
                                                   <input type="text" id="position-input" class="form-control" name="person" placeholder=" Person">
                                               </div>
                                               <div class="form-group">
                                                   <textarea id="age-input" class="form-control" name="street_address" placeholder="Street Address" cols="40" required></textarea >
                                               </div>
                                               <div class="form-group">
                                                   <textarea id="date-input" class="form-control" name="phone" placeholder="Phone" required></textarea>
                                               </div>
                                               <div class="form-group">
                                                   <input type="text" id="date-input" class="form-control" name="email" placeholder="Email" required>
                                               </div>
                                               <div class="form-group">
                                                   <textarea id="date-input" class="form-control" name="district_covergae" placeholder="District Covergae" required></textarea>
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
                                               <th>Region</th>
                                               <th>Person</th>
                                               <th>Street Address</th>
                                               <th>Phone</th>
                                               <th>Email</th>
                                               <th>District Covergae</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       {{-- <tfoot> --}}
                                       @foreach ($regionaloffices as $regionaloffice)

                                           <tr>

                                               <th>{{ $regionaloffice->id }}</th>
                                               <th>{{ $regionaloffice->region }}</th>
                                               <th>{{ $regionaloffice->person }}</th>
                                               <th>{{ $regionaloffice->street_address }}</th>
                                               <th>{{ $regionaloffice->phone }}</th>
                                               <th>{{ $regionaloffice->email }}</th>
                                               <th>{{ $regionaloffice->district_covergae }}</th>
                                               <th>
                                                 <a type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#{{ $regionaloffice->id }}">Edit</a>

                                              <div class="modal fade" id="{{ $regionaloffice->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                               <div class="modal-dialog">
                                                   <div class="modal-content">
                                                       <div class="modal-header">
                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                           <h3 class="modal-title" id="myModalLabel">regionaloffice title</h3>
                                                       </div>
                                                       <form action="{{ url('regionaloffice/edit/insert') }}" method="post">
                                                         @csrf
                                                       <div class="modal-body">
                                                         <div class="form-group">
                                                            <input type="hidden" name="regionaloffice_id" value="{{ $regionaloffice->id }}">
                                                             <input type="text" id="name-input" class="form-control" name="region" value="{{ $regionaloffice->region }}" placeholder="Region" required>
                                                         </div>
                                                         <div class="form-group">
                                                             <input type="text" id="position-input" class="form-control" name="person" value="{{ $regionaloffice->person }}" placeholder=" Person">
                                                         </div>
                                                         <div class="form-group">
                                                             <textarea id="age-input" class="form-control" name="street_address"  placeholder="Street Address" cols="40" required> {{ $regionaloffice->street_address }}</textarea >
                                                         </div>
                                                         <div class="form-group"><textarea id="date-input" class="form-control" name="phone" placeholder="Phone" required>{{ $regionaloffice->phone }}</textarea>
                                                         </div>
                                                         <div class="form-group">
                                                             <input type="text" id="date-input" class="form-control" value="{{ $regionaloffice->email }}" name="email" placeholder="Email" required>
                                                         </div>
                                                         <div class="form-group">
                                                             <input type="text" id="date-input" class="form-control" name="district_covergae" value="{{ $regionaloffice->district_covergae }}" placeholder="District Covergae" required>
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
                                                 <a href="{{ url('regionaloffice/delete') }}/{{ $regionaloffice->id  }}" type="button" class="btn btn-danger btn-rounded" onclick="return confirm('are you sure delete this position[{{ $regionaloffice->name }}]')">Delete</a>
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
