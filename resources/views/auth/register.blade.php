@extends('layouts.app')

@section('title')
Register
@endsection

<!--
@section('page_title_con')
@endsection
-->

@section('content')
<div class="container-scroller auth-page-wrapper sign-up-page">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div
            class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg"
          >
            <div class="card col-lg-5 login-right-side mr-auto auth-login">
              <div class="card-body px-5 py-5">
                <div class="text-center">
                  <img
                    src="assets/images/logo.png"
                    alt="logo"
                    width="195"
                    class="center img-fluid login-logo"
                  />
                </div>
                <h3 class="card-title mb-3">Get started with a free account</h3>

                <div class="login-with-others">
                  <div
                    class="row d-none d-md-flex mt-15 justify-content-center"
                  >
                    <div class="col-md-4 col-xs-6 pr-sm col-6">
                      <a href="{{ route('google.login') }}" class="btn btn-block btn-social btn-border"
                        ><img
                          src="assets/images/google.png"
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
                          src="assets/images/facebook.png"
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
                          src="assets/images/phone_no.png"
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

                <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <input name="type" type="hidden" value="3">

                  <div class="outer-form-group">
                    <div class="form-group">
                      <label class="blackText">First Name</label>
                      
                      <input id="first_name" type="text" class="form-control p_input @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}"  autocomplete="first_name" autofocus>

                      @error('first_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                    </div>
                    <div class="form-group">
                      <label class="blackText">Last Name</label>
                      <input id="last_name" type="text" class="form-control p_input @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}"  autocomplete="last_name" autofocus>

                      @error('last_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="blackText">Company Name</label>
                    <input id="company_name" type="text" class="form-control p_input @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}"  autocomplete="company_name" autofocus>

                    @error('company_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label class="blackText">Email Id</label>
                   
                    <input id="email" type="text" class="form-control p_input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label class="blackText">Password *</label>
                   
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

                  </div>

                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" formcontrolname="agree" id="agree" name="agree" class="custom-control-input ng-untouched ng-pristine ng-valid p_input @error('agree') is-invalid @enderror">
                    <label for="agree" class="custom-control-label">By clicking Sign up for Free, you agree
                    to Bigship's&nbsp;<a href="#" target="_blank" class="text-info">Terms &amp; Conditions</a>&nbsp;and&nbsp;<a href="#" target="_blank" class="text-info">Privacy
                      Policy.</a>

                      @error('agree')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </label>
                    </div>
                  <div class="text-center">
                    <button
                      type="submit"
                      class="btn btn-primary btn-block enter-btn"
                    >
                      Sign Up For Free
                    </button>
                  </div>
                  <p class="sign-up blackText">
                    Already have an account? <a
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