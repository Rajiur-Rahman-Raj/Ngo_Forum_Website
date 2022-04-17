@extends('layouts.login.login')

@section('content')

<main class="page-content">
    <div class="page-inner">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-3 col-login-box-alt">
                    <div class="panel panel-white login-box" id="js-alerts">
                        <div class="panel-body">
                          <a href="index.html" class="logo-name text-lg">Admin Login</a>
                            <p class="m-t-md">Please login into your account..</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required placeholder="Email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                            </div>
                            <div class="form-group">
                            <input type="password" name="password" class="password form-control" required placeholder="Password @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                            <button type="submit" class="btn btn-success btn-block m-b-xs">Login</button>
                          <a href="forgot.html" class="display-block m-t-md text-sm">Forgot Password?</a>
                        </form>
                        <p class="text-center m-t-xs text-sm login-footer">2016 &copy; stacks</p>
                          </div>
                      </div>
                  </div>
              </div><!-- Row -->
          </div><!-- Main Wrapper -->
      </div><!-- Page Inner -->
  </main><!-- Page Content -->
@endsection
