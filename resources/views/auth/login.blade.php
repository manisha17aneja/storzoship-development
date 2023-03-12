@extends('layouts.app')

@section('title')
Login
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
                <h3 class="card-title mb-3">Login To Storzo Ship Using</h3>

                <div class="login-with-others">
                  <div
                    class="row d-none d-md-flex mt-15 justify-content-center"
                  >
                    <div class="col-md-4 col-xs-6 pr-sm col-6">
                      <a href="{{ route('google.login') }}" class="btn btn-block btn-social btn-border"
                        ><img
                          src="{{ asset('assets/images/google.png') }}"
                          alt="google"
                          width="20px"
                          height="20px"
                          class="w-20px mr-2"
                        />
                        Google
                      </a>
                    </div>

                    <div class="col-md-4 col-xs-6 pr-sm col-6">
                      <a href="{{ route('facebook.login') }}" class="btn btn-block btn-social btn-border"
                        ><img
                          src="{{ asset('assets/images/facebook.png') }}"
                          alt="facebook"
                          width="20px"
                          height="20px"
                          class="w-20px mr-2"
                        />
                        Facebook
                      </a>

  
                    </div>

                    <div class="col-md-4 col-xs-6 pr-sm col-6">
                      <a class="btn btn-block btn-social btn-border"
                        ><img
                          src="{{ asset('assets/images/phone_no.png') }}"
                          alt="phone"
                          width="20px"
                          height="20px"
                          class="w-20px mr-2"
                        />
                        Phone No
                      </a>
                    </div>
                  </div>
                  <p class="my-1 text-center fs-16px dashed-border-container">
                    <span class="dashed-border mb-2px"></span> or
                    <span class="dashed-border mb-2px"></span>
                  </p>
                </div>

                <form method="POST" action="{{ route('login') }}">
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
                  <div class="form-group">
                    <label class="blackText">Password </label>
                        <input id="password" type="password" class="form-control p_input @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
                        <span class="p-viewer-signIn clickable">
                            <i class="eye fa fa-eye-slash"></i>
                        </span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                   
                  </div>
                  <div
                    class="form-group d-flex align-items-center justify-content-end"
                  >
                   
                    @if (Route::has('password.request'))
                        <a  class="forgot-pass" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                  </div>
                  <div class="text-center">
                
                    <button type="submit" class="btn btn-primary btn-block enter-btn">{{ __('Login') }}</button>

                  </div>
                  <p class="sign-up blackText">
                    Don't have an Account?<a
                      href="{{ route('register') }}"
                    >
                      Sign Up</a
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