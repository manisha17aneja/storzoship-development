@extends('layouts.main')

@section('title')
User Wallet balance
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

          <h1>User Wallet balance</h1>
            
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

                                  <form class="ng-untouched ng-pristine ng-invalid addFinanceForm" action="{{ route('finance.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                              
                                        <div class="row mt-2rem">

                                            <div class="col-5">
                                                <label class="text-greyish-brown sfpro-medium mb-8px">User</label>
                                                <select id="user_id" name="user_id" class="form-select">
                                                    <option value="">Select User</option>
                                                    @foreach ($users as $user)
                                                    <option value="{{$user->id}}"> {{$user->name.' - '.$user->email}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger error-text user_id_err"></span>
                                            </div>

                                            <div class="col-5">
                                                <label class="ms-3 text-greyish-brown sfpro-medium mb-8px">Action</label>
                                                <select id="action" name="action" class="form-select ms-3">
                                                    <option value="">Select Action</option>
                                                    <option value="0">Debit</option>
                                                    <option value="1">Credit</option>
                                                </select>
                                                <span class="text-danger error-text action_err"></span>
                                            </div>
                                            
                                        </div>


                                        <div class="row mt-2rem">

                                            <div class="col-5">
                                                <label class="text-greyish-brown sfpro-medium mb-8px">Amount (₹)</label>
                                                <div class="position-relative quantity-adder w-70 weight-design">
                                                    <input name="amount" id="amount" type="text" class="form-control">
                                                    <button tabindex="-1" class="position-absolute quantity-increment"> ₹ </button>
                                                    <span class="text-danger error-text amount_err"></span>
                                                </div>
                                            </div>

                                            <div class="col-5">
                                                <label class="ms-3 text-greyish-brown sfpro-medium mb-8px">Remarks</label>
                                                <input name="remarks" id="remarks" type="text" class="ms-3 form-control">
                                                <span class="text-danger error-text remarks_err"></span>
                                            </div>
                                            
                                        </div>


                                        <div class="row mt-2rem">

                                            <div class="col-5">
                                                <label class="text-greyish-brown sfpro-medium mb-8px">PayId</label>
                                                <div class="position-relative quantity-adder w-70 weight-design">
                                                    <input name="razorpay_pay_id" id="razorpay_pay_id" type="text" class="form-control">
                                                    <span class="text-danger error-text razorpay_pay_id_err"></span>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="mt-2rem">
                                            <button class="btn-purple-bg px-5 h-3rem rounded-0-5rem text-white fs-14px">Save</button>
                                            <button class="btn-purple-border text-purple px-5 h-3rem rounded-0-5rem ml-16px fs-14px" type="reset">Reset</button>
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