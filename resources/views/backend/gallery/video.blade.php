@extends('layouts.Dashboard')

@section('content')
  <div class="page-inner">
           <div class="page-title">
               <h3 class="breadcrumb-header">News Category</h3>
               <div class="page-breadcrumb">
                   <ol class="breadcrumb breadcrumb-with-header">
                       <li><a href="{{ url('home') }}">Dashboard</a></li>
                       <li><a href="#">Video Gallery</a></li>
                       <li class="active">Add New Video</li>
                   </ol>
               </div>
           </div>
           <div id="main-wrapper">
               <div class="row">
                   <div class="col-md-4">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title"> Add New Video</h4>
                           </div>
                           <div class="panel-body">
                                
                                <form action="{{url('add/new/video/to/gallery')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Video IFrame :</label>
                                        <input type="text" name="video" class="form-control" placeholder="Iframe" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Video Title :</label>
                                        <input type="text" name="title" class="form-control" placeholder="Video Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Video Caption :</label>
                                        <textarea class="form-control" name="caption" placeholder="Video Caption" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Add Video" class="btn btn-sm btn-success rounded mt-3">
                                    </div>
                                </form>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                       <div class="panel panel-white">
                           <div class="panel-heading">
                               <h4 class="panel-title"> View Your Videos</h4>
                           </div>
                           <div class="panel-body">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th scope="col">SL</th>
                                      <th scope="col">Title</th>
                                      <th scope="col">Caotion</th>
                                      <th scope="col">Video Iframe</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                     @foreach($videos as $video)
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>{{$video->title}}</td>
                                          <td>{{$video->caption}}</td>
                                          <td>{{$video->video_link}}</td>
                                          <td>
                                              <a href="{{url('delete/video/from/gallery')}}/{{$video->id}}" class="btn btn-sm btn-danger rounded"><i class="fas fa-trash-alt"></i></a>
                                          </td>
                                        </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
</div>
@endsection
