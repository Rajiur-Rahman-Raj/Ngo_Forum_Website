@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Water Quality Testing Lab</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="index.html">Home</a></li>
                       <li><a href="#">Service</a></li>
                       <li class="active">wqtl</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title">WQTL ADD VIEW</h4>
                           </div>
                           @if(session('success_message'))
                             <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Good! </strong> {{ session('success_message') }}
                              </div>
                          @endif
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm mb-3" data-toggle="modal" data-target="#myModal">Update WQTL</button>
                               <button type="button" class="btn btn-success m-b-sm mb-3" data-toggle="modal" data-target="#myModal2">add parameter wise test rate category</button>
                               <button type="button" class="btn btn-success m-b-sm mb-3" data-toggle="modal" data-target="#myModal3">add parameter wise test rate content</button>
                               <button type="button" class="btn btn-success m-b-sm mb-3" data-toggle="modal" data-target="#myModal4">Add Special Packege</button>
                               <!-- Modal -->
                               @foreach ($wqtl_infos as $wqtl_info)
                                 <form action="{{ url('update/wqtl/insert') }}" method="post" enctype="multipart/form-data">
                                   @csrf
                                   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                     <div class="modal-dialog">
                                       <div class="modal-content">
                                         <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                           <h4 class="modal-title" id="myModalLabel">Update wqtl</h4>
                                         </div>
                                         <div class="modal-body">
                                           <div class="form-group">
                                             <input type="hidden" id="name-input" class="form-control" name="wqtl_id" value="{{ $wqtl_info->id }}">
                                           </div>
                                           <div class="form-group">
                                             <label for="">wqtl logo</label> <span style="color:red">*</span>
                                             <input type="file" id="name-input" class="form-control" name="logo" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Description</label> <span style="color:red">*</span>

                                             <textarea name="description" type="text" rows="8" cols="80" required>
                                               {{ $wqtl_info->description }}
                                             </textarea>
                                           </div>
                                           <div class="form-group">
                                             <label for="" style="color:red; font-size:19px"> Add Contact Information for wqtl </label><br>
                                             <label for="">Name</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control" name="name" value="{{ $wqtl_info->name }}" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Designation</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control" name="designation" value="{{ $wqtl_info->designation }}" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Phone</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control"  name="phone" value="{{ $wqtl_info->phone }}" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Email</label> <span style="color:red">*</span>
                                             <input type="email" id="position-input" class="form-control"  name="email" value="{{ $wqtl_info->email }}" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Location</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control"  name="location" value="{{ $wqtl_info->location }} " required>
                                           </div>

                                           <div class="form-group">
                                             <label for="" style="color:red; font-size:19px"> Add Focal Person for wqtl </label><br>
                                             <label for="">Name</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control" name="focal_name" value="{{ $wqtl_info->focal_name }}" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Designation</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control" name="focal_designation" value="{{ $wqtl_info->focal_designation }} " required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Phone</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control"  name="focal_phone" value="{{ $wqtl_info->focal_phone }}" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Email</label> <span style="color:red">*</span>
                                             <input type="email" id="position-input" class="form-control"  name="focal_email" value="{{ $wqtl_info->focal_email }}" required>
                                           </div>
                                           <div class="form-group">
                                             <label for="">Location</label> <span style="color:red">*</span>
                                             <input type="text" id="position-input" class="form-control"  name="focal_location" value="{{ $wqtl_info->focal_location }}" required>
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

                               {{-- test rate category form --}}
                               <form action="{{ url('test/rate/category/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                                 <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                     <div class="modal-content">
                                       <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                         <h4 class="modal-title" id="myModalLabel">Add Test Rate Category</h4>
                                       </div>
                                       <div class="modal-body">
                                         <div class="form-group">
                                           <label for="">Category Name</label> <span style="color:red">*</span>
                                           <input type="text" class="form-control" name="category_name" required>
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

                               {{-- test rate content form --}}
                               <form action="{{ url('wqtl_test_rate/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                                 <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                     <div class="modal-content">
                                       <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                         <h4 class="modal-title" id="myModalLabel">Add Wqtl Test Rate Content</h4>
                                       </div>
                                       <div class="modal-body">
                                         <div class="form-group">
                                           <label for=""> Select Center Name <span style="color:red">*</span></label>
                                           <select class="" name="testrate_category_id" style="width:100%;height: 40px;">
                                             <option value="">--Select One--</option>
                                             @foreach ($all_wqtl_testrates as $all_wqtl_testrate)
                                               <option value="{{ $all_wqtl_testrate->id }}">{{ $all_wqtl_testrate->category_name }}</option>
                                             @endforeach
                                           </select>
                                         </div>
                                         <div class="form-group">
                                           <label for="">SL No.</label> <span style="color:red">*</span>
                                           <input type="text" id="name-input" class="form-control" name="serial_number" required>
                                         </div>
                                         <div class="form-group">
                                           <label for="">Parameters</label> <span style="color:red">*</span>
                                           <input type="text" id="position-input" class="form-control" name="parameters" required>
                                         </div>
                                         <div class="form-group">
                                           <label for="">Method</label> <span style="color:red">*</span>
                                           <input type="text" id="position-input" class="form-control" name="method" required>
                                         </div>
                                         <div class="form-group">
                                           <label for="">Unit Cost (BDT)</label> <span style="color:red">*</span>
                                           <input type="text" id="position-input" class="form-control"  name="cost" required>
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

                               {{-- special package form --}}
                               <form action="{{ url('packege/insert') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                                 <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                     <div class="modal-content">
                                       <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                         <h4 class="modal-title" id="myModalLabel">Add Special Packege</h4>
                                       </div>
                                       <div class="modal-body">
                                         <div class="form-group">
                                           <label for="">Packege Name</label> <span style="color:red">*</span>
                                           <input type="text" id="name-input" class="form-control" name="name" required>
                                         </div>
                                         <div class="form-group">
                                           <label for="">Price[BDT]</label> <span style="color:red">*</span>
                                           <input type="text" id="position-input" class="form-control" name="price" required>
                                         </div>
                                         <div class="form-group">
                                           <label for="">Parameters</label> <span style="color:red">*</span>
                                           <textarea name="parameters" rows="5" cols="80" type="text" required></textarea>
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

                               {{-- wqtl category table --}}
                               <div class="table-responsive" style=" margin-top: 50px; padding: 0px 50px;">
                                 <h2 style="color:red; margin-bottom:30px; text-align:center">View WQTL Test Rate Categories </h2>
                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>category_name</th>
                                               <th>created_at</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>

                                       @foreach ($all_wqtl_testrates as $all_wqtl_testrate)
                                         <tr>
                                             <td> {{ $all_wqtl_testrate->id }}</td>
                                             <td> {{ $all_wqtl_testrate->category_name }}</td>
                                             <th>{{ $all_wqtl_testrate->created_at->format('d-F-Y  h:i:s A') }}</th>
                                             <th>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{ $all_wqtl_testrate->id }}">Edit</a>
                                            <div class="modal fade" id="{{ $all_wqtl_testrate->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLab">Edit</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                        <form action="{{ url('testrate/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="testrate_id" value="{{ $all_wqtl_testrate->id }}">
                                                           <div class="form-group">
                                                              <label for="">Category Name</label>
                                                               <input type="text" id="name-input" class="form-control" name="category_name" value="{{ $all_wqtl_testrate->category_name }}">
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
                                               <a class="btn btn-danger btn-sm" href="{{ url('testrate/delete') }}/{{ $all_wqtl_testrate->id }}" onclick="return confirm('are you sure delete data!')">Delete</a>
                                             </th>
                                         </tr>
                                         @endforeach

                              {{-- wqtl category wise content table --}}
                               <div class="table-responsive" style=" margin-top: 50px; padding: 0px 50px;">
                                 <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                    <h2 style="color:red; margin-bottom:30px; text-align:center">View WQTL Test Rate Content</h2>
                                     <thead>
                                         <tr>
                                             <th>SL No.</th>
                                             <th>Category Name</th>
                                             <th>Parameters</th>
                                             <th>Method</th>
                                             <th>Unit Cost (BDT)</th>
                                             <th>created_at</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>

                                     @foreach ($wqtl_test_rate_contents as $wqtl_test_rate_content)
                                       <tr>
                                           <td> {{ $wqtl_test_rate_content->serial_number }}</td>
                                           <td> {{ App\Wqtltestrate::find($wqtl_test_rate_content->testrate_category_id)->category_name }}</td>

                                           <td> {{ $wqtl_test_rate_content->parameters }}</td>
                                           <td> {{ $wqtl_test_rate_content->method }}</td>
                                           <td> {{ $wqtl_test_rate_content->cost }}</td>
                                           <th>{{ $wqtl_test_rate_content->created_at->format('d-F-Y  h:i:s A') }}</th>
                                           <th>
                                             <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#wqtl{{ $wqtl_test_rate_content->id }}">Edit</a>
                                          <div class="modal fade" id="wqtl{{ $wqtl_test_rate_content->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                           <div class="modal-dialog">
                                               <div class="modal-content">
                                                   <div class="modal-header">
                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                       <h3 class="modal-title" id="myModalLabel">Edit</h3>
                                                   </div>
                                                   <div class="modal-body">
                                                      <form action="{{ url('wqtl_test_rate_content/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                       @csrf
                                                       <input type="hidden" name="testrate_id" value="{{ $wqtl_test_rate_content->id }}">
                                                       <select class="" name="testrate_category_id" style="width:100%;height: 40px;">
                                                          @foreach ($all_wqtl_testrates as $all_wqtl_testrate)
                                                            <option value="{{ $all_wqtl_testrate->id }}" {{ ($wqtl_test_rate_content->testrate_category_id == $all_wqtl_testrate->id)?'selected':'' }}>{{ $all_wqtl_testrate->category_name }}</option>
                                                          @endforeach
                                                        </select>
                                                       <div class="form-group">
                                                         <label for="">SL No.</label> <span style="color:red">*</span>
                                                         <input type="text" id="name-input" class="form-control" name="serial_number" value="{{ $wqtl_test_rate_content->serial_number }}" required>
                                                       </div>
                                                       <div class="form-group">
                                                         <label for="">Parameters</label> <span style="color:red">*</span>
                                                         <input type="text" id="position-input" class="form-control" name="parameters" value="{{ $wqtl_test_rate_content->parameters }}" required>
                                                       </div>
                                                       <div class="form-group">
                                                         <label for="">Method</label> <span style="color:red">*</span>
                                                         <input type="text" id="position-input" class="form-control" name="method" value="{{ $wqtl_test_rate_content->method }}" required>
                                                       </div>
                                                       <div class="form-group">
                                                         <label for="">Unit Cost (BDT)</label> <span style="color:red">*</span>
                                                         <input type="text" id="position-input" class="form-control"  name="cost" value="{{ $wqtl_test_rate_content->cost }}"  required>
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
                                             <a class="btn btn-danger btn-sm" href="{{ url('wqtl_test_rate_content/delete') }}/{{ $wqtl_test_rate_content->id }}" onclick="return confirm('are you sure delete data!')">Delete</a>
                                           </th>
                                       </tr>

                                       @endforeach


                               {{-- special packege table --}}
                               <div class="table-responsive" style=" margin-top: 50px; padding: 0px 50px;">

                                   <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                     <h2 style="color:red; margin-bottom:30px; text-align:center">View all special packeges</h2>
                                       <thead>
                                           <tr>
                                               <th>Serial No.</th>
                                               <th>Packege Name</th>
                                               <th>Price-[BDT]</th>
                                               <th>Parameters</th>
                                               <th>created_at</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>

                                       @foreach ($all_packeges as $all_packege)
                                         <tr>
                                             <td> {{ $all_packege->id }}</td>
                                             <td> {{ $all_packege->name }}</td>
                                             <td> {{ $all_packege->price }}</td>
                                             <td> {{ $all_packege->parameters }}</td>
                                             <th>{{ $all_packege->created_at->format('d-F-Y  h:i:s A') }}</th>
                                             <th>
                                               <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#packege{{ $all_packege->id }}">Edit</a>
                                            <div class="modal fade" id="packege{{ $all_packege->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         <h3 class="modal-title" id="myModalLab">Edit</h3>
                                                     </div>
                                                     <div class="modal-body">
                                                        <form action="{{ url('packege/edit/insert') }}" method="post" enctype="multipart/form-data">
                                                         @csrf
                                                         <input type="hidden" name="packege_id" value="{{ $all_packege->id }}">
                                                         <div class="form-group">
                                                           <label for="">Packege Name</label> <span style="color:red">*</span>
                                                           <input type="text" id="name-input" class="form-control" name="name" value="{{ $all_packege->name }}" required>
                                                         </div>
                                                         <div class="form-group">
                                                           <label for="">Price[BDT]</label> <span style="color:red">*</span>
                                                           <input type="text" id="position-input" class="form-control" name="price" value="{{ $all_packege->price }}" required>
                                                         </div>
                                                         <div class="form-group">
                                                           <label for="">Parameters</label> <span style="color:red">*</span>
                                                           <textarea name="parameters" rows="5" cols="70" type="text" required>
                                                             {{ $all_packege->parameters }}
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
                                               <a class="btn btn-danger btn-sm" href="{{ url('packege/delete') }}/{{ $all_packege->id }}" onclick="return confirm('are you sure delete data!')">Delete</a>
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
