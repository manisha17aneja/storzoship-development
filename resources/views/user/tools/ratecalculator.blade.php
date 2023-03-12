@extends('layouts.main')

@section('title')
Rate Calculator
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
            
            <!-- Channels -->
            <div class="bg-white py-4 px-2">
              <div class="row mt-3">
                <div class="col-md-12 col-lg-12 d-flex  mb-2">
                  <ul class="nav nav-pills border-0 mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button
                        class="btn nav-link mr-1 closedEl btn-primary active"
                        id="pills-closed-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-closed"
                        type="button"
                        role="tab"
                        aria-controls="pills-closed"
                        aria-selected="true"
                      >
                        Closed
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="btn nav-link mr-1 pending btn-primary"
                        id="pills-pending-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-pending"
                        type="button"
                        role="tab"
                        aria-controls="pills-pending"
                        aria-selected="true"
                      >
                        Pending
                      </button>
                    </li>
                  </ul>
                </div>
              </div>
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
                                <div
                                  class="pb-4 me-2 w-firsthalf d-inline-block bg-white border-radius-13px resp-width"
                                >
                                  <form
                                    novalidate=""
                                    autocomplete="off"
                                    class="ng-untouched ng-pristine ng-invalid"
                                  >
                                    <p class="text-greyish-brown sfpro-medium">Shipment Type</p>
                                    <div class="row w-shipmenttype pt-2">
                                      <div class="col resp-mb">
                                        <label
                                          class="form-check-label custom-radiobtn label fs-11px"
                                          ><input
                                            id="forward"
                                            value="FORWARD"
                                            name="shipmentType"
                                            formcontrolname="shipmentType"
                                            type="radio"
                                            class="form-check-input ng-untouched ng-pristine ng-valid"
                                          /><span class="checkmark sfpro-regular"></span>
                                          Forward
                                        </label>
                                      </div>
                                      <div class="col">
                                        <label
                                          class="form-check-label custom-radiobtn label fs-11px"
                                          ><input
                                            id="return"
                                            value="RETURN"
                                            name="shipmentType"
                                            formcontrolname="shipmentType"
                                            type="radio"
                                            class="form-check-input ng-untouched ng-pristine ng-valid"
                                          /><span class="checkmark"></span>
                                          Return
                                        </label>
                                      </div>
                                    </div>
                                    <div class="row mt-2rem">
                                      <div class="col-5">
                                        <label class="text-greyish-brown sfpro-medium mb-8px"
                                          >Pickup Pincode</label
                                        ><input
                                          type="text"
                                          oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                          maxlength="6"
                                          formcontrolname="pickup_postcode"
                                          placeholder="Enter 6 digit pickup area pincode"
                                          class="form-control w-95 custom-padding ng-untouched ng-pristine ng-invalid"
                                        />
                                      </div>
                                      <div class="col-5">
                                        <label class="ms-3 text-greyish-brown sfpro-medium mb-8px"
                                          >Delivery Pincode</label
                                        ><input
                                          maxlength="6"
                                          type="text"
                                          formcontrolname="delivery_postcode"
                                          placeholder="Enter 6 digit delivery area pincode"
                                          class="ms-3 form-control w-67 custom-padding ng-untouched ng-pristine ng-invalid"
                                        />
                                      </div>
                                    </div>
                                    <div class="row mt-2rem">
                                      <div class="col-5">
                                        <label class="text-greyish-brown sfpro-medium mb-8px"
                                          >Actual Weight</label
                                        >
                                        <div
                                          class="position-relative quantity-adder w-70 weight-design"
                                        >
                                          <input
                                            appthreedigitdecimanumber=""
                                            type="text"
                                            placeholder="0.00"
                                            maxlength="6"
                                            name="package_length"
                                            formcontrolname="weight"
                                            class="form-control ng-untouched ng-pristine ng-invalid"
                                          /><button
                                            tabindex="-1"
                                            class="position-absolute quantity-increment"
                                          >
                                            KG
                                          </button>
                                        </div>
                    
                                        <p class="text-light-gray fs-10px lh-16px mt-2">
                                          Note: Minimum chargeable weight is 0.5kg
                                        </p>
                                      </div>
                                      <div class="col-7">
                                        <label class="ms-3 text-greyish-brown sfpro-medium mb-8px"
                                          >Dimensions<span class="optional">(Optional)</span></label
                                        >
                                        <div class="ms-3 d-block d-lg-flex">
                                          <div class="appendform w-25 mb-3 mb-lg-0 me-4">
                                            <input
                                              appthreedigitdecimanumber=""
                                              formcontrolname="length"
                                              type="text"
                                              placeholder="L"
                                              onkeypress="if(this.value.length==6) return false;"
                                              class="w-input custom-padding inputAddOn-field input-append ng-untouched ng-pristine ng-valid"
                                            /><span>CM</span>
                                          </div>
                                          <div class="appendform w-25 mb-3 mb-lg-0 me-4">
                                            <input
                                              appthreedigitdecimanumber=""
                                              formcontrolname="breadth"
                                              type="text"
                                              placeholder="B"
                                              onkeypress="if(this.value.length==6) return false;"
                                              class="w-input custom-padding inputAddOn-field input-append ng-untouched ng-pristine ng-valid"
                                            /><span>CM</span>
                                          </div>
                                          <div class="appendform mb-3 mb-lg-0 w-25 me-4">
                                            <input
                                              appthreedigitdecimanumber=""
                                              formcontrolname="height"
                                              type="text"
                                              placeholder="H"
                                              onkeypress="if(this.value.length==6) return false;"
                                              class="w-input custom-padding inputAddOn-field input-append ng-untouched ng-pristine ng-valid"
                                            /><span>CM</span>
                                          </div>
                                        </div>
                    
                                        <p class="ms-3 text-light-gray fs-10px lh-16px mt-2 mb-2">
                                          Note: Dimensional value should be greater than 0.5cm
                                        </p>
                                      </div>
                                    </div>
                                    <div class="row mt-3">
                                      <div class="col-5 ng-star-inserted">
                                        <label class="text-greyish-brown sfpro-medium mb-3"
                                          >Payment Type</label
                                        ><br />
                                        <div class="d-inline-block me-5 resp-mb">
                                          <label
                                            class="form-check-label custom-radiobtn label fs-11px"
                                            ><input
                                              id="COD"
                                              value="COD"
                                              name="cod"
                                              formcontrolname="cod"
                                              type="radio"
                                              class="form-check-input ng-untouched ng-pristine ng-invalid"
                                            /><span class="checkmark"></span>
                                            Cash on Delivery
                                          </label>
                                        </div>
                                        <div class="d-inline-block">
                                          <label
                                            class="form-check-label custom-radiobtn label fs-11px"
                                            ><input
                                              id="prepaid"
                                              value="prepaid"
                                              name="cod"
                                              formcontrolname="cod"
                                              type="radio"
                                              class="form-check-input ng-untouched ng-pristine ng-invalid"
                                            /><span class="checkmark"></span>
                                            Prepaid
                                          </label>
                                        </div>
                                      </div>
                    
                                      <div class="col-7">
                                        <label class="text-greyish-brown sfpro-medium mb-8px ms-3"
                                          >Shipment Value (₹)</label
                                        >
                                        <div class="appendform w-70 me-4 ms-3">
                                          <span style="padding: 0.75rem 1.36rem">₹</span
                                          ><input
                                            onkeypress="if(this.value.length==7) return false;"
                                            formcontrolname="declared_value"
                                            type="number"
                                            placeholder="Enter the shipment value"
                                            class="w-input custom-padding inputAddOn-field input-append ng-untouched ng-pristine ng-invalid"
                                          />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row mt-2rem">
                                      <div class="col-5 ng-star-inserted">
                                        <label class="text-greyish-brown sfpro-medium mb-8px"
                                          >Shipping Dangerous Goods?
                                          <a
                                            href="javascript:void(0);"
                                            data-bs-trigger="'click'"
                                            appsrpopover=""
                                            data-bs-original-title=""
                                            title=""
                                            ><img
                                              apppathcorrection=""
                                              data-src="/assets/images/info icons.svg"
                                              alt="info"
                                              class="ms-2"
                                              src="https://app.shiprocket.in/seller//assets/images/info icons.svg" /></a
                                        ></label>
                                        <div hidden="">
                                          <div class="sfpro-regular text-black-four">
                                            <p class="mb-0">
                                              Shipments containing flammable gas, flammable liquids,
                                              oil-based paints, batteries, and other hazardous
                                              materials are not permitted in Air mode.<span
                                                class="cursor-pointer text-purple"
                                                >&nbsp;Dangerous Goods List</span
                                              >
                                            </p>
                                          </div>
                                        </div>
                                        <br />
                                        <div class="d-inline-block me-5">
                                          <label
                                            class="form-check-label custom-radiobtn label fs-11px resp-mb"
                                            ><input
                                              formcontrolname="is_dg"
                                              value="yes"
                                              type="radio"
                                              class="form-check-input ng-untouched ng-pristine ng-invalid"
                                            /><span class="checkmark"></span>
                                            Yes
                                          </label>
                                        </div>
                                        <div class="d-inline-block">
                                          <label
                                            class="form-check-label custom-radiobtn label fs-11px"
                                            ><input
                                              formcontrolname="is_dg"
                                              value="no"
                                              type="radio"
                                              class="form-check-input ng-untouched ng-pristine ng-invalid"
                                            /><span class="checkmark"></span>
                                            No
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="mt-2rem">
                                      <button
                                        class="btn-purple-bg px-5 h-3rem rounded-0-5rem text-white fs-14px"
                                      >
                                        Calculate</button
                                      ><button
                                        class="btn-purple-border text-purple px-5 h-3rem rounded-0-5rem ml-16px fs-14px"
                                      >
                                        Reset
                                      </button>
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
                    
                              <div style="width: 97%">
                                <div>
                                  <div class="bg-white me-2 pt-4 mt-4 d-inline-block rounded-8px">
                                    <span
                                      class="ms-4 fs-14px ls-28 lh-20px text-light-black sfpro-semibold mt-4 tnc"
                                      >Terms &amp; Conditions</span
                                    >
                                    <div class="mt-2 ps-3 pe-5">
                                      <ul class="text-greyish-brown fs-12px lh-24px ls-24">
                                        <li>
                                          Dead/Dry weight or volumetric weight whichever is higher
                                          will be taken while calculating the freight rates.
                                        </li>
                                        <li>
                                          Fixed COD charge or COD % of the order value whichever is
                                          higher will be taken while calculating the COD fee.
                                        </li>
                                        <li>Above prices are inclusive of GST.</li>
                                        <li>
                                          The above pricing is subject to change based on fuel
                                          surcharges and courier company base rates.
                                        </li>
                                        <li>
                                          Return charges may apply over and above the freight fee
                                          incase of E-com Express.
                                        </li>
                                        <li>
                                          Volumetric weight is calculated LxBxH/5000 for all courier
                                          companies except for Fedex Surface, Aramex, Fedex Surface
                                          Light and Gati Surface. In case of Fedex surface,
                                          volumetric weight is calculated as LxBxH/4500, for Aramex,
                                          it is LxBxH/6000, for Fedex Surface Light, it is
                                          LxBxH/4500 and for Gati Surface, it is LxBxH/4500 (length,
                                          breadth, height has to be taken in Centimeters and divided
                                          by denominator, this will give the value in Kilograms).
                                        </li>
                                        <li>
                                          The maximum liability if any is limited to whatever
                                          compensation the logistics partner offers to Company in
                                          event of a claim by the Merchant, provided such claim is
                                          raised by the Merchant within one (1) month from the date
                                          of such damage or loss or theft.
                                        </li>
                                        <li>
                                          Other Charges like Octroi charges, state entry tax and
                                          fees, address correction charges if applicable shall be
                                          charged extra.
                                        </li>
                                        <li>
                                          RTO (return to origin) shipment will be charged
                                          differently from the forward delivery rate.
                                        </li>
                                        <li>
                                          For any queries a ticket has to be raised on
                                          <a
                                            href="mailto:support@shiprocket.in"
                                            style="text-decoration: none"
                                            >support@shiprocket.in</a
                                          >.
                                        </li>
                                        <li>
                                          The maximum liability if any is limited to whatever
                                          compensation the logistics partner offers to Company in
                                          event of a claim by the Merchant, provided such claim is
                                          raised by the Merchant within one (1) month from the date
                                          of such damage or loss or theft.
                                        </li>
                                        <li>
                                          Shiprocket shall not assist in shipping goods that come
                                          under the category of prohibited, dangerous goods or
                                          restricted good.
                                        </li>
                                        <li>
                                          Detailed terms and conditions can be review on
                                          <a
                                            href="http://www.shiprocket.in/merchant-agreement"
                                            style="text-decoration: none"
                                            >www.shiprocket.in/merchant-agreement</a
                                          >
                                        </li>
                                        <li>
                                          Important: The standard courier RTO charge will also apply
                                          to their additional weight courier type.
                                        </li>
                                      </ul>
                                    </div>
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
                <div
                  class="tab-pane fade"
                  id="pills-pending"
                  role="tabpanel"
                  aria-labelledby="pills-pending-tab"
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
                              <div
                                class="pb-4 me-2 w-firsthalf d-inline-block bg-white border-radius-13px resp-width"
                              >
                                <form
                                  novalidate=""
                                  autocomplete="off"
                                  class="ng-untouched ng-pristine ng-invalid"
                                >
                                 
                                  <div class="row mt-2rem">
                                    <div class="col-5">
                                      <label class="text-greyish-brown sfpro-medium mb-8px"
                                        >Pickup Pincode</label
                                      ><input
                                        type="text"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        maxlength="6"
                                        formcontrolname="pickup_postcode"
                                        placeholder="Enter 6 digit pickup area pincode"
                                        class="form-control w-95 custom-padding ng-untouched ng-pristine ng-invalid"
                                      />
                                    </div>
                                    <div class="col-5">
                                      <label class="ms-3 text-greyish-brown sfpro-medium mb-8px"
                                        >Delivery Pincode</label
                                      ><input
                                        maxlength="6"
                                        type="text"
                                        formcontrolname="delivery_postcode"
                                        placeholder="Enter 6 digit delivery area pincode"
                                        class="ms-3 form-control w-67 custom-padding ng-untouched ng-pristine ng-invalid"
                                      />
                                    </div>
                                  </div>
                                  <div class="row mt-2rem">
                                    <div class="col-5">
                                      <label class="text-greyish-brown sfpro-medium mb-8px"
                                        >Actual Weight</label
                                      >
                                      <div
                                        class="position-relative quantity-adder w-70 weight-design"
                                      >
                                        <input
                                          appthreedigitdecimanumber=""
                                          type="text"
                                          placeholder="0.00"
                                          maxlength="6"
                                          name="package_length"
                                          formcontrolname="weight"
                                          class="form-control ng-untouched ng-pristine ng-invalid"
                                        /><button
                                          tabindex="-1"
                                          class="position-absolute quantity-increment"
                                        >
                                          KG
                                        </button>
                                      </div>
                  
                                      <p class="text-light-gray fs-10px lh-16px mt-2">
                                        Note: Minimum chargeable weight is 0.5kg
                                      </p>
                                    </div>
                                    <div class="col-7">
                                      <label class="ms-3 text-greyish-brown sfpro-medium mb-8px"
                                        >Dimensions<span class="optional">(Optional)</span></label
                                      >
                                      <div class="ms-3 d-block d-lg-flex">
                                        <div class="appendform w-25 mb-3 mb-lg-0 me-4">
                                          <input
                                            appthreedigitdecimanumber=""
                                            formcontrolname="length"
                                            type="text"
                                            placeholder="L"
                                            onkeypress="if(this.value.length==6) return false;"
                                            class="w-input custom-padding inputAddOn-field input-append ng-untouched ng-pristine ng-valid"
                                          /><span>CM</span>
                                        </div>
                                        <div class="appendform w-25 mb-3 mb-lg-0 me-4">
                                          <input
                                            appthreedigitdecimanumber=""
                                            formcontrolname="breadth"
                                            type="text"
                                            placeholder="B"
                                            onkeypress="if(this.value.length==6) return false;"
                                            class="w-input custom-padding inputAddOn-field input-append ng-untouched ng-pristine ng-valid"
                                          /><span>CM</span>
                                        </div>
                                        <div class="appendform mb-3 mb-lg-0 w-25 me-4">
                                          <input
                                            appthreedigitdecimanumber=""
                                            formcontrolname="height"
                                            type="text"
                                            placeholder="H"
                                            onkeypress="if(this.value.length==6) return false;"
                                            class="w-input custom-padding inputAddOn-field input-append ng-untouched ng-pristine ng-valid"
                                          /><span>CM</span>
                                        </div>
                                      </div>
                  
                                      <p class="ms-3 text-light-gray fs-10px lh-16px mt-2 mb-2">
                                        Note: Dimensional value should be greater than 0.5cm
                                      </p>
                                    </div>
                                  </div>
                                  <div class="mt-2rem">
                                    <button
                                      class="btn-purple-bg px-5 h-3rem rounded-0-5rem text-white fs-14px"
                                    >
                                      Calculate</button
                                    ><button
                                      class="btn-purple-border text-purple px-5 h-3rem rounded-0-5rem ml-16px fs-14px"
                                    >
                                      Reset
                                    </button>
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
                  
                            <div style="width: 97%">
                              <div>
                                <div class="bg-white me-2 pt-4 mt-4 d-inline-block rounded-8px">
                                  <span
                                    class="ms-4 fs-14px ls-28 lh-20px text-light-black sfpro-semibold mt-4 tnc"
                                    >Terms &amp; Conditions</span
                                  >
                                  <div class="mt-2 ps-3 pe-5">
                                    <ul class="text-greyish-brown fs-12px lh-24px ls-24">
                                      <li>
                                        Dead/Dry weight or volumetric weight whichever is higher will be taken while
                                        calculating the freight rates.
                                      </li>
                                      <li>
                                        Fixed COD charge or COD % of the order value whichever is higher will be
                                        taken while calculating the COD fee.
                                      </li>
                                      <li>Above prices are inclusive of GST.</li>
                                      <li>
                                        The above pricing is subject to change based on fuel surcharges and courier
                                        company base rates.
                                      </li>
                                      <li>
                                        Return charges may apply over and above the freight fee incase of E-com
                                        Express.
                                      </li>
                                      <li>
                                        Volumetric weight is calculated LxBxH/5000 for all courier companies except
                                        for Fedex Surface, Aramex, Fedex Surface Light and Gati Surface. In case of
                                        Fedex surface, volumetric weight is calculated as LxBxH/4500, for Aramex, it
                                        is LxBxH/6000, for Fedex Surface Light, it is LxBxH/4500 and for Gati
                                        Surface, it is LxBxH/4500 (length, breadth, height has to be taken in
                                        Centimeters and divided by denominator, this will give the value in
                                        Kilograms).
                                      </li>
                                      <li>
                                        The maximum liability if any is limited to whatever compensation the
                                        logistics partner offers to Company in event of a claim by the Merchant,
                                        provided such claim is raised by the Merchant within one (1) month from the
                                        date of such damage or loss or theft.
                                      </li>
                                      <li>
                                        Other Charges like Octroi charges, state entry tax and fees, address
                                        correction charges if applicable shall be charged extra.
                                      </li>
                                      <li>
                                        RTO (return to origin) shipment will be charged differently from the forward
                                        delivery rate.
                                      </li>
                                      <li>
                                        For any queries a ticket has to be raised on
                                        <a href="mailto:support@shiprocket.in" style="text-decoration: none"
                                          >support@shiprocket.in</a
                                        >.
                                      </li>
                                      <li>
                                        The maximum liability if any is limited to whatever compensation the
                                        logistics partner offers to Company in event of a claim by the Merchant,
                                        provided such claim is raised by the Merchant within one (1) month from the
                                        date of such damage or loss or theft.
                                      </li>
                                      <li>
                                        Shiprocket shall not assist in shipping goods that come under the category
                                        of prohibited, dangerous goods or restricted good.
                                      </li>
                                      <li>
                                        Detailed terms and conditions can be review on
                                        <a
                                          href="http://www.shiprocket.in/merchant-agreement"
                                          style="text-decoration: none"
                                          >www.shiprocket.in/merchant-agreement</a
                                        >
                                      </li>
                                      <li>
                                        Important: The standard courier RTO charge will also apply to their
                                        additional weight courier type.
                                      </li>
                                    </ul>
                                    
                                  </div>
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