@extends('layouts.register.register')

@section('content')

  <main class="page-content">
      <div class="page-inner">
          <div id="main-wrapper">
              <div class="row">
                  <div class="col-md-3 col-register-box-alt">
                      <div class="panel panel-white register-box" id="js-alerts">
                          <div class="panel-body">
                              <a href="index.html" class="logo-name text-lg">Admin Registration</a>
                              <p class="m-t-md">Create Your Account</p>
                              <form method="POST" action="{{ route('register') }}">
                                  @csrf
                                  <div class="form-group">
                                      <input type="text" name="name" class="form-control"required placeholder="Name @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                  </div>
                                  <div class="form-group">
                                      <input type="email" name="email" class="form-control" required placeholder="Email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                      @error('email')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                                  <div class="form-group">
                                      <input type="password" name="password" class="password form-control" required placeholder="Password @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                      @error('password')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                                  <div class="form-group">
                                      <input type="password" name="password_confirmation" required class="password form-control" placeholder="Comfirm Password" required autocomplete="new-password" required data-msg="Please enter your  password" class="input-material">
                                  <label>
                                      <input type="checkbox"> Agree the terms and policy
                                  </label>
                                      <button type="submit" class="btn btn-success btn-block m-t-xs">Submit</button>
                                      <a href="{{ url('login') }}" class="btn btn-default btn-block m-t-xs">Login</a>
                              </form>
                              <p class="text-center m-t-xs text-sm register-footer">2016 &copy; stacks</p>
                          </div>
                      </div>
                  </div>
              </div><!-- Row -->
          </div><!-- Main Wrapper -->
      </div><!-- Page Inner -->
  </main><!-- Page Content -->
@endsection
