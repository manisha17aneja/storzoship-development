@extends('layouts.main')

@section('title')
Create Order
@endsection

@section('class')
warehouse-page complaints-page rate-calculator-page recharge-page payment-recharge user-remittance-page reports-page single-order-page
@endsection

<!--
@section('page_title_con')
@endsection
-->

@section('body')
         <!-- main-body-panel start -->

         <div class="main-panel">
          <div class="content-wrapper">
            <div class="bg-white py-4 px-2">
              <div class="row align-items-baseline justify-content-between pt-4 pb-3 px-2 flex-wrap ng-star-inserted">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <h3 class="fs-20px text-dark mb-0">Add Orders</h3>
                </div>
                <div class="col-md-6 need-help-view">
                        <p< class="text-md-end text-start">
                          <a  target="_blank" class="text-purple bg-warning-alert border-radius-4px d-inline-block pb-2 ps-3 pe-3 pt-2 text-decoration-none me-4"
                          style="border-radius: 8px;">
                            <img src="https://app.shiprocket.in/seller/assets/images/bulb.svg" alt="bulb" style="margin-right: 5px;"> Need help with adding an order? </a>
                        </p>
                      </div>
                
              </div>
              <div class="row mt-3">
                <div class="col-md-10 col-lg-10">
                  <ul class="nav nav-pills border-0 p-0" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 closedEl btn-primary active" id="pills-closed-tab" data-bs-toggle="pill" data-bs-target="#pills-closed" type="button" role="tab" aria-controls="pills-closed" aria-selected="true"> Single Order  </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 pending btn-primary" id="pills-pending-tab" data-bs-toggle="pill" data-bs-target="#pills-pending" type="button" role="tab" aria-controls="pills-pending" aria-selected="false" tabindex="-1">Bulk Order </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 Delivered btn-primary" id="pills-Delivered-tab" data-bs-toggle="pill" data-bs-target="#pills-Delivered" type="button" role="tab" aria-controls="pills-Delivered" aria-selected="false" tabindex="-1"> Quick Shipment  </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 Undelivered btn-primary" id="pills-Undelivered-tab" data-bs-toggle="pill" data-bs-target="#pills-Undelivered" type="button" role="tab" aria-controls="pills-Undelivered" aria-selected="false" tabindex="-1"> International Order </button>
                    </li>
                   
                  </ul>
                </div>
                
              </div>
              <div class="tab-content border-0" id="pills-tabContent">
                <div class="tab-pane fade" id="pills-closed" role="tabpanel" aria-labelledby="pills-closed-tab" tabindex="0">
                  <div class="row latest-order-div">
                   

                    <div class="ng-star-inserted">
                      <div class="singleOrder">
                        <div class="mat-tab-group mat-primary">
                          <div class="mat-tab-header mat-tab-header-pagination-controls-enabled">
                            <div
                              aria-hidden="true"
                              class="mat-ripple mat-tab-header-pagination mat-tab-header-pagination-before mat-elevation-z4 mat-tab-header-pagination-disabled"
                            >
                              <div class="mat-tab-header-pagination-chevron"></div>
                            </div>
                            <div class="mat-tab-label-container">
                              <div
                                role="tablist"
                                class="mat-tab-list"
                                style="transform: translateX(0px)"
                              >
                                <div class="mat-tab-labels">
                                  <div
                                    role="tab"
                                    mattablabelwrapper=""
                                    cdkmonitorelementfocus=""
                                    class="mat-ripple mat-tab-label mat-focus-indicator mat-tab-label-active ng-star-inserted"
                                    id="mat-tab-label-0-0"
                                    tabindex="0"
                                    aria-posinset="1"
                                    aria-setsize="4"
                                    aria-controls="mat-tab-content-0-0"
                                    aria-selected="true"
                                    aria-disabled="false"
                                  >
                                    <div class="mat-tab-label-content">
                                      <p class="lefttb ng-star-inserted">
                                        <span class="numb ng-star-inserted"> 1 </span>
                                        Buyer Details
                                      </p>
                                    </div>
                                  </div>
                                  <div
                                    role="tab"
                                    mattablabelwrapper=""
                                    cdkmonitorelementfocus=""
                                    class="mat-ripple mat-tab-label mat-focus-indicator mat-tab-disabled ng-star-inserted"
                                    id="mat-tab-label-0-1"
                                    aria-posinset="2"
                                    aria-setsize="4"
                                    aria-controls="mat-tab-content-0-1"
                                    aria-selected="false"
                                    aria-disabled="true"
                                  >
                                    <div class="mat-tab-label-content">
                                      <p class="lefttb ng-star-inserted">
                                        <span class="numb ng-star-inserted"> 2 </span>
                                        Pickup Details
                                      </p>
                                    </div>
                                  </div>
                                  <div
                                    role="tab"
                                    mattablabelwrapper=""
                                    cdkmonitorelementfocus=""
                                    class="mat-ripple mat-tab-label mat-focus-indicator mat-tab-disabled ng-star-inserted"
                                    id="mat-tab-label-0-2"
                                    aria-posinset="3"
                                    aria-setsize="4"
                                    aria-controls="mat-tab-content-0-2"
                                    aria-selected="false"
                                    aria-disabled="true"
                                  >
                                    <div class="mat-tab-label-content">
                                      <p class="lefttb ng-star-inserted">
                                        <span class="numb ng-star-inserted"> 3 </span>
                                        Order Details
                                      </p>
                                    </div>
                                  </div>
                                  <div
                                    role="tab"
                                    mattablabelwrapper=""
                                    cdkmonitorelementfocus=""
                                    class="mat-ripple mat-tab-label mat-focus-indicator mat-tab-disabled ng-star-inserted"
                                    id="mat-tab-label-0-3"
                                    aria-posinset="4"
                                    aria-setsize="4"
                                    aria-controls="mat-tab-content-0-3"
                                    aria-selected="false"
                                    aria-disabled="true"
                                  >
                                    <div class="mat-tab-label-content">
                                      <p class="lefttb ng-star-inserted">
                                        <span class="numb"> 4 </span>Package Details
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <mat-ink-bar
                                  class="mat-ink-bar"
                                  style="visibility: visible; left: 0px; width: 173px"
                                ></mat-ink-bar>
                              </div>
                            </div>
                            <div
                              aria-hidden="true"
                              class="mat-ripple mat-tab-header-pagination mat-tab-header-pagination-after mat-elevation-z4"
                            >
                              <div class="mat-tab-header-pagination-chevron"></div>
                            </div>
                          </div>
                          <div class="mat-tab-body-wrapper">
                            <div
                              role="tabpanel"
                              class="mat-tab-body ng-tns-c80-0 mat-tab-body-active ng-star-inserted"
                              id="mat-tab-content-0-0"
                              aria-labelledby="mat-tab-label-0-0"
                            >
                              <div
                                class="mat-tab-body-content ng-tns-c80-0 ng-trigger ng-trigger-translateTab"
                                style="transform: none"
                              >
                                <div class="ng-star-inserted">
                                  <form class="ng-untouched ng-pristine ng-invalid">
                                    <h6
                                      class="SFProBold mb-4 custom_margin_left_sm"
                                      style="font-size: 20px !important"
                                    >
                                      Pickup Address

                                    </h6>
                                    <div class="p-5 bg-white" style="border-radius: 13px; margin-bottom: 14px">
                                     
                                      <div>
                                        <p class="regular">Where is the order being sent from? 
                                          <span>(Your Address)</span>
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6"><br>
                                              <input
                                                type="text"
                                                name="shipping_address"
                                                placeholder="Search your pick up address here by nickname or phone number"
                                                formcontrolname="shipping_address"
                                                class="form-control ng-untouched ng-pristine ng-invalid"
                                              />
                                            </div>
                                        </div>

                                        <hr>


                                          <div class="accordion-item">
                                            <h3 class="regular">Other Addresses</h3>
                                            <div aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                              
                                              <div class="accordion-body">
                                                <div class="row justify-content-center justify-content-md-start">

                                                <div class="col-lg-3 col-md-4">
                                                  <div class="card">
                                                    <span class="circle green"><i class="fa fa-check"></i></span>
                                                    <div class="card-body">
                                                      <h5 class="text-center">Address 1
                                                      </h5>
                                                      <p class="text-center"> Shop
                                                      No-6,H.No-A4, Ground Floor </p>
                                                      <p class="text-center"> Christian
                                                      Colony Patel Chest,Opp. Maurice Nagar Thana </p>
                                                      <p class="text-center"> DELHI DELHI
                                                      110007 </p>
                                                    </div>
                                                  </div>
                                                </div>

                                              </div>
                                          
                                            </div>
                                          </div>


                                      </div>
                                       
                                    </div>
                                      
                                    
                                    </div>
                                    
                                    <div class="text-end">
                                      <button
                                        type="button"
                                        class="nxtbtn fs-14px sfpro-semibold rounded-6px w-8rem h-3rem"
                                      >
                                        Next
                                      </button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                            
                          
                           
                          </div>
                        </div>
                      </div>
                    </div>
                    

                  </div>
                </div>

                <div class="tab-pane fade show active" id="pills-Delivered" role="tabpanel" aria-labelledby="pills-Delivered-tab" tabindex="0">
                  <div class="row latest-order-div">
                   

                    <div
                        id="quickShipmentContainer"
                        class="container addletterspacing custom_container"
                      >
                        <div class="mb-5">
                          <h1 class="mb-4 fs-20px SFProBold text-191919">Quick Shipment</h1>
                          <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                            <div class="p-4 quick-shipment-wrp">
                              <div class="mb-4">
                                <h3 class="SFProBold fs-16px text-191919" style="margin-bottom: 13px">
                                  Pick Up From
                                </h3>
                                <h5
                                  class="fs-14px sfpro-medium text-191919"
                                  style="margin-bottom: 15px"
                                >
                                  Where is the order being sent from?
                                </h5>
                                <div class="mb-4">
                                  <div class="row mb-3">
                                    <div class="col-lg-6 col-md-9 col-sm-12 mb-md-0 mb-3">
                                      <div class="pickup-address-list-wrp">
                                        <div _nghost-kms-c132="">
                                          <div
                                            _ngcontent-kms-c132=""
                                            class="position-relative prodSearch search-select-box"
                                          >
                                            <div _ngcontent-kms-c132="" class="position-relative">
                                              <img
                                                _ngcontent-kms-c132=""
                                                alt="search"
                                                class="select-search-icon cursor-pointer"
                                                data-src="assets/images/black_search_icon.svg"
                                                src="https://app.shiprocket.in/seller/assets/images/black_search_icon.svg"
                                              />
                                              <div _ngcontent-kms-c132="">
                                                <input
                                                  _ngcontent-kms-c132=""
                                                  type="text"
                                                  required=""
                                                  autocomplete="new-text"
                                                  class="form-control fs-12px plcholdercolor padd_left35 padd_right35 ng-untouched ng-pristine ng-invalid"
                                                  placeholder="Search your pick up address here by nickname or phone number"
                                                />
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <span></span>
                                      </div>
                                    </div>
                                  </div>

                                  <p class="m-0">
                                    <span
                                      class="d-inline-block text-lightpurple-blue fs-11px sfpro-medium cursor-pointer"
                                      >+ Add another pickup address</span
                                    >
                                  </p>
                                </div>
                              </div>
                              <hr />
                              <div class="mt-4 mb-4">
                                <h3 class="SFProBold fs-16px mb-3 text-191919">
                                  Add Buyer’s Details
                                </h3>
                                <h5 class="fs-14px sfpro-medium mb-3 text-191919">
                                  To whom is the order being delivered?
                                  <span class="note-text-lite">(Buyer’s Info)</span>
                                </h5>
                                <div
                                  formarrayname="billingAndShiiping"
                                  class="ng-untouched ng-pristine ng-invalid"
                                >
                                  <div class="ng-untouched ng-pristine ng-invalid">
                                    <div class="row mb-16px">
                                      <div class="col-md-4 col-sm-6 mb-3 mb-md-0">
                                        <label
                                          for=""
                                          class="d-block fs-12px mb-2 sfpro-medium text-darkgrey"
                                          >Mobile number</label
                                        >
                                        <div>
                                          <input
                                            type="text"
                                            placeholder="Enter your mobile number"
                                            name="mobile_num"
                                            onkeypress="if(this.value.length==10) return false;"
                                            oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                                            formcontrolname="mobileNum"
                                            class="form-control ng-untouched ng-pristine ng-invalid"
                                          />
                                        </div>
                                      </div>
                                      <div class="col-md-4 col-sm-6 mb-3 mb-md-0">
                                        <div>
                                          <label
                                            class="d-block fs-12px mb-2 sfpro-medium text-darkgrey"
                                            >Full Name</label
                                          >
                                          <div>
                                            <input
                                              type="text"
                                              placeholder="Enter your full name"
                                              name="first_name"
                                              maxlength="50"
                                              formcontrolname="firstName"
                                              class="form-control ng-untouched ng-pristine ng-invalid"
                                            />
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4 col-sm-6">
                                        <div>
                                          <label
                                            for=""
                                            class="d-block fs-12px mb-2 sfpro-medium text-darkgrey"
                                            >Email
                                            <span class="note-text-lite fs-11px"
                                              >(Optional)</span
                                            ></label
                                          >
                                          <div>
                                            <div>
                                              <input
                                                type="email"
                                                placeholder="Enter your email"
                                                name="email"
                                                formcontrolname="email"
                                                class="form-control ng-untouched ng-pristine ng-valid"
                                              />
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="mb-4">
                                      <p
                                        class="text-lightpurple-blue fs-11px sfpro-medium cursor-pointer"
                                      >
                                        + Add Alternative mobile number, Reseller Name, Buyer GSTIN
                                        <img
                                          data-src="assets/images/arrow_blue_down.svg"
                                          alt="arrow-down"
                                          src="https://app.shiprocket.in/seller/assets/images/arrow_blue_down.svg"
                                        /><span class="note-text-lite fs-12px ms-2">(Optional)</span>
                                      </p>
                                    </div>
                                    <div>
                                      <h5 class="fs-14px sfpro-medium mb-3 text-191919">
                                        Where is the order being delivered?
                                        <span class="note-text-lite">(Buyer’s Address)</span>
                                      </h5>
                                      <div class="row mb-16px">
                                        <div class="col-sm-6 mb-3 mb-md-0">
                                          <div>
                                            <label
                                              for=""
                                              class="d-block fs-12px mb-2 sfpro-medium text-darkgrey"
                                              >Complete Address</label
                                            >
                                            <div>
                                              <input
                                                type="text"
                                                placeholder="House/Floor No., Building Name or Street, Locality  "
                                                name="complete_address"
                                                formcontrolname="completeAddress"
                                                class="form-control ng-untouched ng-pristine ng-invalid"
                                              />
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                          <div>
                                            <label
                                              for=""
                                              class="d-block fs-12px mb-2 sfpro-medium text-darkgrey"
                                              >Landmark
                                              <span class="note-text-lite fs-11px"
                                                >(Optional)</span
                                              ></label
                                            ><input
                                              type="text"
                                              placeholder="Any nearby post office, market,Hospital as the landmark "
                                              name="landmark"
                                              formcontrolname="landmark"
                                              class="form-control ng-untouched ng-pristine ng-valid"
                                            />
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row mb-16px">
                                        <div class="col-md-3 col-sm-6 mb-3 mb-md-0">
                                          <div>
                                            <label
                                              for=""
                                              class="d-block fs-12px mb-2 sfpro-medium text-darkgrey"
                                              >Pincode
                                            </label>
                                            <div>
                                              <input
                                                type="number"
                                                placeholder="Enter Buyer’s Pincode"
                                                onkeypress="if(this.value.length==6) return false;"
                                                name="pincode"
                                                formcontrolname="pincode"
                                                class="form-control ng-untouched ng-pristine ng-invalid"
                                              />
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 mb-3 mb-md-0">
                                          <div>
                                            <label
                                              for=""
                                              class="d-block fs-12px mb-2 sfpro-medium text-darkgrey"
                                              >City
                                            </label>
                                            <div>
                                              <input
                                                id="city"
                                                type="text"
                                                placeholder="Enter your city"
                                                oninput="this.value=this.value.replace(/[^A-Za-z. ]/g,'')"
                                                name="city"
                                                formcontrolname="city"
                                                class="form-control ng-untouched ng-pristine ng-invalid"
                                              />
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 mb-3 mb-sm-0">
                                          <div>
                                            <label
                                              for=""
                                              class="d-block fs-12px mb-2 sfpro-medium text-darkgrey"
                                              >State
                                            </label>
                                            <div>
                                              <input
                                                type="text"
                                                placeholder="Enter your state"
                                                oninput="this.value=this.value.replace(/[^A-Za-z. ]/g,'')"
                                                name="state"
                                                formcontrolname="state"
                                                class="form-control ng-untouched ng-pristine ng-invalid"
                                              />
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                          <div>
                                            <label
                                              for=""
                                              class="d-block fs-12px mb-2 sfpro-medium text-darkgrey"
                                              >Country</label
                                            >
                                            <div>
                                              <input
                                                type="text"
                                                placeholder="Enter your Country"
                                                name="country"
                                                formcontrolname="country"
                                                oninput="this.value=this.value.replace(/[^A-Za-z. ]/g,'')"
                                                class="form-control ng-untouched ng-pristine ng-invalid"
                                              />
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="mt-4 mb-4">
                                      <label
                                        for="billing-shipping"
                                        class="form-check-label custom-checkbox fs-12px"
                                        style="padding-left: 27px"
                                        ><input
                                          type="checkbox"
                                          name="billingShipping"
                                          id="billing-shipping"
                                          formcontrolname="billingAndShipping"
                                          class="form-check-input ng-untouched ng-pristine ng-valid"
                                        /><span class="checkmark customcheck"></span>
                                        Billing address is same as the shipping address
                                      </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <hr />
                              <div class="mt-4">
                                <div class="row">
                                  <div
                                    formarrayname="productList"
                                    class="col-md-12 ng-untouched ng-pristine ng-invalid"
                                  >
                                    <h3 class="fs-16px SFProBold mb-3">Order Details</h3>
                                    <div class="ng-untouched ng-pristine ng-invalid">
                                      <div class="row">
                                        <div class="col-md-3 col-sm-12 mb-3 mb-md-0">
                                          <label
                                            class="d-block fs-12px mb-2 sfpro-medium text-darkgrey"
                                            >Product 1 Name</label
                                          >
                                          <div _nghost-kms-c132="">
                                            <div
                                              _ngcontent-kms-c132=""
                                              class="position-relative prodSearch_0 search-select-box"
                                            >
                                              <div _ngcontent-kms-c132="" class="position-relative">
                                                <div _ngcontent-kms-c132="">
                                                  <input
                                                    _ngcontent-kms-c132=""
                                                    type="text"
                                                    required=""
                                                    autocomplete="new-text"
                                                    class="form-control fs-12px plcholdercolor ng-untouched ng-pristine ng-invalid"
                                                    placeholder="Enter or search your product name"
                                                  />
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-8 col-sm-12">
                                          <div class="row">
                                            <div class="col-md-3 col-6 mb-3 mb-md-0">
                                              <label
                                                class="d-block fs-12px mb-2 sfpro-medium text-darkgrey"
                                                >Quantity</label
                                              >
                                              <div class="position-relative quantity-adder">
                                                <button
                                                  tabindex="-1"
                                                  class="position-absolute quantity-decrement"
                                                  style="cursor: pointer"
                                                >
                                                  -</button
                                                ><input
                                                  type="number"
                                                  placeholder="1"
                                                  name="quantity"
                                                  formcontrolname="quantity"
                                                  class="form-control text-center ng-untouched ng-pristine ng-valid"
                                                  style="color: #191919 !important"
                                                /><button
                                                  tabindex="-1"
                                                  class="position-absolute quantity-increment"
                                                  style="cursor: pointer"
                                                >
                                                  +
                                                </button>
                                              </div>
                                              <div></div>
                                            </div>
                                            <div class="col-md-3 col-6 mb-3 mb-md-0">
                                              <label
                                                class="d-block fs-12px mb-2 sfpro-medium text-darkgrey"
                                                >Unit Price</label
                                              >
                                              <div class="position-relative quantity-adder">
                                                <button
                                                  tabindex="-1"
                                                  class="position-absolute quantity-decrement"
                                                  style="color: #a9b0bc"
                                                >
                                                  ₹</button
                                                ><input
                                                  type="number"
                                                  placeholder="0.00"
                                                  formcontrolname="unitPrice"
                                                  name="unit_price"
                                                  class="form-control pr075rem ng-untouched ng-pristine ng-invalid"
                                                />
                                              </div>
                                              <div></div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                              <label
                                                class="d-block fs-12px mb-2 sfpro-medium text-darkgrey"
                                                >Total Price</label
                                              >
                                              <div class="position-relative quantity-adder">
                                                <button
                                                  tabindex="-1"
                                                  class="position-absolute quantity-decrement"
                                                  style="color: #a9b0bc; background: #d3d3d3"
                                                >
                                                  ₹</button
                                                ><input
                                                  type="number"
                                                  placeholder="0.00"
                                                  formcontrolname="totalPrice"
                                                  name="total_price"
                                                  class="form-control pr075rem ng-untouched ng-pristine"
                                                  style="background: #efefef"
                                                  disabled=""
                                                />
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <hr />
                                    </div>

                                    <div>
                                      <button tabindex="-1" class="btn add-product text-blue">
                                        + Add Another product
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <hr />
                              <div class="mt-4">
                                <h3 class="SFProBold fs-16px mb-3 text-191919">Package Details</h3>
                                <div class="row">
                                  <div class="col-md-3">
                                    <div class="mb-2">
                                      <h5 class="fs-14px sfpro-medium mb-2 text-191919">
                                        Dead Weight
                                        <img
                                          data-src="assets/images/text_info.svg"
                                          appsrpopover=""
                                          alt="info"
                                          class="ms-2"
                                          data-bs-original-title=""
                                          title=""
                                          src="https://app.shiprocket.in/seller/assets/images/text_info.svg"
                                        />
                                      </h5>
                                      <div class="position-relative quantity-adder weight-design">
                                        <input
                                          type="number"
                                          placeholder="0.00"
                                          name="package_weight"
                                          formcontrolname="packageWeight"
                                          class="form-control ng-untouched ng-pristine ng-invalid"
                                        /><button
                                          tabindex="-1"
                                          class="position-absolute quantity-increment"
                                        >
                                          Kg
                                        </button>
                                      </div>
                                      <div></div>
                                    </div>
                                    <span class="note-text-lite fs-10px"
                                      >(Max. 3 digits after decimal place)</span
                                    >
                                    <p class="note-text-lite fs-10px">
                                      Note: The minimum chargeable weight is 0.50 Kg
                                    </p>
                                  </div>
                                  <div class="col-md-8 ps-lg-5">
                                    <h5 class="fs-14px sfpro-medium mb-2 md-font-size-12px">
                                      Enter package dimensions (L*B*H) to calculate Volumetric Weight
                                    </h5>
                                    <div class="row mb-10px">
                                      <div class="col-lg-3 col-sm-4 col-8 custom_responsive">
                                        <div class="position-relative quantity-adder weight-design">
                                          <input
                                            type="text"
                                            placeholder="0.00"
                                            name="package_length"
                                            formcontrolname="packageLength"
                                            class="form-control ng-untouched ng-pristine ng-invalid"
                                          /><button
                                            tabindex="-1"
                                            class="position-absolute quantity-increment"
                                          >
                                            CM
                                          </button>
                                        </div>
                                        <div></div>
                                      </div>
                                      <div class="col-lg-3 col-sm-4 col-8 custom_responsive">
                                        <div class="position-relative quantity-adder weight-design">
                                          <input
                                            type="text"
                                            name="package_breadth"
                                            placeholder="0.00"
                                            formcontrolname="packageBreadth"
                                            class="form-control ng-untouched ng-pristine ng-invalid"
                                          /><button
                                            tabindex="-1"
                                            class="position-absolute quantity-increment"
                                          >
                                            CM
                                          </button>
                                        </div>
                                        <div></div>
                                      </div>
                                      <div class="col-lg-3 col-sm-4 col-8">
                                        <div class="position-relative quantity-adder weight-design">
                                          <input
                                            type="text"
                                            placeholder="0.00"
                                            name="package_height"
                                            formcontrolname="packageHeight"
                                            class="form-control ng-untouched ng-pristine ng-invalid"
                                          /><button
                                            tabindex="-1"
                                            class="position-absolute quantity-increment"
                                          >
                                            CM
                                          </button>
                                        </div>
                                        <div></div>
                                      </div>
                                    </div>
                                    <p class="note-text-lite fs-10px">
                                      Note: Dimension should be in centimeters only, &amp; values
                                      should be greater than 0.50 cm.
                                    </p>
                                    <div></div>
                                  </div>
                                </div>
                              </div>
                              <div class="blue-strip mb-4">
                                <div class="row">
                                  <div
                                    class="col-lg-2 col-md-3 col-6 fs-14px sfpro-medium text-191919"
                                  >
                                    Volumetric Weight
                                  </div>
                                  <div
                                    class="col-lg-10 col-md-9 col-6 fs-14px sfpro-medium text-191919"
                                  >
                                    0.00 Kg
                                  </div>
                                </div>
                              </div>
                              <div class="blue-strip-2 mb-4">
                                <div class="row mb-3">
                                  <div class="col-lg-2 col-md-3 col-6 fs-14px sfpro-bold text-191919">
                                    Applicable Weight
                                  </div>
                                  <div
                                    class="col-lg-10 col-md-9 col-6 fs-14px sfpro-bold text-191919"
                                  >
                                    0.00 Kg
                                  </div>
                                </div>
                                <p class="note-text-lite fs-11px mb-1">
                                  *Applicable weight is the heavier among the two weights that is Dead
                                  Weight V/s the Volumetric Weight, basis on which freight charges are
                                  calculated.
                                </p>
                                <p class="note-text-lite fs-11px mb-1">
                                  *Final chargeable weight will be based on the weight slab of the
                                  courier selected before shipping
                                </p>
                              </div>
                              <hr />
                              <div class="mb-3">
                                <h3 class="fs-16px SFProBold mb-2 text-191919">Payment Details</h3>
                                <p class="fs-12px sfpro-medium text-greyish-brown mb-2">
                                  Select Mode of Payment that your buyer has chosen for the order
                                </p>
                              </div>
                              <div class="row mb-4">
                                <div class="col-md-3 col-sm-4 col-6 me-3 mb-3 me-sm-0">
                                  <div class="form-check p-0">
                                    <input type="radio" id="prepaid" name="fav_language" value="prepaid">
                                      <label for="prepaid">Prepad</label>
                                  </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-12">
                                  <div class="form-check p-0">
                                    <input type="radio" id="html" name="fav_language" value="HTML">
                                      <label for="html">Cash on Deliverey</label>
                                  </div>
                                </div>
                              </div>
                              <div class="blue-strip mb-4">
                                <div class="row">
                                  <div class="col-md-6 col-6">
                                    <div class="fs-14px sfpro-medium text-191919">
                                      Total Order Value
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-6 text-end">
                                    <div class="fs-14px sfpro-medium text-191919">₹ 0.00</div>
                                  </div>
                                </div>
                              </div>
                              <div></div>

                              <div class="quick-shipment-note">
                                <p class="fs-12px">
                                  <img
                                    data-src="assets/images/quick_ship_note.svg"
                                    alt="note"
                                    class="me-2"
                                    src="https://app.shiprocket.in/seller/assets/images/quick_ship_note.svg"
                                  />
                                  Note: In case a shipment gets lost, the amount above will be
                                  refunded to your account, capped at ₹5000
                                </p>
                              </div>
                            </div>
                            <div class="mt-5 text-end" style="margin-bottom: 94px">
                              <button
                                class="btn-purple-bg fs-14px sfpro-semibold rounded-0-5rem p-2 ps-5 pe-5 custom_disable_btn"
                                style="line-height: 1.5"
                                disabled=""
                              >
                                Select Courier
                              </button>
                            </div>
                          </form>
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