@extends('layouts.app')

@section('title')
Forgot Password
@endsection

<!--
@section('page_title_con')
@endsection
-->

@section('content')
<div class="container-scroller auth-page-wrapper">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div
            class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg"
          >
            <div class="card col-lg-5 login-right-side mr-auto auth-login">
              <div class="card-body px-5 py-5">
                <div class="text-center">
                  <img
                    src="{{ asset('assets/images/logo.png') }}"
                    alt="logo"
                    width="195"
                    class="center img-fluid login-logo"
                  />
                </div>
                <h3 class="card-title mb-3">Forgot Your Password</h3>
                <!--<p>Enter your email or phone number (without extension) to receive OTP for password reset.</p>-->

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <form method="POST" action="{{ route('password.email') }}">
                @csrf
                  <div class="form-group">
                    <label class="blackText">Email Id</label>

                        <input id="email" type="text" class="form-control p_input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                  <div class="text-center">
                    <button
                      type="submit"
                      class="btn btn-primary btn-block enter-btn"
                    >
                    {{ __('Send Password Reset Link') }}
                    </button>
                  </div>
                  <p class="sign-up blackText">
                    Remember the password?<a
                      href="{{ route('login') }}"
                    >
                      Login</a
                    >
                  </p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @endsection