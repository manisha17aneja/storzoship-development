@extends('layouts.main')

@section('title')
Change Password
@endsection

@section('class')
warehouse-page complaints-page rate-calculator-page recharge-page payment-recharge user-remittance-page reports-page billing-charge-details seller-channels-page change-password-page user-page single-order-page
@endsection

<!--
@section('page_title_con')
@endsection
-->

@section('body')
<!-- main-body-panel start -->

<div class="main-panel">
          <div class="content-wrapper">
            
            <!-- Channels -->
          <div class="align-items-center row mb-3 channel-container">
            <div class="col-12 col-md-5 mb-3 mb-sm-0 ps-3">
              <h1 class="fs-20px m-0 SFProBold mb-1 text-lightblack">Settings - Change Your Password</h1>
            </div>
            <div class="col-md-9 font-14 mb-lg w-100" style="padding-top: 10px;">
              <label> <a href="/settings" class="active">Settings</a> &gt; Company &gt; Change Password</label>
           </div>
          </div>
          
         
          <div class="content p-xl form-content">

            @if($message = Session::get('message'))
                <div class="alert alert-success">
                  <h3>{{$message}}</h3>
                </div>
            @endif

            @if($error = Session::get('error'))
                <div class="alert alert-danger">
                  <h3>{{$error}}</h3>
                </div>
            @endif
            <div class="alert alert-danger print-error-msg" style="display:none">
               <ul></ul>
            </div>
            <!--<form class="ng-untouched ng-pristine ng-invalid" action="{{ route('user.user.changepassword') }}" method="POST">
            @csrf-->
            <form class="changePasswordForm" action="{{ route('user.user.changepassword') }}">
             {{ csrf_field() }}
               <div class="row pt-xl">
                  <div class="col-md-6 col-md-offset-3">
                     <div class="row">
                        <div class="form-group col-md-12">
                           <label class="control-label col-sm-3">Current Password</label>
                           <div class="col-sm-9">
                           <input class="form-control p_input @error('current_password') is-invalid @enderror" type="password" name="current_password" value="{{ old('current_password') }}" autocomplete="current_password" autofocus>
                           <span class="p-viewer-signIn clickable">
                              <i class="eye fa fa-eye-slash"></i>
                           </span>
                                <span class="text-danger error-text current_password_err"></span>
                           @error('current_password')
                                 <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                 </span>
                              @enderror
                              @if ($errors->has('current_password'))
                                 <span class="text-danger">{{ $errors->first('current_password') }}</span>
                              @endif
                           </div>
                        </div>
                     </div>
      
                     <div class="row">
                        <div class="form-group col-md-12">
                           <label class="control-label col-sm-3">New Password</label>
                           <div class="col-sm-9">
                           <input id="password" type="password" class="form-control p_input @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                           <span class="p-viewer-signIn clickable">
                              <i class="eye fa fa-eye-slash"></i>
                           </span>
                           <span class="text-danger error-text password_err"></span>
                           @error('password')
                                 <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                 </span>
                              @enderror
                              @if ($errors->has('password'))
                                 <span class="text-danger">{{ $errors->first('password') }}</span>
                              @endif
                           </div>
                        </div>
                     </div>
      
                     <div class="row">
                        <div class="form-group col-md-12">
                           <label class="control-label col-sm-3">Confirm Password</label>
                           <div class="col-sm-9">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                              <span class="p-viewer-signIn clickable">
                              <i class="eye fa fa-eye-slash"></i>
                           </span>
                           <span class="text-danger error-text password_confirmation_err"></span>
                           </div>
                        </div>
                     </div>

                     <div class="row">
                        <div class="form-group col-md-12">
                          
                           <div class="col-sm-8 text-end">
                           <button type="submit" class="changePasswordSubmit">Submit</button>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </form>
         </div>
         
           
            
            
          </div>
        </div>


<!-- main-body-panel end -->
@endsection

