@extends('layouts.app')

@section('title')
Reset Password
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
                <h3 class="card-title mb-3">{{ __('Reset Password') }}</h3>
                <!--<p>Enter your email or phone number (without extension) to receive OTP for password reset.</p>-->

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                            <label class="blackText">{{ __('Email Address') }}</label>

                            <input id="email" type="text" class="form-control p_input @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}"  autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                         <div class="form-group">
                            <label class="blackText">{{ __('Password') }}</label>

                            <input id="password" type="password" class="form-control p_input @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                            <span class="p-viewer-signIn clickable">
                              <i class="eye fa fa-eye-slash"></i>
                            </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label class="blackText">{{ __('Confirm Password') }}</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            <span class="p-viewer-signIn clickable">
                              <i class="eye fa fa-eye-slash"></i>
                            </span>
                                
                                @error('password_confirmation')
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
                    {{ __('Reset Password') }}
                    </button>
                  </div>
                 
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