@extends('layouts.main')

@section('title')
Customer Api setting
@endsection

@section('class')
warehouse-page complaints-page rate-calculator-page recharge-page payment-recharge user-remittance-page reports-page billing-charge-details seller-channels-page new-reports-page activities-page rate-calculator-page
@endsection

<!--
@section('page_title_con')
@endsection
-->

@section('body')
        <!-- main-body-panel start -->

        <div class="main-panel">
          <div class="content-wrapper">

          <h1>Customer Api setting</h1>
            
            <!-- Channels -->
            <div class="bg-white py-4 px-2">

            

              <div class="tab-content border-0" id="pills-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="pills-closed"
                  role="tabpanel"
                  aria-labelledby="pills-closed-tab"
                  tabindex="0"
                >
                  <div class="row latest-order-div">
                   

                    <div class="mat-tab-body-wrapper" style="">
                      <div
                        role="tabpanel"
                        class="mat-tab-body ng-tns-c42-0 ng-star-inserted mat-tab-body-active"
                        id="mat-tab-content-0-0"
                        aria-labelledby="mat-tab-label-0-0"
                      >
                        <div
                          class="mat-tab-body-content ng-tns-c42-0 ng-trigger ng-trigger-translateTab"
                          style="transform: none"
                        >
                          <div class="ng-star-inserted">
                            <div class="mt-2rem">
                              <div>

                                <div class="pb-4 me-2 w-firsthalf d-inline-block bg-white border-radius-13px resp-width">

                                  <form class="ng-untouched ng-pristine ng-invalid addCustomerApiSettingForm" action="{{ route('customer.store_customer_api_setting') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                              
                                        <div class="row mt-2rem">

                                            <div class="col-12">
                                                <label class="text-greyish-brown sfpro-medium mb-8px">Customers</label>
                                                <select id="user_id" name="user_id" class="form-select allow_user_id">
                                                    <option value="">Select Customer</option>
                                                    @foreach ($users as $user)
                                                    <option value="{{$user->id}}"> {{$user->name.' - '.$user->email}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger error-text user_id_err"></span>
                                            </div>
                                            
                                        </div>


                                        <div class="row mt-2rem">

                                            <div class="col-12">
                                                <label class="text-greyish-brown sfpro-medium mb-8px">Pickup Address</label>
                                                <select id="api_pickup_address_id" name="api_pickup_address_id" class="form-select">
                                                    <option value="">Select Option</option>
                                                </select>
                                                <span class="text-danger error-text api_pickup_address_id_err"></span>
                                            </div>
                                            
                                        </div>


                                        <div class="row mt-2rem">

                                            <div class="col-12">
    
                                                <div class="position-relative quantity-adder w-70 weight-design">
                                                <br>
                                                <input type="checkbox" value="1" id="api_is_web_access" name="api_is_web_access">
                                                <span></span>
                                                <label class="mt-checkbox"> Is Web Access ?</label>
                                            
                                                <span class="text-danger error-text api_is_web_access_err"></span>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="row mt-2rem div_api_key" style="display: none">

                                            <div class="col-12">
                                                <label class="text-greyish-brown sfpro-medium mb-8px">Api Key</label>
                                                <div class="position-relative quantity-adder w-70 weight-design">
                                                    <input name="api_key" id="api_key" type="text" class="form-control" readonly>
                                                    <span class="text-danger error-text api_key_err"></span>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row mt-2rem div_api_user_id" style="display: none">

                                            <div class="col-12">
                                                <label class="text-greyish-brown sfpro-medium mb-8px">User ID</label>
                                                <div class="position-relative quantity-adder w-70 weight-design">
                                                    <input name="api_user_id" id="api_user_id" type="text" class="form-control" readonly>
                                                    <span class="text-danger error-text api_user_id_err"></span>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="mt-2rem">
                                            <button class="btn-purple-bg px-5 h-3rem rounded-0-5rem text-white fs-14px">Save</button>
                                            <button class="btn-purple-border text-purple px-5 h-3rem rounded-0-5rem ml-16px fs-14px customer-api-setting-reset" type="reset">Reset</button>
                                        </div>

                                    </form>

                                </div>
                                
                                <div
                                  class="bg-white d-inline-block w-secondhalf border-radius-13px ms-3"
                                  style="vertical-align: top"
                                >
                                  <div class="text-center mt-5 pb-1">
                                    <span class="material-symbols-outlined">
                                      location_on
                                      </span>
                                    <span class="box-title">Pickup Location</span>
                                  </div>
                                  <div class="doted-box">
                                    <span class="ng-star-inserted">City,</span>
                                    <p class="doted-box-state">
                                      <span class="ng-star-inserted">State</span>
                                    </p>
                                  </div>
                                  <div class="vertical-hr"></div>
                                  <div class="text-center mt-1 pb-1">
                                    <span class="material-symbols-outlined">
                                      location_on
                                      </span><span class="box-title">Delivery Location</span>
                                  </div>
                                  <div class="doted-box mb-5">
                                    <span class="ng-star-inserted">City,</span>
                                    <p class="doted-box-state">
                                      <span class="ng-star-inserted">State</span>
                                    </p>
                                  </div>
                                  <div class="text-center px-2 custom-responsive-margin">
                                    <img
                                      apppathcorrection=""
                                      data-src="/assets/images/rate_calculator_logo.png"
                                      alt="location"
                                      class="custom-img-responsive"
                                      src="https://app.shiprocket.in/seller//assets/images/rate_calculator_logo.png"
                                    />
                                  </div>
                                </div>
                              </div>
                    
                          
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        role="tabpanel"
                        class="mat-tab-body ng-tns-c42-1 ng-star-inserted"
                        id="mat-tab-content-0-1"
                        aria-labelledby="mat-tab-label-0-1"
                      >
                        <div
                          class="mat-tab-body-content ng-tns-c42-1 ng-trigger ng-trigger-translateTab"
                          style="transform: translate3d(100%, 0px, 0px); min-height: 1px"
                        ></div>
                      </div>
                    </div>
                    

                  </div>
                </div>


               
              </div>
            </div>
            
          
           
            
            
          </div>
        </div>

 
         <!-- main-body-panel end -->
@endsection