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
                <div class="tab-pane fade show active" id="pills-closed" role="tabpanel" aria-labelledby="pills-closed-tab" tabindex="0">
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
                                    Order Details
                                    </h6>
                                    <div
                                      class="p-5 bg-white"
                                      style="border-radius: 13px; margin-bottom: 14px"
                                    >

                                    <div class="row mt-3 --changed">
                                          <div class="col-md-4">
                                            <label>ORDER NUMBER </label
                                            ><input
                                              type="text"
                                              name="shipping_pincode"
                                              placeholder=""
                                              formcontrolname="shipping_pincode"
                                              maxlength="15"
                                              class="form-control ng-untouched ng-pristine ng-invalid"
                                            />
                                          </div>
                                          <div class="col-md-4 custom_margin_top_md">
                                            <label>ORDER TYPE</label
                                            ><select
                                              name="shipping_state"
                                              id="shipping_state"
                                              formcontrolname="shipping_state"
                                              class="custom_bg_color ng-untouched ng-pristine ng-invalid"
                                            >
                                              <option value="">Select Option</option>
                                              <option value="COD">COD</option>
                                              <option value="Prepaid">Prepaid</option>
                                            </select>
                                          </div>

                                          <div class="col-md-4">
                                            <label>COLLECTABLE AMOUNT</label
                                            ><input
                                              type="text"
                                              name="shipping_pincode"
                                              placeholder=""
                                              formcontrolname="shipping_pincode"
                                              maxlength="15"
                                              class="form-control ng-untouched ng-pristine ng-invalid"
                                            />
                                          </div>
                                         
                    
                                        
                                        </div>

                                        
                                      <p class="regular">
                                      Product Details
                                       
                                      </p>
                                      <div class="row">


                                      <div class="col-md-3 custom_margin_top_md">
                                          <label>Product Name</label
                                          ><input
                                            type="text"
                                            name="shipping_firstname"
                                            placeholder=""
                                            formcontrolname="shipping_firstname"
                                            maxlength="50"
                                            class="form-control ng-untouched ng-pristine ng-invalid"
                                          />
                                        </div>


                                        <div class="col-md-3">
                                          <label>Unit Price</label>
                                          <div class="custom-mob-css">
                                            <input
                                              type="text"
                                              name="shipping_mobile"
                                              placeholder=""
                                              oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                                              formcontrolname="shipping_mobile"
                                              class="form-control ml-5px ng-untouched ng-pristine ng-invalid"
                                              minlength="10"
                                              maxlength="10"
                                              pattern="[6789]{1}[0-9]{9}"
                                            /><span class="shipping_span"> ₹</span>
                                          </div>
                                        </div>

                                    


                                       
                                        <div class="col-md-3 custom_margin_top_md">
                                          <label
                                            >Quantity
                                            </label
                                          ><input
                                            type="text"
                                            name="shipping_emailid"
                                            placeholder=""
                                            formcontrolname="shipping_emailid"
                                            class="form-control ng-untouched ng-pristine ng-valid"
                                          />
                                        </div>


                                        <div class="col-md-3 custom_margin_top_md">
                                          <label
                                            >SKU
                                            </label
                                          ><input
                                            type="text"
                                            name="shipping_emailid"
                                            placeholder=""
                                            formcontrolname="shipping_emailid"
                                            class="form-control ng-untouched ng-pristine ng-valid"
                                          />
                                        </div>

                                      </div>

                                      
                                      
                                     
                                      <div class="mt-4">
                                        <p>
                                          <label
                                            for="shippingisbilling"
                                            class="mb-0 ps-2rem position-relative custom-checkbox"
                                            style="top: -2px"
                                            ><input
                                              type="checkbox"
                                              name="shipping_is_billing"
                                              formcontrolname="shipping_is_billing"
                                              id="shippingisbilling"
                                              class="ng-untouched ng-pristine ng-valid"
                                            /><span
                                              class="checkmark customcheck"
                                              style="border-radius: 4px"
                                            ></span>
                                            Display seller info in packing slip?</label
                                          >
                                        </p>
                                      </div>



                                     <br>
                                      <div class="row">


                                      <div class="col-md-6 custom_margin_top_md">
                                          <label>RESELLER NAME</label
                                          ><input
                                            type="text"
                                            name="shipping_firstname"
                                            placeholder=""
                                            formcontrolname="shipping_firstname"
                                            maxlength="50"
                                            class="form-control ng-untouched ng-pristine ng-invalid"
                                          />
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
                            <div
                              role="tabpanel"
                              class="mat-tab-body ng-tns-c80-1 ng-star-inserted"
                              id="mat-tab-content-0-1"
                              aria-labelledby="mat-tab-label-0-1"
                            >
                              <div
                                class="mat-tab-body-content ng-tns-c80-1 ng-trigger ng-trigger-translateTab"
                                style="transform: translate3d(100%, 0px, 0px); min-height: 1px"
                              ></div>
                            </div>
                            <div
                              role="tabpanel"
                              class="mat-tab-body ng-tns-c80-2 ng-star-inserted"
                              id="mat-tab-content-0-2"
                              aria-labelledby="mat-tab-label-0-2"
                            >
                              <div
                                class="mat-tab-body-content ng-tns-c80-2 ng-trigger ng-trigger-translateTab"
                                style="transform: translate3d(100%, 0px, 0px); min-height: 1px"
                              ></div>
                            </div>
                            <div
                              role="tabpanel"
                              class="mat-tab-body ng-tns-c80-3 ng-star-inserted"
                              id="mat-tab-content-0-3"
                              aria-labelledby="mat-tab-label-0-3"
                            >
                              <div
                                class="mat-tab-body-content ng-tns-c80-3 ng-trigger ng-trigger-translateTab"
                                style="transform: translate3d(100%, 0px, 0px); min-height: 1px"
                              ></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    

                  </div>
                </div>
                <div class="tab-pane fade" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab" tabindex="0">
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
                                        Pickup Details 2
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
                                    <h6
                                      class="SFProBold mb-4 custom_margin_left_sm"
                                      style="font-size: 20px !important"
                                    >
                                    Bulk Orders
                                    </h6>
                                    
                                    <div class="upload-card">
                                      <div class="upload-card-header row">
                                        <div class="upload-card-title sfpro-bold col-pull-6 col-md-6">
                                          Import Bulk Orders
                                        </div>
                                        <div class="download-template-btn col-push-6 col-md-6">
                                          <div class="dropdown">
                                            <button
                                              type="button"
                                              id="dropdownMenuButton1"
                                              data-bs-toggle="dropdown"
                                              aria-expanded="false"
                                              style="border: 1px solid #d3d3d3"
                                              class="template-dropdown"
                                            >
                                              <img src="https://app.shiprocket.in/seller/assets/images/icons/download1.svg" alt="image" /><span
                                                class="dropdown-text sfpro-medium"
                                                >Download Template</span
                                              ><img
                                                src="https://app.shiprocket.in/seller/assets/images/icons/angle_down.svg"
                                                alt="image"
                                                style="margin-left: -3px"
                                                class="ng-star-inserted"
                                              />
                                            </button>
                                            <ul
                                              aria-labelledby="dropdownMenuButton1"
                                              class="dropdown-menu"
                                              style="width: 181px"
                                            >
                                              <li>
                                                <div class="export-options">
                                                  <img src="https://app.shiprocket.in/seller/assets/images/icons/download1.svg" alt="image" /><span
                                                    class="dropdown-text sfpro-medium"
                                                    >Domestic Orders</span
                                                  >
                                                </div>
                                                <div class="export-divider"></div>
                                                <div class="export-options">
                                                  <img src="https://app.shiprocket.in/seller/assets/images/icons/download1.svg" alt="image" /><span
                                                    class="dropdown-text sfpro-medium"
                                                    >International Orders</span
                                                  >
                                                </div>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div>
                                        <div
                                          class="upload-desc sfpro-medium custom_neg_mrg"
                                          style="margin-top: -12px"
                                        >
                                          Download the sample file and replace its data with your order data. Make
                                          sure all mandatory fields are filled. <br />Save the file and upload it
                                          back.
                                        </div>
                                      </div>
                                      <div class="upload-card-content dropzone">
                                        <div accept=".xls,.csv,.xlsx" _nghost-wwm-c27="">
                                          <div _ngcontent-wwm-c27="" class="ngx-file-drop__drop-zone">
                                            <div _ngcontent-wwm-c27="" class="ngx-file-drop__content">
                                              <input
                                                _ngcontent-wwm-c27=""
                                                type="file"
                                                class="ngx-file-drop__file-input"
                                                accept=".xls,.csv,.xlsx"
                                                multiple=""
                                              /><img
                                                src="https://app.shiprocket.in/seller/assets/images/icons/upload.svg"
                                                alt="image"
                                                class="mr-2 ng-star-inserted"
                                              />
                                              <div
                                                class="dragDesc sfpro-medium mt-0-3 ng-star-inserted"
                                                style="margin-top: 9px"
                                              >
                                                Drag And Drop to upload the files here.
                                              </div>
                                              <div
                                                class="orDesc sfpro-medium ng-star-inserted"
                                                style="color: #191919"
                                              >
                                                OR
                                              </div>
                                              <button type="button" class="browseBtn sfpro-medium ng-star-inserted">
                                                Browse and Upload
                                              </button>
                                              <div class="browseDesc sfpro-medium mt-0-3 ng-star-inserted">
                                                Only
                                                <span class="browseDescBold">csv</span> file formal will be
                                                accepted.
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="upload-card-table">
                                      <div class="custmtable">
                                        <div role="alert" class="alert alert-info alertcustom">
                                          The successful orders will be directed to Process Orders. You can download
                                          your error files from below. If you cannot find the file you’re looking
                                          for, Please go to
                                          <a
                                            href="/activities?page=1&amp;perPage=15&amp;type=3"
                                            target="_blank"
                                            class="text-blue"
                                            >Activity Log</a
                                          >
                                          for the same.
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <h5 class="fs-16px lh-24 mb-3 sfpro-bold text-lightblack">
                                              Recent Uploads
                                            </h5>
                                          </div>
                                          <div class="col-md-6">
                                            <h4
                                              class="fs-12px lh-24 mb-3 sfpro-medium text-darkgrey text-end opacity-60"
                                            >
                                              Last 10 days of activity
                                            </h4>
                                          </div>
                                        </div>
                                        <div style="overflow-x: auto">
                                          <table aria-describedby="Bulk listing">
                                            <tr class="table-head">
                                              <th scope="col">File Name</th>
                                              <th scope="col">Date</th>
                                              <th scope="col">No. Of Orders</th>
                                              <th scope="col">Successfull Orders</th>
                                              <th scope="col">Error Orders</th>
                                              <th scope="col"></th>
                                            </tr>
                                    
                                            <tr class="table-body">
                                              <td>fdcdd5d7-3e79-4fce-b16f-6955ae1c1ec3.csv</td>
                                              <td>15/12/2022</td>
                                              <td>3</td>
                                              <td>
                                                <p class="mb-0 position-relative top top-4px">
                                                  <mat-icon
                                                    role="img"
                                                    class="mat-icon notranslate fs-12px text-green position-relative top-2px material-icons mat-icon-no-color"
                                                    aria-hidden="true"
                                                    data-mat-icon-type="font"
                                                    >check_circle</mat-icon
                                                  >2
                                                </p>
                                              </td>
                                              <td>
                                                <p class="mb-0 position-relative top top-6px">
                                                  <mat-icon
                                                    role="img"
                                                    class="mat-icon notranslate fs-12px text-lightred position-relative top-2px lh-20px mat-icon-box material-icons mat-icon-no-color"
                                                    aria-hidden="true"
                                                    data-mat-icon-type="font"
                                                    >cancel</mat-icon
                                                  >1
                                                </p>
                                                <p
                                                  class="cursor-pointer mb-0 position-relative text-dardblue top-2px"
                                                >
                                                  Download Error File
                                                </p>
                                              </td>
                                            </tr>
                                            <tr class="table-body">
                                              <td>7ddb442c-75ec-4c3e-beba-3fa70a036671.csv</td>
                                              <td>15/12/2022</td>
                                              <td>3</td>
                                              <td>
                                                <p class="mb-0 position-relative top top-4px">
                                                  <mat-icon
                                                    role="img"
                                                    class="mat-icon notranslate fs-12px text-green position-relative top-2px material-icons mat-icon-no-color"
                                                    aria-hidden="true"
                                                    data-mat-icon-type="font"
                                                    >check_circle</mat-icon
                                                  >1
                                                </p>
                                              </td>
                                              <td>
                                                <p class="mb-0 position-relative top top-6px">
                                                  <mat-icon
                                                    role="img"
                                                    class="mat-icon notranslate fs-12px text-lightred position-relative top-2px lh-20px mat-icon-box material-icons mat-icon-no-color"
                                                    aria-hidden="true"
                                                    data-mat-icon-type="font"
                                                    >cancel</mat-icon
                                                  >2
                                                </p>
                                                <p
                                                  class="cursor-pointer mb-0 position-relative text-dardblue top-2px"
                                                >
                                                  Download Error File
                                                </p>
                                              </td>
                                            </tr>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    
                                    

                                </div>
                              </div>
                            </div>
                            <div
                              role="tabpanel"
                              class="mat-tab-body ng-tns-c80-1 ng-star-inserted"
                              id="mat-tab-content-0-1"
                              aria-labelledby="mat-tab-label-0-1"
                            >
                              <div
                                class="mat-tab-body-content ng-tns-c80-1 ng-trigger ng-trigger-translateTab"
                                style="transform: translate3d(100%, 0px, 0px); min-height: 1px"
                              ></div>
                            </div>
                            <div
                              role="tabpanel"
                              class="mat-tab-body ng-tns-c80-2 ng-star-inserted"
                              id="mat-tab-content-0-2"
                              aria-labelledby="mat-tab-label-0-2"
                            >
                              <div
                                class="mat-tab-body-content ng-tns-c80-2 ng-trigger ng-trigger-translateTab"
                                style="transform: translate3d(100%, 0px, 0px); min-height: 1px"
                              ></div>
                            </div>
                            <div
                              role="tabpanel"
                              class="mat-tab-body ng-tns-c80-3 ng-star-inserted"
                              id="mat-tab-content-0-3"
                              aria-labelledby="mat-tab-label-0-3"
                            >
                              <div
                                class="mat-tab-body-content ng-tns-c80-3 ng-trigger ng-trigger-translateTab"
                                style="transform: translate3d(100%, 0px, 0px); min-height: 1px"
                              ></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    

                  </div>
                </div>
                <div class="tab-pane fade" id="pills-Delivered" role="tabpanel" aria-labelledby="pills-Delivered-tab" tabindex="0">
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
                <div class="tab-pane fade" id="pills-Undelivered" role="tabpanel" aria-labelledby="pills-Undelivered-tab" tabindex="0">
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
                                        Pickup Details 3
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
                                      Add Buyer's Details
                                    </h6>
                                    <div
                                      class="p-5 bg-white"
                                      style="border-radius: 13px; margin-bottom: 14px"
                                    >
                                      <p class="regular">
                                        To whom is the order being delivered?
                                        <span>(Buyer's Info)</span>
                                      </p>
                                      <div class="row">
                                        <div class="col-md-4">
                                          <label>Mobile Number</label>
                                          <div class="custom-mob-css">
                                            <input
                                              type="text"
                                              name="shipping_mobile"
                                              placeholder="Enter buyer's phone number"
                                              oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                                              formcontrolname="shipping_mobile"
                                              class="form-control ml-5px ng-untouched ng-pristine ng-invalid"
                                              minlength="10"
                                              maxlength="10"
                                              pattern="[6789]{1}[0-9]{9}"
                                            /><span class="shipping_span">+91</span>
                                          </div>
                                        </div>
                                        <div class="col-md-4 custom_margin_top_md">
                                          <label>Full Name</label
                                          ><input
                                            type="text"
                                            name="shipping_firstname"
                                            placeholder="Enter full name"
                                            formcontrolname="shipping_firstname"
                                            maxlength="50"
                                            class="form-control ng-untouched ng-pristine ng-invalid"
                                          />
                                        </div>
                                        <div class="col-md-4 custom_margin_top_md">
                                          <label
                                            >Email Id
                                            <span class="optionalspan">(Optional)</span></label
                                          ><input
                                            type="text"
                                            name="shipping_emailid"
                                            placeholder="i.e abc@gmail.com"
                                            formcontrolname="shipping_emailid"
                                            class="form-control ng-untouched ng-pristine ng-valid"
                                          />
                                        </div>
                                      </div>
                                      <div class="mt-4 custom_padding">
                                        <p
                                          class="Orderblue-text cursor-pointer pb-3 d-inline-block"
                                          style="
                                            padding-bottom: 26px !important;
                                            padding-top: 6px !important;
                                          "
                                        >
                                          + Add Alternate Mobile Number, Buyer's Company Name,
                                          Buyer's GSTIN
                                          <img
                                            apppathcorrection=""
                                            data-src="assets/images/arrow_blue_down.svg"
                                            alt="arrow-down"
                                            src="https://app.shiprocket.in/seller/assets/images/arrow_blue_down.svg"
                                          /><span class="optionalspan" style="margin-left: 10px"
                                            >(Optional)</span
                                          >
                                        </p>
                                      </div>
                                      <div>
                                        <p class="regular">
                                          Where is the order being delivered to?
                                          <span>(Buyer's Address)</span>
                                        </p>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <label>Complete Address</label
                                            ><input
                                              type="text"
                                              name="shipping_address"
                                              placeholder="House/Floor No. Building Name or Street, Locality"
                                              formcontrolname="shipping_address"
                                              class="form-control ng-untouched ng-pristine ng-invalid"
                                            />
                                          </div>
                                          <div class="col-md-6 custom_margin_top_md">
                                            <label
                                              >Landmark
                                              <span class="optionalspan">(Optional)</span></label
                                            ><input
                                              type="text"
                                              name="shipping_address_2"
                                              placeholder="Any nearby post office, market, Hospital as the landmark"
                                              formcontrolname="shipping_address_2"
                                              class="form-control ng-untouched ng-pristine ng-valid"
                                            />
                                          </div>
                                        </div>
                                        <div class="row mt-3 --changed">
                                          <div class="col-md-3">
                                            <label>Pincode</label
                                            ><input
                                              type="text"
                                              name="shipping_pincode"
                                              placeholder="Enter Buyer's Pincode"
                                              formcontrolname="shipping_pincode"
                                              maxlength="15"
                                              class="form-control ng-untouched ng-pristine ng-invalid"
                                            />
                                          </div>
                                          <div class="col-md-3 custom_margin_top_md">
                                            <label>City</label
                                            ><input
                                              type="text"
                                              name="shipping_city"
                                              placeholder="Enter Buyer's City"
                                              formcontrolname="shipping_city"
                                              class="form-control custom_bg_color ng-untouched ng-pristine ng-invalid"
                                            />
                                          </div>
                                          <div
                                            class="col-md-3 custom_margin_top_md ng-star-inserted"
                                          >
                                            <label>State</label
                                            ><select
                                              name="shipping_state"
                                              id="shipping_state"
                                              formcontrolname="shipping_state"
                                              class="custom_bg_color ng-untouched ng-pristine ng-invalid"
                                            >
                                              <option value="">Please Select State</option>
                                              <option value="1475" class="ng-star-inserted">
                                                Andaman and Nicobar Islands
                                              </option>
                                              <option value="1476" class="ng-star-inserted">
                                                Andhra Pradesh
                                              </option>
                                              <option value="1477" class="ng-star-inserted">
                                                Arunachal Pradesh
                                              </option>
                                              <option value="1478" class="ng-star-inserted">
                                                Assam
                                              </option>
                                              <option value="1479" class="ng-star-inserted">
                                                Bihar
                                              </option>
                                              <option value="1480" class="ng-star-inserted">
                                                Chandigarh
                                              </option>
                                              <option value="1481" class="ng-star-inserted">
                                                Dadra and Nagar Haveli
                                              </option>
                                              <option value="1482" class="ng-star-inserted">
                                                Daman and Diu
                                              </option>
                                              <option value="1483" class="ng-star-inserted">
                                                Delhi
                                              </option>
                                              <option value="1484" class="ng-star-inserted">
                                                Goa
                                              </option>
                                              <option value="1485" class="ng-star-inserted">
                                                Gujarat
                                              </option>
                                              <option value="1486" class="ng-star-inserted">
                                                Haryana
                                              </option>
                                              <option value="1487" class="ng-star-inserted">
                                                Himachal Pradesh
                                              </option>
                                              <option value="1488" class="ng-star-inserted">
                                                Jammu and Kashmir
                                              </option>
                                              <option value="1489" class="ng-star-inserted">
                                                Karnataka
                                              </option>
                                              <option value="1490" class="ng-star-inserted">
                                                Kerala
                                              </option>
                                              <option value="1491" class="ng-star-inserted">
                                                Lakshadweep Islands
                                              </option>
                                              <option value="1492" class="ng-star-inserted">
                                                Madhya Pradesh
                                              </option>
                                              <option value="1493" class="ng-star-inserted">
                                                Maharashtra
                                              </option>
                                              <option value="1494" class="ng-star-inserted">
                                                Manipur
                                              </option>
                                              <option value="1495" class="ng-star-inserted">
                                                Meghalaya
                                              </option>
                                              <option value="1496" class="ng-star-inserted">
                                                Mizoram
                                              </option>
                                              <option value="1497" class="ng-star-inserted">
                                                Nagaland
                                              </option>
                                              <option value="1498" class="ng-star-inserted">
                                                Odisha
                                              </option>
                                              <option value="1499" class="ng-star-inserted">
                                                Pondicherry
                                              </option>
                                              <option value="1500" class="ng-star-inserted">
                                                Punjab
                                              </option>
                                              <option value="1501" class="ng-star-inserted">
                                                Rajasthan
                                              </option>
                                              <option value="1502" class="ng-star-inserted">
                                                Sikkim
                                              </option>
                                              <option value="1503" class="ng-star-inserted">
                                                Tamil Nadu
                                              </option>
                                              <option value="1504" class="ng-star-inserted">
                                                Tripura
                                              </option>
                                              <option value="1505" class="ng-star-inserted">
                                                Uttar Pradesh
                                              </option>
                                              <option value="1506" class="ng-star-inserted">
                                                West Bengal
                                              </option>
                                              <option value="3971" class="ng-star-inserted">
                                                Jharkhand
                                              </option>
                                              <option value="3972" class="ng-star-inserted">
                                                Uttarakhand
                                              </option>
                                              <option value="3973" class="ng-star-inserted">
                                                Chhattisgarh
                                              </option>
                                              <option value="3976" class="ng-star-inserted">
                                                Telangana
                                              </option>
                                              <option value="3986" class="ng-star-inserted">
                                                Ladakh
                                              </option>
                                            </select>
                                          </div>
                    
                                          <div class="col-md-3 custom_margin_top_md form-group">
                                            <label>Country</label
                                            ><select
                                              name="shipping_country"
                                              placeholder="Please select country"
                                              id="shipping_country"
                                              formcontrolname="shipping_country"
                                              class="custom_bg_color ng-untouched ng-pristine ng-valid"
                                              disabled="true"
                                            >
                                              <option value="1" class="ng-star-inserted">
                                                Afghanistan
                                              </option>
                                              <option value="2" class="ng-star-inserted">
                                                Albania
                                              </option>
                                              <option value="3" class="ng-star-inserted">
                                                Algeria
                                              </option>
                                              <option value="4" class="ng-star-inserted">
                                                American Samoa
                                              </option>
                                              <option value="5" class="ng-star-inserted">
                                                Andorra
                                              </option>
                                              <option value="6" class="ng-star-inserted">
                                                Angola
                                              </option>
                                              <option value="7" class="ng-star-inserted">
                                                Anguilla
                                              </option>
                                              <option value="8" class="ng-star-inserted">
                                                Antarctica
                                              </option>
                                              <option value="9" class="ng-star-inserted">
                                                Antigua and Barbuda
                                              </option>
                                              <option value="10" class="ng-star-inserted">
                                                Argentina
                                              </option>
                                              <option value="11" class="ng-star-inserted">
                                                Armenia
                                              </option>
                                              <option value="12" class="ng-star-inserted">
                                                Aruba
                                              </option>
                                              <option value="13" class="ng-star-inserted">
                                                Australia
                                              </option>
                                              <option value="14" class="ng-star-inserted">
                                                Austria
                                              </option>
                                              <option value="15" class="ng-star-inserted">
                                                Azerbaijan
                                              </option>
                                              <option value="16" class="ng-star-inserted">
                                                Bahamas
                                              </option>
                                              <option value="17" class="ng-star-inserted">
                                                Bahrain
                                              </option>
                                              <option value="18" class="ng-star-inserted">
                                                Bangladesh
                                              </option>
                                              <option value="19" class="ng-star-inserted">
                                                Barbados
                                              </option>
                                              <option value="20" class="ng-star-inserted">
                                                Belarus
                                              </option>
                                              <option value="21" class="ng-star-inserted">
                                                Belgium
                                              </option>
                                              <option value="22" class="ng-star-inserted">
                                                Belize
                                              </option>
                                              <option value="23" class="ng-star-inserted">
                                                Benin
                                              </option>
                                              <option value="24" class="ng-star-inserted">
                                                Bermuda
                                              </option>
                                              <option value="25" class="ng-star-inserted">
                                                Bhutan
                                              </option>
                                              <option value="26" class="ng-star-inserted">
                                                Bolivia
                                              </option>
                                              <option value="27" class="ng-star-inserted">
                                                Bosnia and Herzegowina
                                              </option>
                                              <option value="28" class="ng-star-inserted">
                                                Botswana
                                              </option>
                                              <option value="29" class="ng-star-inserted">
                                                Bouvet Island
                                              </option>
                                              <option value="30" class="ng-star-inserted">
                                                Brazil
                                              </option>
                                              <option value="31" class="ng-star-inserted">
                                                British Indian Ocean Territory
                                              </option>
                                              <option value="32" class="ng-star-inserted">
                                                Brunei Darussalam
                                              </option>
                                              <option value="33" class="ng-star-inserted">
                                                Bulgaria
                                              </option>
                                              <option value="34" class="ng-star-inserted">
                                                Burkina Faso
                                              </option>
                                              <option value="35" class="ng-star-inserted">
                                                Burundi
                                              </option>
                                              <option value="36" class="ng-star-inserted">
                                                Cambodia
                                              </option>
                                              <option value="37" class="ng-star-inserted">
                                                Cameroon
                                              </option>
                                              <option value="38" class="ng-star-inserted">
                                                Canada
                                              </option>
                                              <option value="39" class="ng-star-inserted">
                                                Cape Verde
                                              </option>
                                              <option value="40" class="ng-star-inserted">
                                                Cayman Islands
                                              </option>
                                              <option value="41" class="ng-star-inserted">
                                                Central African Republic
                                              </option>
                                              <option value="42" class="ng-star-inserted">
                                                Chad
                                              </option>
                                              <option value="43" class="ng-star-inserted">
                                                Chile
                                              </option>
                                              <option value="44" class="ng-star-inserted">
                                                China
                                              </option>
                                              <option value="45" class="ng-star-inserted">
                                                Christmas Island
                                              </option>
                                              <option value="46" class="ng-star-inserted">
                                                Cocos (Keeling) Islands
                                              </option>
                                              <option value="47" class="ng-star-inserted">
                                                Colombia
                                              </option>
                                              <option value="48" class="ng-star-inserted">
                                                Comoros
                                              </option>
                                              <option value="49" class="ng-star-inserted">
                                                Congo
                                              </option>
                                              <option value="50" class="ng-star-inserted">
                                                Cook Islands
                                              </option>
                                              <option value="51" class="ng-star-inserted">
                                                Costa Rica
                                              </option>
                                              <option value="52" class="ng-star-inserted">
                                                Cote D'Ivoire
                                              </option>
                                              <option value="53" class="ng-star-inserted">
                                                Croatia
                                              </option>
                                              <option value="54" class="ng-star-inserted">
                                                Cuba
                                              </option>
                                              <option value="55" class="ng-star-inserted">
                                                Cyprus
                                              </option>
                                              <option value="56" class="ng-star-inserted">
                                                Czech Republic
                                              </option>
                                              <option value="57" class="ng-star-inserted">
                                                Denmark
                                              </option>
                                              <option value="58" class="ng-star-inserted">
                                                Djibouti
                                              </option>
                                              <option value="59" class="ng-star-inserted">
                                                Dominica
                                              </option>
                                              <option value="60" class="ng-star-inserted">
                                                Dominican Republic
                                              </option>
                                              <option value="61" class="ng-star-inserted">
                                                East Timor
                                              </option>
                                              <option value="62" class="ng-star-inserted">
                                                Ecuador
                                              </option>
                                              <option value="63" class="ng-star-inserted">
                                                Egypt
                                              </option>
                                              <option value="64" class="ng-star-inserted">
                                                El Salvador
                                              </option>
                                              <option value="65" class="ng-star-inserted">
                                                Equatorial Guinea
                                              </option>
                                              <option value="66" class="ng-star-inserted">
                                                Eritrea
                                              </option>
                                              <option value="67" class="ng-star-inserted">
                                                Estonia
                                              </option>
                                              <option value="68" class="ng-star-inserted">
                                                Ethiopia
                                              </option>
                                              <option value="69" class="ng-star-inserted">
                                                Falkland Islands (Malvinas)
                                              </option>
                                              <option value="70" class="ng-star-inserted">
                                                Faroe Islands
                                              </option>
                                              <option value="71" class="ng-star-inserted">
                                                Fiji
                                              </option>
                                              <option value="72" class="ng-star-inserted">
                                                Finland
                                              </option>
                                              <option value="73" class="ng-star-inserted">
                                                France
                                              </option>
                                              <option value="74" class="ng-star-inserted">
                                                France, Metropolitan
                                              </option>
                                              <option value="75" class="ng-star-inserted">
                                                French Guiana
                                              </option>
                                              <option value="76" class="ng-star-inserted">
                                                French Polynesia
                                              </option>
                                              <option value="77" class="ng-star-inserted">
                                                French Southern Territories
                                              </option>
                                              <option value="78" class="ng-star-inserted">
                                                Gabon
                                              </option>
                                              <option value="79" class="ng-star-inserted">
                                                Gambia
                                              </option>
                                              <option value="80" class="ng-star-inserted">
                                                Georgia
                                              </option>
                                              <option value="81" class="ng-star-inserted">
                                                Germany
                                              </option>
                                              <option value="82" class="ng-star-inserted">
                                                Ghana
                                              </option>
                                              <option value="83" class="ng-star-inserted">
                                                Gibraltar
                                              </option>
                                              <option value="84" class="ng-star-inserted">
                                                Greece
                                              </option>
                                              <option value="85" class="ng-star-inserted">
                                                Greenland
                                              </option>
                                              <option value="86" class="ng-star-inserted">
                                                Grenada
                                              </option>
                                              <option value="87" class="ng-star-inserted">
                                                Guadeloupe
                                              </option>
                                              <option value="88" class="ng-star-inserted">
                                                Guam
                                              </option>
                                              <option value="89" class="ng-star-inserted">
                                                Guatemala
                                              </option>
                                              <option value="90" class="ng-star-inserted">
                                                Guinea
                                              </option>
                                              <option value="91" class="ng-star-inserted">
                                                Guinea-bissau
                                              </option>
                                              <option value="92" class="ng-star-inserted">
                                                Guyana
                                              </option>
                                              <option value="93" class="ng-star-inserted">
                                                Haiti
                                              </option>
                                              <option value="94" class="ng-star-inserted">
                                                Heard and Mc Donald Islands
                                              </option>
                                              <option value="95" class="ng-star-inserted">
                                                Honduras
                                              </option>
                                              <option value="96" class="ng-star-inserted">
                                                Hong Kong
                                              </option>
                                              <option value="97" class="ng-star-inserted">
                                                Hungary
                                              </option>
                                              <option value="98" class="ng-star-inserted">
                                                Iceland
                                              </option>
                                              <option value="99" class="ng-star-inserted">
                                                India
                                              </option>
                                              <option value="100" class="ng-star-inserted">
                                                Indonesia
                                              </option>
                                              <option value="101" class="ng-star-inserted">
                                                Iran (Islamic Republic of)
                                              </option>
                                              <option value="102" class="ng-star-inserted">
                                                Iraq
                                              </option>
                                              <option value="103" class="ng-star-inserted">
                                                Ireland
                                              </option>
                                              <option value="104" class="ng-star-inserted">
                                                Israel
                                              </option>
                                              <option value="105" class="ng-star-inserted">
                                                Italy
                                              </option>
                                              <option value="106" class="ng-star-inserted">
                                                Jamaica
                                              </option>
                                              <option value="107" class="ng-star-inserted">
                                                Japan
                                              </option>
                                              <option value="108" class="ng-star-inserted">
                                                Jordan
                                              </option>
                                              <option value="109" class="ng-star-inserted">
                                                Kazakhstan
                                              </option>
                                              <option value="110" class="ng-star-inserted">
                                                Kenya
                                              </option>
                                              <option value="111" class="ng-star-inserted">
                                                Kiribati
                                              </option>
                                              <option value="112" class="ng-star-inserted">
                                                North Korea
                                              </option>
                                              <option value="113" class="ng-star-inserted">
                                                Korea, Republic of
                                              </option>
                                              <option value="114" class="ng-star-inserted">
                                                Kuwait
                                              </option>
                                              <option value="115" class="ng-star-inserted">
                                                Kyrgyzstan
                                              </option>
                                              <option value="116" class="ng-star-inserted">
                                                Lao People's Democratic Republic
                                              </option>
                                              <option value="117" class="ng-star-inserted">
                                                Latvia
                                              </option>
                                              <option value="118" class="ng-star-inserted">
                                                Lebanon
                                              </option>
                                              <option value="119" class="ng-star-inserted">
                                                Lesotho
                                              </option>
                                              <option value="120" class="ng-star-inserted">
                                                Liberia
                                              </option>
                                              <option value="121" class="ng-star-inserted">
                                                Libyan Arab Jamahiriya
                                              </option>
                                              <option value="122" class="ng-star-inserted">
                                                Liechtenstein
                                              </option>
                                              <option value="123" class="ng-star-inserted">
                                                Lithuania
                                              </option>
                                              <option value="124" class="ng-star-inserted">
                                                Luxembourg
                                              </option>
                                              <option value="125" class="ng-star-inserted">
                                                Macau
                                              </option>
                                              <option value="126" class="ng-star-inserted">
                                                Macedonia
                                              </option>
                                              <option value="127" class="ng-star-inserted">
                                                Madagascar
                                              </option>
                                              <option value="128" class="ng-star-inserted">
                                                Malawi
                                              </option>
                                              <option value="129" class="ng-star-inserted">
                                                Malaysia
                                              </option>
                                              <option value="130" class="ng-star-inserted">
                                                Maldives
                                              </option>
                                              <option value="131" class="ng-star-inserted">
                                                Mali
                                              </option>
                                              <option value="132" class="ng-star-inserted">
                                                Malta
                                              </option>
                                              <option value="133" class="ng-star-inserted">
                                                Marshall Islands
                                              </option>
                                              <option value="134" class="ng-star-inserted">
                                                Martinique
                                              </option>
                                              <option value="135" class="ng-star-inserted">
                                                Mauritania
                                              </option>
                                              <option value="136" class="ng-star-inserted">
                                                Mauritius
                                              </option>
                                              <option value="137" class="ng-star-inserted">
                                                Mayotte
                                              </option>
                                              <option value="138" class="ng-star-inserted">
                                                Mexico
                                              </option>
                                              <option value="139" class="ng-star-inserted">
                                                Micronesia, Federated States of
                                              </option>
                                              <option value="140" class="ng-star-inserted">
                                                Moldova, Republic of
                                              </option>
                                              <option value="141" class="ng-star-inserted">
                                                Monaco
                                              </option>
                                              <option value="142" class="ng-star-inserted">
                                                Mongolia
                                              </option>
                                              <option value="143" class="ng-star-inserted">
                                                Montserrat
                                              </option>
                                              <option value="144" class="ng-star-inserted">
                                                Morocco
                                              </option>
                                              <option value="145" class="ng-star-inserted">
                                                Mozambique
                                              </option>
                                              <option value="146" class="ng-star-inserted">
                                                Myanmar
                                              </option>
                                              <option value="147" class="ng-star-inserted">
                                                Namibia
                                              </option>
                                              <option value="148" class="ng-star-inserted">
                                                Nauru
                                              </option>
                                              <option value="149" class="ng-star-inserted">
                                                Nepal
                                              </option>
                                              <option value="150" class="ng-star-inserted">
                                                Netherlands
                                              </option>
                                              <option value="151" class="ng-star-inserted">
                                                Netherlands Antilles
                                              </option>
                                              <option value="152" class="ng-star-inserted">
                                                New Caledonia
                                              </option>
                                              <option value="153" class="ng-star-inserted">
                                                New Zealand
                                              </option>
                                              <option value="154" class="ng-star-inserted">
                                                Nicaragua
                                              </option>
                                              <option value="155" class="ng-star-inserted">
                                                Niger
                                              </option>
                                              <option value="156" class="ng-star-inserted">
                                                Nigeria
                                              </option>
                                              <option value="157" class="ng-star-inserted">
                                                Niue
                                              </option>
                                              <option value="158" class="ng-star-inserted">
                                                Norfolk Island
                                              </option>
                                              <option value="159" class="ng-star-inserted">
                                                Northern Mariana Islands
                                              </option>
                                              <option value="160" class="ng-star-inserted">
                                                Norway
                                              </option>
                                              <option value="161" class="ng-star-inserted">
                                                Oman
                                              </option>
                                              <option value="162" class="ng-star-inserted">
                                                Pakistan
                                              </option>
                                              <option value="163" class="ng-star-inserted">
                                                Palau
                                              </option>
                                              <option value="164" class="ng-star-inserted">
                                                Panama
                                              </option>
                                              <option value="165" class="ng-star-inserted">
                                                Papua New Guinea
                                              </option>
                                              <option value="166" class="ng-star-inserted">
                                                Paraguay
                                              </option>
                                              <option value="167" class="ng-star-inserted">
                                                Peru
                                              </option>
                                              <option value="168" class="ng-star-inserted">
                                                Philippines
                                              </option>
                                              <option value="169" class="ng-star-inserted">
                                                Pitcairn
                                              </option>
                                              <option value="170" class="ng-star-inserted">
                                                Poland
                                              </option>
                                              <option value="171" class="ng-star-inserted">
                                                Portugal
                                              </option>
                                              <option value="172" class="ng-star-inserted">
                                                Puerto Rico
                                              </option>
                                              <option value="173" class="ng-star-inserted">
                                                Qatar
                                              </option>
                                              <option value="174" class="ng-star-inserted">
                                                Reunion
                                              </option>
                                              <option value="175" class="ng-star-inserted">
                                                Romania
                                              </option>
                                              <option value="176" class="ng-star-inserted">
                                                Russian Federation
                                              </option>
                                              <option value="177" class="ng-star-inserted">
                                                Rwanda
                                              </option>
                                              <option value="178" class="ng-star-inserted">
                                                Saint Kitts and Nevis
                                              </option>
                                              <option value="179" class="ng-star-inserted">
                                                Saint Lucia
                                              </option>
                                              <option value="180" class="ng-star-inserted">
                                                Saint Vincent and the Grenadines
                                              </option>
                                              <option value="181" class="ng-star-inserted">
                                                Samoa
                                              </option>
                                              <option value="182" class="ng-star-inserted">
                                                San Marino
                                              </option>
                                              <option value="183" class="ng-star-inserted">
                                                Sao Tome and Principe
                                              </option>
                                              <option value="184" class="ng-star-inserted">
                                                Saudi Arabia
                                              </option>
                                              <option value="185" class="ng-star-inserted">
                                                Senegal
                                              </option>
                                              <option value="186" class="ng-star-inserted">
                                                Seychelles
                                              </option>
                                              <option value="187" class="ng-star-inserted">
                                                Sierra Leone
                                              </option>
                                              <option value="188" class="ng-star-inserted">
                                                Singapore
                                              </option>
                                              <option value="189" class="ng-star-inserted">
                                                Slovak Republic
                                              </option>
                                              <option value="190" class="ng-star-inserted">
                                                Slovenia
                                              </option>
                                              <option value="191" class="ng-star-inserted">
                                                Solomon Islands
                                              </option>
                                              <option value="192" class="ng-star-inserted">
                                                Somalia
                                              </option>
                                              <option value="193" class="ng-star-inserted">
                                                South Africa
                                              </option>
                                              <option value="194" class="ng-star-inserted">
                                                South Georgia &amp;amp; South Sandwich Islands
                                              </option>
                                              <option value="195" class="ng-star-inserted">
                                                Spain
                                              </option>
                                              <option value="196" class="ng-star-inserted">
                                                Sri Lanka
                                              </option>
                                              <option value="197" class="ng-star-inserted">
                                                St. Helena
                                              </option>
                                              <option value="198" class="ng-star-inserted">
                                                St. Pierre and Miquelon
                                              </option>
                                              <option value="199" class="ng-star-inserted">
                                                Sudan
                                              </option>
                                              <option value="200" class="ng-star-inserted">
                                                Suriname
                                              </option>
                                              <option value="201" class="ng-star-inserted">
                                                Svalbard and Jan Mayen Islands
                                              </option>
                                              <option value="202" class="ng-star-inserted">
                                                Swaziland
                                              </option>
                                              <option value="203" class="ng-star-inserted">
                                                Sweden
                                              </option>
                                              <option value="204" class="ng-star-inserted">
                                                Switzerland
                                              </option>
                                              <option value="205" class="ng-star-inserted">
                                                Syrian Arab Republic
                                              </option>
                                              <option value="206" class="ng-star-inserted">
                                                Taiwan
                                              </option>
                                              <option value="207" class="ng-star-inserted">
                                                Tajikistan
                                              </option>
                                              <option value="208" class="ng-star-inserted">
                                                Tanzania, United Republic of
                                              </option>
                                              <option value="209" class="ng-star-inserted">
                                                Thailand
                                              </option>
                                              <option value="210" class="ng-star-inserted">
                                                Togo
                                              </option>
                                              <option value="211" class="ng-star-inserted">
                                                Tokelau
                                              </option>
                                              <option value="212" class="ng-star-inserted">
                                                Tonga
                                              </option>
                                              <option value="213" class="ng-star-inserted">
                                                Trinidad and Tobago
                                              </option>
                                              <option value="214" class="ng-star-inserted">
                                                Tunisia
                                              </option>
                                              <option value="215" class="ng-star-inserted">
                                                Turkey
                                              </option>
                                              <option value="216" class="ng-star-inserted">
                                                Turkmenistan
                                              </option>
                                              <option value="217" class="ng-star-inserted">
                                                Turks and Caicos Islands
                                              </option>
                                              <option value="218" class="ng-star-inserted">
                                                Tuvalu
                                              </option>
                                              <option value="219" class="ng-star-inserted">
                                                Uganda
                                              </option>
                                              <option value="220" class="ng-star-inserted">
                                                Ukraine
                                              </option>
                                              <option value="221" class="ng-star-inserted">
                                                United Arab Emirates
                                              </option>
                                              <option value="222" class="ng-star-inserted">
                                                United Kingdom
                                              </option>
                                              <option value="223" class="ng-star-inserted">
                                                United States
                                              </option>
                                              <option value="224" class="ng-star-inserted">
                                                United States Minor Outlying Islands
                                              </option>
                                              <option value="225" class="ng-star-inserted">
                                                Uruguay
                                              </option>
                                              <option value="226" class="ng-star-inserted">
                                                Uzbekistan
                                              </option>
                                              <option value="227" class="ng-star-inserted">
                                                Vanuatu
                                              </option>
                                              <option value="228" class="ng-star-inserted">
                                                Vatican City State (Holy See)
                                              </option>
                                              <option value="229" class="ng-star-inserted">
                                                Venezuela
                                              </option>
                                              <option value="230" class="ng-star-inserted">
                                                Viet Nam
                                              </option>
                                              <option value="231" class="ng-star-inserted">
                                                Virgin Islands (British)
                                              </option>
                                              <option value="232" class="ng-star-inserted">
                                                Virgin Islands (U.S.)
                                              </option>
                                              <option value="233" class="ng-star-inserted">
                                                Wallis and Futuna Islands
                                              </option>
                                              <option value="234" class="ng-star-inserted">
                                                Western Sahara
                                              </option>
                                              <option value="235" class="ng-star-inserted">
                                                Yemen
                                              </option>
                                              <option value="236" class="ng-star-inserted">
                                                Yugoslavia
                                              </option>
                                              <option value="237" class="ng-star-inserted">
                                                Democratic Republic of Congo
                                              </option>
                                              <option value="238" class="ng-star-inserted">
                                                Zambia
                                              </option>
                                              <option value="239" class="ng-star-inserted">
                                                Zimbabwe
                                              </option>
                                              <option value="240" class="ng-star-inserted">
                                                Aland Islands
                                              </option>
                                              <option value="241" class="ng-star-inserted">
                                                St Barthelemy
                                              </option>
                                              <option value="242" class="ng-star-inserted">
                                                Guernsey
                                              </option>
                                              <option value="243" class="ng-star-inserted">
                                                Isle of Man
                                              </option>
                                              <option value="244" class="ng-star-inserted">
                                                Jersey
                                              </option>
                                              <option value="245" class="ng-star-inserted">
                                                Montenegro
                                              </option>
                                              <option value="246" class="ng-star-inserted">
                                                St Martin (French part)
                                              </option>
                                              <option value="247" class="ng-star-inserted">
                                                Serbia
                                              </option>
                                              <option value="248" class="ng-star-inserted">
                                                South Sudan
                                              </option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="mt-4">
                                        <p>
                                          <label
                                            for="shippingisbilling"
                                            class="mb-0 ps-2rem position-relative custom-checkbox"
                                            style="top: -2px"
                                            ><input
                                              type="checkbox"
                                              name="shipping_is_billing"
                                              formcontrolname="shipping_is_billing"
                                              id="shippingisbilling"
                                              class="ng-untouched ng-pristine ng-valid"
                                            /><span
                                              class="checkmark customcheck"
                                              style="border-radius: 4px"
                                            ></span>
                                            Billing address is same as the shipping address</label
                                          >
                                        </p>
                                      </div>
                                    </div>
                                    <div class="text-end">
                                      <button
                                        type="button"
                                        class="nxtbtn fs-14px sfpro-semibold rounded-6px w-8rem h-3rem"
                                      >
                                        Next 1
                                      </button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                            <div
                              role="tabpanel"
                              class="mat-tab-body ng-tns-c80-1 ng-star-inserted"
                              id="mat-tab-content-0-1"
                              aria-labelledby="mat-tab-label-0-1"
                            >
                              <div
                                class="mat-tab-body-content ng-tns-c80-1 ng-trigger ng-trigger-translateTab"
                                style="transform: translate3d(100%, 0px, 0px); min-height: 1px"
                              ></div>
                            </div>
                            <div
                              role="tabpanel"
                              class="mat-tab-body ng-tns-c80-2 ng-star-inserted"
                              id="mat-tab-content-0-2"
                              aria-labelledby="mat-tab-label-0-2"
                            >
                              <div
                                class="mat-tab-body-content ng-tns-c80-2 ng-trigger ng-trigger-translateTab"
                                style="transform: translate3d(100%, 0px, 0px); min-height: 1px"
                              ></div>
                            </div>
                            <div
                              role="tabpanel"
                              class="mat-tab-body ng-tns-c80-3 ng-star-inserted"
                              id="mat-tab-content-0-3"
                              aria-labelledby="mat-tab-label-0-3"
                            >
                              <div
                                class="mat-tab-body-content ng-tns-c80-3 ng-trigger ng-trigger-translateTab"
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
            </div>
          </div>
        </div>
        
     
        <!-- main-body-panel end -->
@endsection