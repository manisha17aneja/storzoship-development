@extends('layouts.main')

@section('title')
User Profile
@endsection

@section('class')
warehouse-page complaints-page rate-calculator-page recharge-page payment-recharge user-remittance-page reports-page billing-charge-details seller-channels-page user-page single-order-page
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
              <h1 class="fs-20px m-0 SFProBold mb-1 text-lightblack">User Profile</h1>
            </div>
           
          </div>
          
         
         <!-- content -->
         <div class="content">
          <div class="pane panel-default">
            <div class="panel-body pv-xl">
           
              @if($message = Session::get('message'))
                <div class="alert alert-success">
                  <h3>{{$message}}</h3>
                </div>
              @endif

            <form class="userProfileForm" action="{{ route('user.user.profileupdate') }}" method="POST">
            @csrf
            
              <div class="col-md-9">
                <div class="col-md-1"></div>
                <div class="col-md-8">
                  <div class="form-group clearfix">
                    <label for="inputContact1" class="col-sm-4 control-label"
                      >First Name :</label
                    >
                    <div class="col-sm-8">
                      <div class="form-group mb0">
   
                            <input id="first_name" type="text" class="form-control p_input @error('first_name') is-invalid @enderror" name="first_name" value="{{ $first_name }}" autocomplete="first_name" autofocus>
                            <span class="text-danger error-text first_name_err"></span>
                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                    </div>
                  </div>
                  <div class="form-group clearfix">
                    <label for="inputContact1" class="col-sm-4 control-labe">Last Name:</label>
                      <div class="col-sm-8">
                      <div class="form-group mb0">
                            <input class="form-control p_input @error('last_name') is-invalid @enderror" type="text" name="last_name" value="{{ $last_name }}" autocomplete="last_name" autofocus>
                            <span class="text-danger error-text last_name_err"></span>
                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                    </div>
                  </div>

                  <div class="form-group clearfix ng-scope" ng-if="user.is_seller">
                    <label for="inputContact1" class="col-sm-4 control-label"
                      >Company Name :</label
                    >
                    <div class="col-sm-8">
                      <div class="form-group mb0">
                            <input class="form-control p_input @error('company_name') is-invalid @enderror" type="text" name="company_name" value="{{ $company_name }}" autocomplete="company_name" autofocus>
                            <span class="text-danger error-text company_name_err"></span>
                            @error('company_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                    </div>
                  </div>

                  <div class="form-group clearfix">
                    <label for="inputContact1" class="col-sm-4 control-label"
                      >Email Id :</label
                    >
                    <!--<div class="col-sm-8 pl0 ng-binding">bmsoni7890@gmail.com</div>-->
                    <div class="col-sm-8">
                      <div class="form-group mb0">
                            <input class="form-control p_input @error('email') is-invalid @enderror" type="text" name="email" value="{{ $email }}" autocomplete="email" autofocus readonly>
                            <span class="text-danger error-text email_err"></span>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                    </div>
                  </div>

                  <div class="form-group clearfix">
                    <label for="inputContact1" class="col-sm-4 control-label"
                      >Phone No :</label>
                    <div class="col-sm-8">
                      <div class="form-group mb0">
                            <input class="form-control p_input @error('phone') is-invalid @enderror" type="text" name="phone" value="{{ $phone }}" autocomplete="phone" autofocus>
                            <span class="text-danger error-text phone_err"></span>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                    </div>
                  </div>
                  <div class="form-group clearfix">
                    <label for="inputContact1" class="col-sm-7 control-label"
                        ></label>
                    <div class="form-group mb0 text-end">
                          <button type="submit" class="userProfileSubmit">Submit</button>
                    </div>
                  </div>
                  
                  
                 <!--<div class="form-group clearfix ng-scope" ng-if="user.is_seller">
                    <label for="inputContact1" class="col-sm-4 control-label"
                      >Company ID :</label
                    >
                    <div class="col-sm-8">
                      <div class="form-group mb0">
                            <input class="form-control error-append ng-pristine ng-untouched ng-valid ng-empty" ng-model="form.currentPassword" type="password" name="current_password" value="">
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group clearfix ng-scope" ng-if="user.is_seller">
                    <label for="inputContact1" class="col-sm-4 control-label"
                      >Plan :</label>
                      <div class="col-sm-8">
                      <div class="form-group mb0">
                            <input class="form-control error-append ng-pristine ng-untouched ng-valid ng-empty" ng-model="form.currentPassword" type="password" name="current_password" value="">
                      </div>
                    </div>
                  </div>
                  <div ng-if="!searchbar" class="form-group clearfix ng-scope">
                    <label for="inputContact1" class="col-sm-4 control-label"
                      >Subscription Status :</label
                    >
                    <div class="col-sm-8 pl0" style="text-transform: capitalize">
                      <span ng-if="!user.is_suspended" class="ng-scope">Active</span>
                    </div>
                  </div>
                  <div ng-if="!searchbar" class="form-group clearfix ng-scope">
                    <label for="inputContact1" class="col-sm-4 control-label"
                      >Subscription Duration :</label
                    >
                    <div
                      class="col-sm-8 pl0 ng-binding"
                      style="text-transform: capitalize"
                    >
                      NA
                    </div>
                  </div>
        
                  <div ng-if="!searchbar" class="form-group clearfix ng-scope">
                    <label for="inputContact1" class="col-sm-4 control-label"
                      >Renewal Date :</label
                    >
                    <div class="col-sm-8 pl0"></div>
                  </div>-->
                </div>
              </div>
            </form>
              <div class="col-md-3 text-center"></div>
            </div>
          </div>
        </div>
        
            
            
          </div>
        </div>

<!-- main-body-panel end -->
@endsection