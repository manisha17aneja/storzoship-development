@extends('layouts.main')

@section('title')
Orders
@endsection

@section('class')
warehouse-page complaints-page rate-calculator-page recharge-page payment-recharge user-remittance-page reports-page
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
                <div class="col-lg-3 col-md-2 col-sm-2 col-3">
                  <h3 class="fs-20px text-dark mb-0">Orders</h3>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10 col-9">
                  <div class="position-relative order-search-input-wrp">
                    <div>
                      <div class="global-search position-relative search-select-box">
                        <div class="position-relative">
                          <img alt="search" class="select-search-icon cursor-pointer ng-star-inserted" data-src="//assets/images/search-lens.svg" src="https://app.shiprocket.in/seller///assets/images/search-lens.svg" />
                          <div>
                            <input id="myInputTextField" type="text" required="" autocomplete="new-text" class="form-control fs-12px plcholdercolor padd_left35 padd_right35 ng-pristine ng-invalid ng-touched" placeholder="Search for AWB, Order ID, Buyer Mobile Number, Email, SKU, Pickup ID" />
                          </div>
                        </div>
                        <ul class="p-0 pickup-address-list ng-star-inserted"></ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-3 mt-md-0 text-md-end text-start sync-orders-container">
                 <a href="{{ route('user.orders.create') }}"> <button class="SFProSemiBold addOrder_btn cursor-pointer"> + &nbsp;Add Order</button></a>
                  <a class="ms-2 onhoverdisplay text-decoration-none onhover text-dark fs-12px sfpro-medium cursor-pointer sync-orders">
                    <img data-src="//assets/images/sync.svg" alt="" src="https://app.shiprocket.in/seller///assets/images/sync.svg" /> Sync Orders </a>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-10 col-lg-10">
                  <ul class="nav nav-pills border-0 p-0" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 closedEl btn-primary active" id="pills-closed-tab" data-bs-toggle="pill" data-bs-target="#pills-closed" type="button" role="tab" aria-controls="pills-closed" aria-selected="true"> New </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 pending btn-primary" id="pills-pending-tab" data-bs-toggle="pill" data-bs-target="#pills-pending" type="button" role="tab" aria-controls="pills-pending" aria-selected="false" tabindex="-1"> Ready to Ship </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 Delivered btn-primary" id="pills-Delivered-tab" data-bs-toggle="pill" data-bs-target="#pills-Delivered" type="button" role="tab" aria-controls="pills-Delivered" aria-selected="false" tabindex="-1"> Pickups </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 Undelivered btn-primary" id="pills-Undelivered-tab" data-bs-toggle="pill" data-bs-target="#pills-Undelivered" type="button" role="tab" aria-controls="pills-Undelivered" aria-selected="false" tabindex="-1"> In Transit </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 RTOIntransit btn-primary" id="pills-RTOIntransit-tab" data-bs-toggle="pill" data-bs-target="#pills-RTOIntransit" type="button" role="tab" aria-controls="pills-RTOIntransit" aria-selected="false" tabindex="-1"> Delivered </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 RTODelivered btn-primary" id="pills-RTODelivered-tab" data-bs-toggle="pill" data-bs-target="#pills-RTODelivered" type="button" role="tab" aria-controls="pills-RTODelivered" aria-selected="false" tabindex="-1"> RTO </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 all btn-primary" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="false" tabindex="-1"> All </button>
                    </li>
                  </ul>
                </div>
                
              </div>
              <div class="tab-content border-0" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-closed" role="tabpanel" aria-labelledby="pills-closed-tab" tabindex="0">
                  <div class="row latest-order-div">
                    <div class="filter-container-custom col-12">
                      <div class="row">
                        <div class="col-5">
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img alt="image" class="ng-tns-c156-102" src="https://app.shiprocket.in/seller///assets/images/calender.svg"> Last 30 days </button>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">Today</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Yesterday</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Last 7 days</a>
                              </li>
                            </ul>
                          </div>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> Domestic </button>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">Domestc</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">International</a>
                              </li>
                            </ul>
                          </div>
                          <button>
                            <img alt="Filter" width="24" src="https://app.shiprocket.in/seller///assets/images/filter.svg" /> More Filter </button>
                        </div>
                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">
                              <button data-bs-toggle="tooltip" data-bs-placement="top" title="" class="icon_btn_1 me-16px" data-bs-original-title="Bulk Order Update" aria-label="Bulk Order Update">
                                <img data-src="//assets/images/icons/layers_layer_icon.svg" alt="layer icon" src="https://app.shiprocket.in/seller///assets/images/icons/layers_layer_icon.svg" />
                              </button>
                              <button data-bs-toggle="tooltip" data-bs-placement="top" title="" class="icon_btn_1 me-16px" data-bs-original-title="Download Report" aria-label="Download Report">
                                <img data-src="//assets/images/icons/download-disable.svg" alt="download" src="https://app.shiprocket.in/seller///assets/images/icons/download-disable.svg" />
                              </button>
                              <button class="mat-menu-trigger bulkAction_btn rounded-4px pe-5 position-relative ps-3 text-start d-flex align-items-center" disabled="" aria-haspopup="true"> Select Bulk Action <span class="ng-star-inserted">
                                  <img data-src="/assets/images/sarrowdown.svg" alt="arrow down" width="24" src="https://app.shiprocket.in/seller//assets/images/sarrowdown.svg" />
                                </span>
                              </button>
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>0 Orders for Last 30 days</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead1">
                              <table class="table table-striped table-hover no-wrap admin_created">
                                <thead>
                                  <tr>
                                    <th style="text-align: center">Order ID</th>
                                    <th style="text-align: center">Order Number</th>
                                    <th style="text-align: center">Airwaybill Number</th>
                                    <th style="text-align: center">Logistic Name</th>
                                    <th style="text-align: center">Customer Name</th>
                                    <th style="text-align: center">Customer Number</th>
                                    <th style="text-align: center">Order Type</th>
                                    <th style="text-align: center">Created Date</th>
                                    <th style="text-align: center">Last Status Date</th>
                                    <th style="text-align: center">Order Status</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                               <!--<tbody>
                                  <tr>
                                    <td class="text-center" colspan="7">
                                      <div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found">
                                        <div class="mb-20px">
                                          <img width="210" src="/assets/images/3.svg" alt="No Orders Found" />
                                        </div>
                                        <div class="mb-27px display-4 heading">No Orders Found</div>
                                        <div class="cta-section"></div>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>-->
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--<div class="d-flex justify-content-between text-sm-center mb-2 mb-md-0 py-md-4 w-md-75 mt-2 pagination-container">
                      <span>Items per page:</span>
                      <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> 15 </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">15</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">30</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">60</a>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">10</a>
                          </li>
                        </ul>
                        <div class="right-side">
                          <span>0 of 0</span>
                        <div>
                          <button type="button" class="mat-focus-indicator mat-tooltip-trigger mat-paginator-navigation-previous mat-icon-button mat-button-base mat-button-disabled" aria-label="Previous page" disabled="true">
                            <span class="mat-button-wrapper">
                              <svg viewBox="0 0 24 24" focusable="false" class="mat-paginator-icon">
                                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
                              </svg>
                            </span>
                            <span class="mat-ripple mat-button-ripple mat-button-ripple-round"></span>
                            <span class="mat-button-focus-overlay"></span>
                          </button>
                          <button type="button" class="mat-focus-indicator mat-tooltip-trigger mat-paginator-navigation-next mat-icon-button mat-button-base mat-button-disabled" aria-label="Next page" disabled="true">
                            <span class="mat-button-wrapper">
                              <svg viewBox="0 0 24 24" focusable="false" class="mat-paginator-icon">
                                <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                              </svg>
                            </span>
                            <span matripple="" class="mat-ripple mat-button-ripple mat-button-ripple-round"></span>
                            <span class="mat-button-focus-overlay"></span>
                          </button>
                        </div>
                        </div>
                      </div>
                    </div>-->
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab" tabindex="0">
                  <div class="row latest-order-div">
                    <div class="filter-container-custom col-12">
                      <div class="row">
                        <div class="col-5">
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img alt="image" class="ng-tns-c156-102" src="https://app.shiprocket.in/seller///assets/images/calender.svg"> Last 30 days </button>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">Today</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Yesterday</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Last 7 days</a>
                              </li>
                            </ul>
                          </div>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> Domestic </button>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">Domestc</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">International</a>
                              </li>
                            </ul>
                          </div>
                          <button>
                            <img alt="Filter" width="24" src="https://app.shiprocket.in/seller///assets/images/filter.svg" /> More Filter </button>
                        </div>
                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">
                              <button data-bs-toggle="tooltip" data-bs-placement="top" title="" class="icon_btn_1 me-16px" data-bs-original-title="Bulk Order Update" aria-label="Bulk Order Update">
                                <img data-src="//assets/images/icons/layers_layer_icon.svg" alt="layer icon" src="https://app.shiprocket.in/seller///assets/images/icons/layers_layer_icon.svg" />
                              </button>
                              <button data-bs-toggle="tooltip" data-bs-placement="top" title="" class="icon_btn_1 me-16px" data-bs-original-title="Download Report" aria-label="Download Report">
                                <img data-src="//assets/images/icons/download-disable.svg" alt="download" src="https://app.shiprocket.in/seller///assets/images/icons/download-disable.svg" />
                              </button>
                              <button class="mat-menu-trigger bulkAction_btn rounded-4px pe-5 position-relative ps-3 text-start d-flex align-items-center" disabled="" aria-haspopup="true"> Select Bulk Action <span class="ng-star-inserted">
                                  <img data-src="/assets/images/sarrowdown.svg" alt="arrow down" width="24" src="https://app.shiprocket.in/seller//assets/images/sarrowdown.svg" />
                                </span>
                              </button>
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>0 Orders for Last 30 days</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead">
                              <table class="table table-striped table-hover no-wrap">
                                <thead>
                                  <tr>
                                    <th style="text-align: center">
                                      <input type="checkbox" name="detail" id="detail"> Order Details
                                    </th>
                                    <th style="text-align: center">Customer details</th>
                                    <th style="text-align: center">Package Details</th>
                                    <th style="text-align: center"> Payment</th>
                                    <th style="text-align: center">Pickup Address</th>
                                    <th style="text-align: center">Status</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="group">
                                        <input type="checkbox" name="" id="">
                                      <div class="ml-2">
                                        <a class="text-blue" href="/seller/orders/details/288359946">Order003</a
                                        ><img
                                          apppathcorrection=""
                                          data-src="/assets/images/icons/copyToClipboard.svg"
                                          alt="Copy To Clipboard"
                                          appsrpopover=""
                                          class="click-to-copy"
                                          data-bs-original-title=""
                                          title=""
                                          src="https://app.shiprocket.in/seller//assets/images/icons/copyToClipboard.svg"
                                        />
                                      </div>
                                      </div>
                                      
                                    </td>
                                    <td>
                                      Jack Johnson <br> jack@xyz.com <br> 9876675765
                                    </td>
                                    <td>
                                      ₹ 7500.00 <br> <span  class="SFProRegular payment mt-9px prepaid"> prepaid </span>
                                    </td>
                                    <td>
                                      <div class="mb-2 ng-star-inserted">
                                        <span
                                          class="mb-2 cursor-pointer dashed-1"
                                          data-bs-original-title=""
                                          title=""
                                        
                                        >
                                          LILUAAH
                                        </span>
                                      </div>                                      
                                    </td>
                                    <td>
                                      Amazon Shipping 2Kg  <br> AWB# <br>321410242201 
                                      <img
                                      data-src="/assets/images/icons/copyToClipboard.svg"
                                      alt="Copy To Clipboard"
                                      appsrpopover=""
                                      class="click-to-copy ng-star-inserted"
                                      src="https://app.shiprocket.in/seller//assets/images/icons/copyToClipboard.svg"
                                    />
                                    </td>
                                    <td>
                                      <div  class="invoiced mb-2 d-inline-block error_status ng-star-inserted"> PICKUP EXCEPTION </div>
                                      <p  class="mb-1">Reason&nbsp;:&nbsp;</p>
                                      <p  class="width-140px">No Pickup / Shipment Not Ready</p>
                                    </td>
                                    <td>
                                      <div class="d-flex">
                                        <button
                                          class="btn-purple-bg rounded-6px py-2 px-3 me-2 w-130px ng-star-inserted"
                                        >
                                          Download Manifest</button
                                        ><br /><button
                                          mat-button=""
                                          class="mat-menu-trigger more-action-btn"
                                          aria-haspopup="true"
                                        >
                                          <img
                                            apppathcorrection=""
                                            data-src="//assets/images/more-action.svg"
                                            alt="More Action"
                                            src="https://app.shiprocket.in/seller///assets/images/more-action.svg"
                                          />
                                        </button>
                                      </div>
                                    </td>
                                    
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="group">
                                        <input type="checkbox" name="" id="">
                                      <div class="ml-2">
                                        <a class="text-blue" href="/seller/orders/details/288359946">Order003</a
                                        ><img
                                          apppathcorrection=""
                                          data-src="/assets/images/icons/copyToClipboard.svg"
                                          alt="Copy To Clipboard"
                                          appsrpopover=""
                                          class="click-to-copy"
                                          data-bs-original-title=""
                                          title=""
                                          src="https://app.shiprocket.in/seller//assets/images/icons/copyToClipboard.svg"
                                        />
                                      </div>
                                      </div>
                                      
                                    </td>
                                    <td>
                                      Jack Johnson <br> jack@xyz.com <br> 9876675765
                                    </td>
                                    <td>
                                      ₹ 7500.00 <br> <span  class="SFProRegular payment mt-9px prepaid"> prepaid </span>
                                    </td>
                                    <td>
                                      <div class="mb-2 ng-star-inserted">
                                        <span
                                          class="mb-2 cursor-pointer dashed-1"
                                          data-bs-original-title=""
                                          title=""
                                        >
                                          LILUAAH
                                        </span>
                                      </div>                                      
                                    </td>
                                    <td>
                                      Amazon Shipping 2Kg  <br> AWB# <br>321410242201 
                                      <img
                                      data-src="/assets/images/icons/copyToClipboard.svg"
                                      alt="Copy To Clipboard"
                                      appsrpopover=""
                                      class="click-to-copy ng-star-inserted"
                                      src="https://app.shiprocket.in/seller//assets/images/icons/copyToClipboard.svg"
                                    />
                                    </td>
                                    <td>
                                      <div  class="invoiced mb-2 d-inline-block error_status ng-star-inserted"> PICKUP EXCEPTION </div>
                                      <p  class="mb-1">Reason&nbsp;:&nbsp;</p>
                                      <p  class="width-140px">No Pickup / Shipment Not Ready</p>
                                    </td>
                                    <td>
                                      <div class="d-flex">
                                        <button
                                          class="btn-purple-bg rounded-6px py-2 px-3 me-2 w-130px ng-star-inserted"
                                        >
                                          Download Manifest</button
                                        ><br /><button
                                          mat-button=""
                                          class="mat-menu-trigger more-action-btn"
                                          aria-haspopup="true"
                                        >
                                          <img
                                            apppathcorrection=""
                                            data-src="//assets/images/more-action.svg"
                                            alt="More Action"
                                            src="https://app.shiprocket.in/seller///assets/images/more-action.svg"
                                          />
                                        </button>
                                      </div>
                                    </td>
                                    
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between text-sm-center mb-2 mb-md-0 py-md-4 w-md-75 mt-2 pagination-container">
                      <span>Items per page:</span>
                      <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> 15 </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">15</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">30</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">60</a>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">10</a>
                          </li>
                        </ul>
                        <div class="right-side">
                          <span>0 of 0</span>
                        <div>
                          <button type="button" class="mat-focus-indicator mat-tooltip-trigger mat-paginator-navigation-previous mat-icon-button mat-button-base mat-button-disabled" aria-label="Previous page" disabled="true">
                            <span class="mat-button-wrapper">
                              <svg viewBox="0 0 24 24" focusable="false" class="mat-paginator-icon">
                                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
                              </svg>
                            </span>
                            <span class="mat-ripple mat-button-ripple mat-button-ripple-round"></span>
                            <span class="mat-button-focus-overlay"></span>
                          </button>
                          <button type="button" class="mat-focus-indicator mat-tooltip-trigger mat-paginator-navigation-next mat-icon-button mat-button-base mat-button-disabled" aria-label="Next page" disabled="true">
                            <span class="mat-button-wrapper">
                              <svg viewBox="0 0 24 24" focusable="false" class="mat-paginator-icon">
                                <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                              </svg>
                            </span>
                            <span matripple="" class="mat-ripple mat-button-ripple mat-button-ripple-round"></span>
                            <span class="mat-button-focus-overlay"></span>
                          </button>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-Delivered" role="tabpanel" aria-labelledby="pills-Delivered-tab" tabindex="0">
                  <div class="row latest-order-div">
                    <div class="filter-container-custom col-12">
                      <div class="row">
                        <div class="col-5">
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img alt="image" class="ng-tns-c156-102" src="https://app.shiprocket.in/seller///assets/images/calender.svg"> Last 30 days </button>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">Today</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Yesterday</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Last 7 days</a>
                              </li>
                            </ul>
                          </div>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> Domestic </button>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">Domestc</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">International</a>
                              </li>
                            </ul>
                          </div>
                          <button>
                            <img alt="Filter" width="24" src="https://app.shiprocket.in/seller///assets/images/filter.svg" /> More Filter </button>
                        </div>
                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">
                              <button data-bs-toggle="tooltip" data-bs-placement="top" title="" class="icon_btn_1 me-16px" data-bs-original-title="Bulk Order Update" aria-label="Bulk Order Update">
                                <img data-src="//assets/images/icons/layers_layer_icon.svg" alt="layer icon" src="https://app.shiprocket.in/seller///assets/images/icons/layers_layer_icon.svg" />
                              </button>
                              <button data-bs-toggle="tooltip" data-bs-placement="top" title="" class="icon_btn_1 me-16px" data-bs-original-title="Download Report" aria-label="Download Report">
                                <img data-src="//assets/images/icons/download-disable.svg" alt="download" src="https://app.shiprocket.in/seller///assets/images/icons/download-disable.svg" />
                              </button>
                              <button class="mat-menu-trigger bulkAction_btn rounded-4px pe-5 position-relative ps-3 text-start d-flex align-items-center" disabled="" aria-haspopup="true"> Select Bulk Action <span class="ng-star-inserted">
                                  <img data-src="/assets/images/sarrowdown.svg" alt="arrow down" width="24" src="https://app.shiprocket.in/seller//assets/images/sarrowdown.svg" />
                                </span>
                              </button>
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>0 Orders for Last 30 days</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead">
                              <table class="table table-striped table-hover no-wrap">
                                <thead>
                                  <tr>
                                    <th style="text-align: center">
                                      <input type="checkbox" name="detail" id="detail"> Pickup ID / Pickup Request Date
                                    </th>
                                    <th style="text-align: center">Shipment Count</th>
                                    <th style="text-align: center">Pickup Address</th>
                                    <th style="text-align: center"> Parent Courier</th>
                                    <th style="text-align: center">	Pickup Status</th>
                                    <th style="text-align: center">	Manifest Details</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="group">
                                        <input type="checkbox" name="" id="">
                                      <div class="ml-2">
                                        <a class="text-blue" href="/seller/orders/details/288359946">SRPID-8317830</a
                                        >
                                        <br>
                                        15 Dec 2022
                                      </div>
                                      </div>
                                      
                                    </td>
                                    <td>
                                      2
                                    </td>
                                    <td >
                                      <span class="border-dashed">LILUAAH</span>
                                    </td>
                                    <td>
                                      Amazon                                  
                                    </td>
                                    <td>
                                      <div  class="invoiced mb-2 d-inline-block error_status ng-star-inserted"> PICKUP EXCEPTION </div>
                                      <p  class="mb-1">Reason&nbsp;:&nbsp;</p>
                                      <p  class="width-140px">No Pickup / Shipment Not Ready</p>
                                    </td>
                                    <td>
                                      NOT MANIFESTED YET
                                    </td>
                                    <td>
                                      <div class="d-flex">
                                        <button
                                          class="btn-purple-bg rounded-6px py-2 px-3 me-2 w-130px ng-star-inserted"
                                        >
                                          Download Manifest</button
                                        ><br /><button
                                          mat-button=""
                                          class="mat-menu-trigger more-action-btn"
                                          aria-haspopup="true"
                                        >
                                          <img
                                            apppathcorrection=""
                                            data-src="//assets/images/more-action.svg"
                                            alt="More Action"
                                            src="https://app.shiprocket.in/seller///assets/images/more-action.svg"
                                          />
                                        </button>
                                      </div>
                                    </td>
                                    
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="group">
                                        <input type="checkbox" name="" id="">
                                      <div class="ml-2">
                                        <a class="text-blue" href="/seller/orders/details/288359946">SRPID-8317830</a
                                        >
                                        <br>
                                        15 Dec 2022
                                      </div>
                                      </div>
                                      
                                    </td>
                                    <td>
                                      2
                                    </td>
                                    <td >
                                      <span class="border-dashed">LILUAAH</span>
                                    </td>
                                    <td>
                                      Amazon                                  
                                    </td>
                                    <td>
                                      <div  class="invoiced mb-2 d-inline-block error_status ng-star-inserted"> PICKUP EXCEPTION </div>
                                      <p  class="mb-1">Reason&nbsp;:&nbsp;</p>
                                      <p  class="width-140px">No Pickup / Shipment Not Ready</p>
                                    </td>
                                    <td>
                                      NOT MANIFESTED YET
                                    </td>
                                    <td>
                                      <div class="d-flex">
                                        <button
                                          class="btn-purple-bg rounded-6px py-2 px-3 me-2 w-130px ng-star-inserted"
                                        >
                                          Download Manifest</button
                                        ><br /><button
                                          mat-button=""
                                          class="mat-menu-trigger more-action-btn"
                                          aria-haspopup="true"
                                        >
                                          <img
                                            apppathcorrection=""
                                            data-src="//assets/images/more-action.svg"
                                            alt="More Action"
                                            src="https://app.shiprocket.in/seller///assets/images/more-action.svg"
                                          />
                                        </button>
                                      </div>
                                    </td>
                                    
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between text-sm-center mb-2 mb-md-0 py-md-4 w-md-75 mt-2 pagination-container">
                      <span>Items per page:</span>
                      <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> 15 </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">15</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">30</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">60</a>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">10</a>
                          </li>
                        </ul>
                        <div class="right-side">
                          <span>0 of 0</span>
                        <div>
                          <button type="button" class="mat-focus-indicator mat-tooltip-trigger mat-paginator-navigation-previous mat-icon-button mat-button-base mat-button-disabled" aria-label="Previous page" disabled="true">
                            <span class="mat-button-wrapper">
                              <svg viewBox="0 0 24 24" focusable="false" class="mat-paginator-icon">
                                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
                              </svg>
                            </span>
                            <span class="mat-ripple mat-button-ripple mat-button-ripple-round"></span>
                            <span class="mat-button-focus-overlay"></span>
                          </button>
                          <button type="button" class="mat-focus-indicator mat-tooltip-trigger mat-paginator-navigation-next mat-icon-button mat-button-base mat-button-disabled" aria-label="Next page" disabled="true">
                            <span class="mat-button-wrapper">
                              <svg viewBox="0 0 24 24" focusable="false" class="mat-paginator-icon">
                                <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                              </svg>
                            </span>
                            <span matripple="" class="mat-ripple mat-button-ripple mat-button-ripple-round"></span>
                            <span class="mat-button-focus-overlay"></span>
                          </button>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-Undelivered" role="tabpanel" aria-labelledby="pills-Undelivered-tab" tabindex="0">
                  <div class="row latest-order-div">
                    <div class="filter-container-custom col-12">
                      <div class="row">
                        <div class="col-5">
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img alt="image" class="ng-tns-c156-102" src="https://app.shiprocket.in/seller///assets/images/calender.svg"> Last 30 days </button>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">Today</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Yesterday</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Last 7 days</a>
                              </li>
                            </ul>
                          </div>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> Domestic </button>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">Domestc</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">International</a>
                              </li>
                            </ul>
                          </div>
                          <button>
                            <img alt="Filter" width="24" src="https://app.shiprocket.in/seller///assets/images/filter.svg" /> More Filter </button>
                        </div>
                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">
                              <button data-bs-toggle="tooltip" data-bs-placement="top" title="" class="icon_btn_1 me-16px" data-bs-original-title="Bulk Order Update" aria-label="Bulk Order Update">
                                <img data-src="//assets/images/icons/layers_layer_icon.svg" alt="layer icon" src="https://app.shiprocket.in/seller///assets/images/icons/layers_layer_icon.svg" />
                              </button>
                              <button data-bs-toggle="tooltip" data-bs-placement="top" title="" class="icon_btn_1 me-16px" data-bs-original-title="Download Report" aria-label="Download Report">
                                <img data-src="//assets/images/icons/download-disable.svg" alt="download" src="https://app.shiprocket.in/seller///assets/images/icons/download-disable.svg" />
                              </button>
                              <button class="mat-menu-trigger bulkAction_btn rounded-4px pe-5 position-relative ps-3 text-start d-flex align-items-center" disabled="" aria-haspopup="true"> Select Bulk Action <span class="ng-star-inserted">
                                  <img data-src="/assets/images/sarrowdown.svg" alt="arrow down" width="24" src="https://app.shiprocket.in/seller//assets/images/sarrowdown.svg" />
                                </span>
                              </button>
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>0 Orders for Last 30 days</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead">
                              <table class="table table-striped table-hover no-wrap">
                                <thead>
                                  <tr>
                                    <th style="text-align: center">
                                      <input type="checkbox" name="detail" id="detail"> Order Details
                                    </th>
                                    <th style="text-align: center">Customer details</th>
                                    <th style="text-align: center">Package Details</th>
                                    <th style="text-align: center"> Payment</th>
                                    <th style="text-align: center">Pickup Address</th>
                                    <th style="text-align: center">Status</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center" colspan="7">
                                      <div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found">
                                        <div class="mb-20px">
                                          <img width="210" src="/assets/images/3.svg" alt="No Orders Found" />
                                        </div>
                                        <div class="mb-27px display-4 heading">No Orders Found</div>
                                        <div class="cta-section"></div>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between text-sm-center mb-2 mb-md-0 py-md-4 w-md-75 mt-2 pagination-container">
                      <span>Items per page:</span>
                      <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> 15 </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">15</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">30</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">60</a>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">10</a>
                          </li>
                        </ul>
                        <div class="right-side">
                          <span>0 of 0</span>
                        <div>
                          <button type="button" class="mat-focus-indicator mat-tooltip-trigger mat-paginator-navigation-previous mat-icon-button mat-button-base mat-button-disabled" aria-label="Previous page" disabled="true">
                            <span class="mat-button-wrapper">
                              <svg viewBox="0 0 24 24" focusable="false" class="mat-paginator-icon">
                                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
                              </svg>
                            </span>
                            <span class="mat-ripple mat-button-ripple mat-button-ripple-round"></span>
                            <span class="mat-button-focus-overlay"></span>
                          </button>
                          <button type="button" class="mat-focus-indicator mat-tooltip-trigger mat-paginator-navigation-next mat-icon-button mat-button-base mat-button-disabled" aria-label="Next page" disabled="true">
                            <span class="mat-button-wrapper">
                              <svg viewBox="0 0 24 24" focusable="false" class="mat-paginator-icon">
                                <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                              </svg>
                            </span>
                            <span matripple="" class="mat-ripple mat-button-ripple mat-button-ripple-round"></span>
                            <span class="mat-button-focus-overlay"></span>
                          </button>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-RTOIntransit" role="tabpanel" aria-labelledby="pills-RTOIntransit-tab" tabindex="0">
                  <div class="row latest-order-div">
                    <div class="filter-container-custom col-12">
                      <div class="row">
                        <div class="col-5">
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img alt="image" class="ng-tns-c156-102" src="https://app.shiprocket.in/seller///assets/images/calender.svg"> Last 30 days </button>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">Today</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Yesterday</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Last 7 days</a>
                              </li>
                            </ul>
                          </div>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> Domestic </button>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">Domestc</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">International</a>
                              </li>
                            </ul>
                          </div>
                          <button>
                            <img alt="Filter" width="24" src="https://app.shiprocket.in/seller///assets/images/filter.svg" /> More Filter </button>
                        </div>
                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">
                              <button data-bs-toggle="tooltip" data-bs-placement="top" title="" class="icon_btn_1 me-16px" data-bs-original-title="Bulk Order Update" aria-label="Bulk Order Update">
                                <img data-src="//assets/images/icons/layers_layer_icon.svg" alt="layer icon" src="https://app.shiprocket.in/seller///assets/images/icons/layers_layer_icon.svg" />
                              </button>
                              <button data-bs-toggle="tooltip" data-bs-placement="top" title="" class="icon_btn_1 me-16px" data-bs-original-title="Download Report" aria-label="Download Report">
                                <img data-src="//assets/images/icons/download-disable.svg" alt="download" src="https://app.shiprocket.in/seller///assets/images/icons/download-disable.svg" />
                              </button>
                              <button class="mat-menu-trigger bulkAction_btn rounded-4px pe-5 position-relative ps-3 text-start d-flex align-items-center" disabled="" aria-haspopup="true"> Select Bulk Action <span class="ng-star-inserted">
                                  <img data-src="/assets/images/sarrowdown.svg" alt="arrow down" width="24" src="https://app.shiprocket.in/seller//assets/images/sarrowdown.svg" />
                                </span>
                              </button>
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>0 Orders for Last 30 days</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead">
                              <table class="table table-striped table-hover no-wrap">
                                <thead>
                                  <tr>
                                    <th style="text-align: center">
                                      <input type="checkbox" name="detail" id="detail"> Order Details
                                    </th>
                                    <th style="text-align: center">Customer details</th>
                                    <th style="text-align: center">Package Details</th>
                                    <th style="text-align: center"> Payment</th>
                                    <th style="text-align: center">Pickup Address</th>
                                    <th style="text-align: center">Status</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center" colspan="7">
                                      <div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found">
                                        <div class="mb-20px">
                                          <img width="210" src="/assets/images/3.svg" alt="No Orders Found" />
                                        </div>
                                        <div class="mb-27px display-4 heading">No Orders Found</div>
                                        <div class="cta-section"></div>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between text-sm-center mb-2 mb-md-0 py-md-4 w-md-75 mt-2 pagination-container">
                      <span>Items per page:</span>
                      <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> 15 </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">15</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">30</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">60</a>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">10</a>
                          </li>
                        </ul>
                        <div class="right-side">
                          <span>0 of 0</span>
                        <div>
                          <button type="button" class="mat-focus-indicator mat-tooltip-trigger mat-paginator-navigation-previous mat-icon-button mat-button-base mat-button-disabled" aria-label="Previous page" disabled="true">
                            <span class="mat-button-wrapper">
                              <svg viewBox="0 0 24 24" focusable="false" class="mat-paginator-icon">
                                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
                              </svg>
                            </span>
                            <span class="mat-ripple mat-button-ripple mat-button-ripple-round"></span>
                            <span class="mat-button-focus-overlay"></span>
                          </button>
                          <button type="button" class="mat-focus-indicator mat-tooltip-trigger mat-paginator-navigation-next mat-icon-button mat-button-base mat-button-disabled" aria-label="Next page" disabled="true">
                            <span class="mat-button-wrapper">
                              <svg viewBox="0 0 24 24" focusable="false" class="mat-paginator-icon">
                                <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                              </svg>
                            </span>
                            <span matripple="" class="mat-ripple mat-button-ripple mat-button-ripple-round"></span>
                            <span class="mat-button-focus-overlay"></span>
                          </button>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-RTODelivered" role="tabpanel" aria-labelledby="pills-RTODelivered-tab" tabindex="0">
                  <div class="row latest-order-div">
                    <div class="filter-container-custom col-12">
                      <div class="row">
                        <div class="col-5">
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img alt="image" class="ng-tns-c156-102" src="https://app.shiprocket.in/seller///assets/images/calender.svg"> Last 30 days </button>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">Today</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Yesterday</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Last 7 days</a>
                              </li>
                            </ul>
                          </div>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> Domestic </button>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">Domestc</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">International</a>
                              </li>
                            </ul>
                          </div>
                          <button>
                            <img alt="Filter" width="24" src="https://app.shiprocket.in/seller///assets/images/filter.svg" /> More Filter </button>
                        </div>
                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">
                              <button data-bs-toggle="tooltip" data-bs-placement="top" title="" class="icon_btn_1 me-16px" data-bs-original-title="Bulk Order Update" aria-label="Bulk Order Update">
                                <img data-src="//assets/images/icons/layers_layer_icon.svg" alt="layer icon" src="https://app.shiprocket.in/seller///assets/images/icons/layers_layer_icon.svg" />
                              </button>
                              <button data-bs-toggle="tooltip" data-bs-placement="top" title="" class="icon_btn_1 me-16px" data-bs-original-title="Download Report" aria-label="Download Report">
                                <img data-src="//assets/images/icons/download-disable.svg" alt="download" src="https://app.shiprocket.in/seller///assets/images/icons/download-disable.svg" />
                              </button>
                              <button class="mat-menu-trigger bulkAction_btn rounded-4px pe-5 position-relative ps-3 text-start d-flex align-items-center" disabled="" aria-haspopup="true"> Select Bulk Action <span class="ng-star-inserted">
                                  <img data-src="/assets/images/sarrowdown.svg" alt="arrow down" width="24" src="https://app.shiprocket.in/seller//assets/images/sarrowdown.svg" />
                                </span>
                              </button>
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>0 Orders for Last 30 days</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead">
                              <table class="table table-striped table-hover no-wrap">
                                <thead>
                                  <tr>
                                    <th style="text-align: center">
                                      <input type="checkbox" name="detail" id="detail"> Order Details
                                    </th>
                                    <th style="text-align: center">Customer details</th>
                                    <th style="text-align: center">Package Details</th>
                                    <th style="text-align: center"> Payment</th>
                                    <th style="text-align: center">Pickup Address</th>
                                    <th style="text-align: center">Status</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center" colspan="7">
                                      <div class="align-items-center d-flex flex-column justify-content-center zero-data-screen ng-star-inserted no-record-found">
                                        <div class="mb-20px">
                                          <img width="210" src="/assets/images/3.svg" alt="No Orders Found" />
                                        </div>
                                        <div class="mb-27px display-4 heading">No Orders Found</div>
                                        <div class="cta-section"></div>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between text-sm-center mb-2 mb-md-0 py-md-4 w-md-75 mt-2 pagination-container">
                      <span>Items per page:</span>
                      <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> 15 </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">15</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">30</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">60</a>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">10</a>
                          </li>
                        </ul>
                        <div class="right-side">
                          <span>0 of 0</span>
                        <div>
                          <button type="button" class="mat-focus-indicator mat-tooltip-trigger mat-paginator-navigation-previous mat-icon-button mat-button-base mat-button-disabled" aria-label="Previous page" disabled="true">
                            <span class="mat-button-wrapper">
                              <svg viewBox="0 0 24 24" focusable="false" class="mat-paginator-icon">
                                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
                              </svg>
                            </span>
                            <span class="mat-ripple mat-button-ripple mat-button-ripple-round"></span>
                            <span class="mat-button-focus-overlay"></span>
                          </button>
                          <button type="button" class="mat-focus-indicator mat-tooltip-trigger mat-paginator-navigation-next mat-icon-button mat-button-base mat-button-disabled" aria-label="Next page" disabled="true">
                            <span class="mat-button-wrapper">
                              <svg viewBox="0 0 24 24" focusable="false" class="mat-paginator-icon">
                                <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                              </svg>
                            </span>
                            <span matripple="" class="mat-ripple mat-button-ripple mat-button-ripple-round"></span>
                            <span class="mat-button-focus-overlay"></span>
                          </button>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                  <div class="row latest-order-div">
                    <div class="filter-container-custom col-12">
                      <div class="row">
                        <div class="col-7">
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img alt="image" class="ng-tns-c156-102" src="https://app.shiprocket.in/seller///assets/images/calender.svg"> Last 30 days </button>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">Today</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Yesterday</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Last 7 days</a>
                              </li>
                            </ul>
                          </div>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> Domestic </button>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">Domestc</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">International</a>
                              </li>
                            </ul>
                          </div>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Date Type </button>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">Date Type</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Yesterday</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Last 7 days</a>
                              </li>
                            </ul>
                          </div>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              All seleted </button>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#">All seleted</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Yesterday</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Last 7 days</a>
                              </li>
                            </ul>
                          </div>
                          <button>
                            <img alt="Filter" width="24" src="https://app.shiprocket.in/seller///assets/images/filter.svg" /> More Filter </button>
                        </div>
                        <div class="col-3">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">
                              
                              <button data-bs-toggle="tooltip" data-bs-placement="top" title="" class="icon_btn_1 me-16px" data-bs-original-title="Download Report" aria-label="Download Report">
                                <img data-src="//assets/images/icons/download-disable.svg" alt="download" src="https://app.shiprocket.in/seller///assets/images/icons/download-disable.svg" />
                              </button>
                             
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>0 Orders for Last 30 days</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead">
                              <table class="table table-striped table-hover no-wrap">
                                <thead>
                                  <tr>
                                    <th style="text-align: center">
                                      <input type="checkbox" name="detail" id="detail"> Order Details
                                    </th>
                                    <th style="text-align: center">Customer details</th>
                                    <th style="text-align: center">Package Details</th>
                                    <th style="text-align: center"> Payment</th>
                                    <th style="text-align: center">Pickup Address</th>
                                    <th style="text-align: center">Status</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="group">
                                      
                                      <div>
                                        <a class="text-blue" href="/seller/orders/details/288359946">Order003</a
                                        ><img
                                          apppathcorrection=""
                                          data-src="/assets/images/icons/copyToClipboard.svg"
                                          alt="Copy To Clipboard"
                                          appsrpopover=""
                                          class="click-to-copy"
                                          data-bs-original-title=""
                                          title=""
                                          src="https://app.shiprocket.in/seller//assets/images/icons/copyToClipboard.svg"
                                        />
                                        <br>
                                        15 Dec 2022 <span class="custom-hr"></span> 03:30 PM <br>
                                        <div class="mb-2">
                                          <img
                                            alt="channel"
                                            class="me-2"
                                            style="max-width: 30px; max-height: 30px"
                                            data-src="img"
                                            src="https://app.shiprocket.in/seller//assets/images/orders/CS.png"
                                          /><span class="d-inline-block align-middle">CUSTOM</span>
                                        </div>
                                        <br>
                                        <div class="d-inline-block pb-2">
                                          <span
                                            data-class="tooltip-type-1"
                                            class="border-bottom-dashed-1 cursor-pointer text-blue"
                                            data-bs-original-title=""
                                            title=""
                                            >Package Details</span
                                          >
                                        </div>
                                        
                                        
                                      </div>
                                      
                                      </div>
                                      
                                    </td>
                                    <td>
                                      Jack Johnson <br> jack@xyz.com <br> 9876675765
                                    </td>
                                    <td>
                                      ₹ 7500.00 <br> <span  class="SFProRegular payment mt-9px prepaid"> prepaid </span>
                                    </td>
                                    <td>
                                      <div class="mb-2 ng-star-inserted">
                                        <span
                                          class="mb-2 cursor-pointer dashed-1"
                                          data-bs-original-title=""
                                          title=""
                                        
                                        >
                                          LILUAAH
                                        </span>
                                      </div>                                      
                                    </td>
                                    <td>
                                      Amazon Shipping 2Kg  <br> AWB# <br>321410242201 
                                      <img
                                      data-src="/assets/images/icons/copyToClipboard.svg"
                                      alt="Copy To Clipboard"
                                      appsrpopover=""
                                      class="click-to-copy ng-star-inserted"
                                      src="https://app.shiprocket.in/seller//assets/images/icons/copyToClipboard.svg"
                                    />
                                    </td>
                                    <td>
                                      <div  class="invoiced mb-2 d-inline-block error_status ng-star-inserted"> PICKUP EXCEPTION </div>
                                      <p  class="mb-1">Reason&nbsp;:&nbsp;</p>
                                      <p  class="width-140px">No Pickup / Shipment Not Ready</p>
                                    </td>
                                    <td>
                                      <div class="d-flex">
                                        <button
                                          class="btn-purple-bg rounded-6px py-2 px-3 me-2 w-130px ng-star-inserted"
                                        >
                                          Download Manifest</button
                                        ><br /><button
                                          mat-button=""
                                          class="mat-menu-trigger more-action-btn"
                                          aria-haspopup="true"
                                        >
                                          <img
                                            apppathcorrection=""
                                            data-src="//assets/images/more-action.svg"
                                            alt="More Action"
                                            src="https://app.shiprocket.in/seller///assets/images/more-action.svg"
                                          />
                                        </button>
                                      </div>
                                    </td>
                                    
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="group">
                                        <input type="checkbox" name="" id="">
                                      <div class="ml-2">
                                        <a class="text-blue" href="/seller/orders/details/288359946">Order003</a
                                        ><img
                                          apppathcorrection=""
                                          data-src="/assets/images/icons/copyToClipboard.svg"
                                          alt="Copy To Clipboard"
                                          appsrpopover=""
                                          class="click-to-copy"
                                          data-bs-original-title=""
                                          title=""
                                          src="https://app.shiprocket.in/seller//assets/images/icons/copyToClipboard.svg"
                                        />
                                      </div>
                                      </div>
                                      
                                    </td>
                                    <td>
                                      Jack Johnson <br> jack@xyz.com <br> 9876675765
                                    </td>
                                    <td>
                                      ₹ 7500.00 <br> <span  class="SFProRegular payment mt-9px prepaid"> prepaid </span>
                                    </td>
                                    <td>
                                      <div class="mb-2 ng-star-inserted">
                                        <span
                                          class="mb-2 cursor-pointer dashed-1"
                                          data-bs-original-title=""
                                          title=""
                                        >
                                          LILUAAH
                                        </span>
                                      </div>                                      
                                    </td>
                                    <td>
                                      Amazon Shipping 2Kg  <br> AWB# <br>321410242201 
                                      <img
                                      data-src="/assets/images/icons/copyToClipboard.svg"
                                      alt="Copy To Clipboard"
                                      appsrpopover=""
                                      class="click-to-copy ng-star-inserted"
                                      src="https://app.shiprocket.in/seller//assets/images/icons/copyToClipboard.svg"
                                    />
                                    </td>
                                    <td>
                                      <div  class="invoiced mb-2 d-inline-block error_status ng-star-inserted"> PICKUP EXCEPTION </div>
                                      <p  class="mb-1">Reason&nbsp;:&nbsp;</p>
                                      <p  class="width-140px">No Pickup / Shipment Not Ready</p>
                                    </td>
                                    <td>
                                      <div class="d-flex">
                                        <button
                                          class="btn-purple-bg rounded-6px py-2 px-3 me-2 w-130px ng-star-inserted"
                                        >
                                          Download Manifest</button
                                        ><br /><button
                                          mat-button=""
                                          class="mat-menu-trigger more-action-btn"
                                          aria-haspopup="true"
                                        >
                                          <img
                                            apppathcorrection=""
                                            data-src="//assets/images/more-action.svg"
                                            alt="More Action"
                                            src="https://app.shiprocket.in/seller///assets/images/more-action.svg"
                                          />
                                        </button>
                                      </div>
                                    </td>
                                    
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between text-sm-center mb-2 mb-md-0 py-md-4 w-md-75 mt-2 pagination-container">
                      <span>Items per page:</span>
                      <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> 15 </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">15</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">30</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">60</a>
                          </li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">10</a>
                          </li>
                        </ul>
                        <div class="right-side">
                          <span>0 of 0</span>
                        <div>
                          <button type="button" class="mat-focus-indicator mat-tooltip-trigger mat-paginator-navigation-previous mat-icon-button mat-button-base mat-button-disabled" aria-label="Previous page" disabled="true">
                            <span class="mat-button-wrapper">
                              <svg viewBox="0 0 24 24" focusable="false" class="mat-paginator-icon">
                                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
                              </svg>
                            </span>
                            <span class="mat-ripple mat-button-ripple mat-button-ripple-round"></span>
                            <span class="mat-button-focus-overlay"></span>
                          </button>
                          <button type="button" class="mat-focus-indicator mat-tooltip-trigger mat-paginator-navigation-next mat-icon-button mat-button-base mat-button-disabled" aria-label="Next page" disabled="true">
                            <span class="mat-button-wrapper">
                              <svg viewBox="0 0 24 24" focusable="false" class="mat-paginator-icon">
                                <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                              </svg>
                            </span>
                            <span matripple="" class="mat-ripple mat-button-ripple mat-button-ripple-round"></span>
                            <span class="mat-button-focus-overlay"></span>
                          </button>
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