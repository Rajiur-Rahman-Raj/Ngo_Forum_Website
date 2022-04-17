@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Policy Formulating</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}">Dashboard</a></li>
                       <li><a href="#">who are you</a></li>
                       <li class="active">network_affiliation</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title">Network Affiliation </h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add Network Affiliation</button>
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
                               <form  action="{{ url('network/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               <h4 class="modal-title" id="myModalLabel">add policy</h4>
                                           </div>
                                           <div class="modal-body">
                                             <div class="form-group">
                                                 <input type="hidden" id="name-input" class="form-control" name="title" >
                                             </div>

                                               <div class="form-group">
                                                  <label for="">Development Partners Image <span style="color:red">*</span></label>
                                                   <input type="file" id="name-input" class="form-control @error('development_image') is-invalid @enderror" name="development_image">
                                                   @error('development_image')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                   @enderror
                                                </div>
                                               <div class="form-group">
                                                 <label for="">Networking Partners Image<span style="color:red">*</span></label>
                                                   <input type="file" id="name-input" class="form-control @error('networking_image') is-invalid @enderror" name="networking_image">
                                                   @error('networking_image')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
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
                                 <h2 style="color:red; margin-bottom:30px; text-align:center">View Policy</h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>Development image</th>
                                               <th>Networking Image</th>
                                               <th>Created At</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       {{-- <tfoot> --}}

                                       @foreach ($network_info as  $network_infos)
                                         <tr>
                                             <td> {{ $network_infos->id }}</td>
                                             <td>
                                               <img src="{{ asset('uploads/network_image') }}/{{ $network_infos->development_image }}" alt="not fount" style="width:100px; height:70px;">
                                             </td>
                                             <td>
                                               <img src="{{ asset('uploads/network_image') }}/{{ $network_infos->networking_image }}" alt="not fount" style="width:100px; height:70px;">
                                             </td>
                                             <th>{{ $network_infos->created_at->format('d-F-Y  h:i:s A') }} </th>
                                             <th>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $network_infos->id }}">Edit</a>

                                            <div class="modal fade" id="{{ $network_infos->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLabel">Edit Network</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                       <form action="{{ url('network/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="network_id" value="{{ $network_infos->id }}">
                                                         
                                                         <div class="form-group">
                                                            <label for="">Development Image</label>
                                                             <input type="file" id="name-input" class="form-control" name="development_image" required>
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="">Networking Image</label>
                                                             <input type="file" id="name-input" class="form-control" name="networking_image" required>
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
                                               <a class="btn btn-danger btn-sm" href="{{ url('network/delete') }}/{{ $network_infos->id }}"  onclick="return confirm('are you sure delete this content!')">Delete</a>
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

   @section('custom_js')
     <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
   @endsection
@endsection
