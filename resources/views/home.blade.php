@extends('layouts.Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="admin-login">
                      <h2> <span style="color:#06bcd7;">{{ Auth::user()->name }}</span> Now You Are Logged in into your Dashboard! </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
