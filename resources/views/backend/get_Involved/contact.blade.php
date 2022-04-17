@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">Data Tables</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="index.html">Home</a></li>
                       <li><a href="#">get_Involved</a></li>
                       <li class="active">Contact</li>
                   </ol>
               </div>
           </div>

           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title"> Add Contact Info </h4>
                           </div>
                           <div class="panel-body">
                               <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add Contact</button>
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
                              @if (App\Contactoffice::where('user_id', Auth::id())->exists())
                                @php
                                  $single_contact_info = App\Contactoffice::where('user_id', Auth::id())->first();
                                @endphp
                                <form  action="{{ url('update/contact/insert') }}" method="post" enctype="multipart/form-data">
                                  @csrf
                                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title" id="myModalLabel">Update Contact Information</h4>
                                        </div>
                                        <input type="hidden" name="user_contact_id" value="{{ $single_contact_info->id }}">
                                        <div class="modal-body">
                                          <div class="form-group">
                                            <label for="">Office Location <span style="color:red;">*</span> </label>
                                            <input type="text" id="name-input" class="form-control" value="{{ $single_contact_info->office_location }}" name="office_location" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Phone<span style="color:red;">*</span> </label>
                                            <input type="text" id="name-input" class="form-control" value="{{ $single_contact_info->office_phone }}" name="office_phone" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Fax<span style="color:red;">*</span> </label>
                                            <input type="text" id="name-input" class="form-control" value="{{ $single_contact_info->office_fax }}" name="office_fax">
                                          </div>
                                          <div class="form-group">
                                            <label for="">Email<span style="color:red;">*</span> </label>
                                            <input type="email" id="name-input" class="form-control" value="{{ $single_contact_info->office_email }}" name="office_email" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Website<span style="color:red;">*</span> </label>
                                            <input type="text" id="name-input" class="form-control" value="{{ $single_contact_info->office_website }}" name="office_website" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="" style="">Add Design Officer Information:</label><br>
                                            <label for="">Name<span style="color:red;">*</span> </label>
                                            <input type="text" id="name-input" class="form-control" value="{{ $single_contact_info->name }}" name="name" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Designation<span style="color:red;">*</span> </label>
                                            <input type="text" id="name-input" class="form-control" value="{{ $single_contact_info->designation }}" name="designation" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Phone<span style="color:red;">*</span> </label>
                                            <input type="text" id="name-input" class="form-control" value="{{ $single_contact_info->phone }}" name="phone" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Fax<span style="color:red;">*</span> </label>
                                            <input type="text" id="name-input" class="form-control" value="{{ $single_contact_info->fax }}" name="fax">
                                          </div>
                                          <div class="form-group">
                                            <label for="">Email<span style="color:red;">*</span> </label>
                                            <input type="email" id="name-input" class="form-control" value="{{ $single_contact_info->email }}" name="email" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Add Office Map Link<span style="color:red;">*</span> </label>
                                            <input type="text" id="name-input" class="form-control" value="{{ $single_contact_info->map_link }}" name="map_link">
                                          </div>
                                          <div class="form-group">
                                            <label for="">Add Office Image <span style="color:red;">*</span> </label>
                                            <input type="file" id="age-input" class="form-control" name="image" placeholder="image" required>
                                          </div>

                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                          <button type="submit" id="add-row" class="btn btn-success">Add Contact</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              @else
                                <form  action="{{ url('add/contact/insert') }}" method="post" enctype="multipart/form-data">
                                  @csrf
                                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title" id="myModalLabel">add contact</h4>
                                        </div>
                                        <div class="modal-body">
                                          <div class="form-group">
                                            <label for="">Office Location <span style="color:red;">*</span> </label>
                                            <input type="text" id="name-input" class="form-control" placeholder="enter your office location" name="office_location" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Phone<span style="color:red;">*</span> </label>
                                            <input type="text" id="name-input" class="form-control" placeholder="enter your office phone number" name="office_phone" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Fax<span style="color:red;">*</span> </label>
                                            <input type="text" id="name-input" class="form-control" placeholder="enter your office Fax number" name="office_fax">
                                          </div>
                                          <div class="form-group">
                                            <label for="">Email<span style="color:red;">*</span> </label>
                                            <input type="email" id="name-input" class="form-control" placeholder="enter your office Email" name="office_email" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Website<span style="color:red;">*</span> </label>
                                            <input type="text" id="name-input" class="form-control" placeholder="enter your official website link" name="office_website" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="" style="">Add Design Officer Information:</label><br>
                                            <label for="">Name<span style="color:red;">*</span> </label>
                                            <input type="text" id="name-input" class="form-control" placeholder="enter your official website link" name="name" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Designation<span style="color:red;">*</span> </label>
                                            <input type="text" id="name-input" class="form-control" placeholder="enter your official website link" name="designation" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Phone<span style="color:red;">*</span> </label>
                                            <input type="text" id="name-input" class="form-control" placeholder="enter your official website link" name="phone" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Fax<span style="color:red;">*</span> </label>
                                            <input type="text" id="name-input" class="form-control" placeholder="enter your fax" name="fax">
                                          </div>
                                          <div class="form-group">
                                            <label for="">Email<span style="color:red;">*</span> </label>
                                            <input type="email" id="name-input" class="form-control" placeholder="enter your email" name="email" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="">Add Office Map Link<span style="color:red;">*</span> </label>
                                            <input type="text" id="name-input" class="form-control" placeholder="add your office map link" name="map_link">
                                          </div>
                                          <div class="form-group">
                                            <label for="">Add Office Image <span style="color:red;">*</span> </label>
                                            <input type="file" id="age-input" class="form-control" name="image" placeholder="image" required>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                          <button type="submit" id="add-row" class="btn btn-success">Add Contact</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              @endif

       </div><!-- Page Inner -->
   </main><!-- Page Content -->
@endsection
