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
                            <input id="myInputTextField" type="text" required="" autocomplete="new-text" class="form-control fs-12px plcholdercolor padd_left35 padd_right35 ng-pristine ng-invalid ng-touched" placeholder="Search for AWB, Order ID, Buyer Mobile Number, Email" />
                          </div>
                        </div>
                        <ul class="p-0 pickup-address-list ng-star-inserted"></ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-3 mt-md-0 text-md-end text-start sync-orders-container">
                 <a href="{{ route('user.orders.create') }}"> <button class="SFProSemiBold addOrder_btn cursor-pointer"> + &nbsp;Add Order</button></a>
                  <!--<a class="ms-2 onhoverdisplay text-decoration-none onhover text-dark fs-12px sfpro-medium cursor-pointer sync-orders">
                    <img data-src="//assets/images/sync.svg" alt="" src="https://app.shiprocket.in/seller///assets/images/sync.svg" /> Sync Orders </a>-->
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-10 col-lg-10">
                  <ul class="nav nav-pills border-0 p-0" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 closedEl btn-primary active" id="pills-tab" data-bs-toggle="pill" data-bs-target="#process" type="button" role="tab" aria-controls="pills" aria-selected="true"> In Process </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 closedEl btn-primary" id="pills-tab" data-bs-toggle="pill" data-bs-target="#created" type="button" role="tab" aria-controls="pills" aria-selected="false"> Created </button>
                    </li>

                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 closedEl btn-primary" id="pills-tab" data-bs-toggle="pill" data-bs-target="#intransit" type="button" role="tab" aria-controls="pills" aria-selected="false"> InTransit </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="btn nav-link mr-1 closedEl btn-primary" id="pills-tab" data-bs-toggle="pill" data-bs-target="#ofd" type="button" role="tab" aria-controls="pills" aria-selected="false"> ODF </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="btn nav-link mr-1 closedEl btn-primary" id="pills-tab" data-bs-toggle="pill" data-bs-target="#ndr" type="button" role="tab" aria-controls="pills" aria-selected="false"> NDR </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="btn nav-link mr-1 closedEl btn-primary" id="pills-tab" data-bs-toggle="pill" data-bs-target="#delivered" type="button" role="tab" aria-controls="pills" aria-selected="false"> Delivered </button>
                    </li>


                    <li class="nav-item" role="presentation">
                        <button class="btn nav-link mr-1 closedEl btn-primary" id="pills-tab" data-bs-toggle="pill" data-bs-target="#rto-intransit" type="button" role="tab" aria-controls="pills" aria-selected="false"> RTO Intransit </button>
                    </li>


                    <li class="nav-item" role="presentation">
                        <button class="btn nav-link mr-1 closedEl btn-primary" id="pills-tab" data-bs-toggle="pill" data-bs-target="#rto-delivered" type="button" role="tab" aria-controls="pills" aria-selected="false"> RTO Delivered </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="btn nav-link mr-1 closedEl btn-primary" id="pills-tab" data-bs-toggle="pill" data-bs-target="#error" type="button" role="tab" aria-controls="pills" aria-selected="false"> Error </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="btn nav-link mr-1 closedEl btn-primary" id="pills-tab" data-bs-toggle="pill" data-bs-target="#waiting" type="button" role="tab" aria-controls="pills" aria-selected="false"> Waiting Order </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="btn nav-link mr-1 closedEl btn-primary" id="pills-tab" data-bs-toggle="pill" data-bs-target="#cancel" type="button" role="tab" aria-controls="pills" aria-selected="false"> Delete </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="btn nav-link mr-1 closedEl btn-primary" id="pills-tab" data-bs-toggle="pill" data-bs-target="#shopify-waiting" type="button" role="tab" aria-controls="pills" aria-selected="false"> Shopify Waiting Order </button>
                    </li>

                 
                  </ul>
                </div>
                
              </div>

              
              <div class="tab-content border-0" id="pills-tabContent">


                <!--- Tab process start ---->
                <div class="tab-pane fade show active" id="process" role="tabpanel" aria-labelledby="pills-tab" tabindex="0">
                  <div class="row latest-order-div">
                    
                    <div class="filter-container-custom col-12">
                      <div class="row">
                        <div class="col-5">
                          
                        </div>
                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">
          
                              <button id="csv" data-bs-toggle="tooltip" data-bs-placement="top" title="CSV" class="icon_btn_1 me-16px exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-download"></i>
                              </button>

                              <button id="excel" data-bs-toggle="tooltip" data-bs-placement="top" title="Excel" class="icon_btn_1 me-16px exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                              </button>

                              <button id="pdf" data-bs-toggle="tooltip" data-bs-placement="top" title="PDF" class="icon_btn_1 me-16px exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-pdf-o" aria-hidden="true"></i> 
                              </button>

                              <button id="print" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" class="icon_btn_1 me-16px exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-print" aria-hidden="true" title="World Health Organization"></i> 
                              </button>
                              
        
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>
         

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead">
                              <table class="table table-striped table-hover no-wrap admin_process" id="admin_process">
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
                                    <th style="text-align: center">Last Remarks</th>
                                    <th style="text-align: center">User</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                  </div>
                </div>
                <!--- Tab process end ---->

                <!--- Tab created start ---->
                <div class="tab-pane" id="created" role="tabpanel" aria-labelledby="pills-tab" tabindex="0">
                  <div class="row latest-order-div">
                    
                    <div class="filter-container-custom col-12">
                      <div class="row">

                        <div class="col-5">
   
                        </div>

                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">

                              <button id="created-csv" data-bs-toggle="tooltip" data-bs-placement="top" title="CSV" class="icon_btn_1 me-16px created_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-download"></i>
                              </button>

                              <button id="created-excel" data-bs-toggle="tooltip" data-bs-placement="top" title="Excel" class="icon_btn_1 me-16px created_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                              </button>

                              <button id="created-pdf" data-bs-toggle="tooltip" data-bs-placement="top" title="PDF" class="icon_btn_1 me-16px created_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-pdf-o" aria-hidden="true"></i> 
                              </button>

                              <button id="created-print" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" class="icon_btn_1 me-16px created_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-print" aria-hidden="true" title="World Health Organization"></i> 
                              </button>
                              
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead1">
                              <table id="createdTable" class="table table-striped table-hover no-wrap admin_created">
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
                                    <th style="text-align: center">User</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                  </div>
                </div>
                <!--- Tab created end ---->

               <!--- Tab intransit start ---->
                <div class="tab-pane" id="intransit" role="tabpanel" aria-labelledby="pills-tab" tabindex="0">
                  <div class="row latest-order-div">
                    
                  <div class="filter-container-custom col-12">
                      <div class="row">

                        <div class="col-5">
   
                        </div>

                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">

                              <button id="intransit-csv" data-bs-toggle="tooltip" data-bs-placement="top" title="CSV" class="icon_btn_1 me-16px intransit_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-download"></i>
                              </button>

                              <button id="intransit-excel" data-bs-toggle="tooltip" data-bs-placement="top" title="Excel" class="icon_btn_1 me-16px intransit_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                              </button>

                              <button id="intransit-pdf" data-bs-toggle="tooltip" data-bs-placement="top" title="PDF" class="icon_btn_1 me-16px intransit_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-pdf-o" aria-hidden="true"></i> 
                              </button>

                              <button id="intransit-print" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" class="icon_btn_1 me-16px intransit_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-print" aria-hidden="true" title="World Health Organization"></i> 
                              </button>
                              
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead1">
                              <table class="table table-striped table-hover no-wrap admin_intransit" id="admin_intransit">
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
                                    <th style="text-align: center">Intransit Days Count</th>
                                    <th style="text-align: center">User</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                  </div>
                </div>
                <!--- Tab intransit end ---->

                <!--- Tab ofd start ---->
                <div class="tab-pane" id="ofd" role="tabpanel" aria-labelledby="pills-tab" tabindex="0">
                  <div class="row latest-order-div">
                    
                    <div class="filter-container-custom col-12">
                      <div class="row">

                        <div class="col-5">
   
                        </div>

                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">

                              <button id="ofd-csv" data-bs-toggle="tooltip" data-bs-placement="top" title="CSV" class="icon_btn_1 me-16px ofd_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-download"></i>
                              </button>

                              <button id="ofd-excel" data-bs-toggle="tooltip" data-bs-placement="top" title="Excel" class="icon_btn_1 me-16px ofd_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                              </button>

                              <button id="ofd-pdf" data-bs-toggle="tooltip" data-bs-placement="top" title="PDF" class="icon_btn_1 me-16px ofd_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-pdf-o" aria-hidden="true"></i> 
                              </button>

                              <button id="ofd-print" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" class="icon_btn_1 me-16px ofd_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-print" aria-hidden="true" title="World Health Organization"></i> 
                              </button>
                              
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead1">
                              <table class="table table-striped table-hover no-wrap admin_ofd" id="admin_ofd">
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
                                    <th style="text-align: center">Intransit Days Count</th>
                                    <th style="text-align: center">OFD Count</th>
                                    <th style="text-align: center">User</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                  </div>
                </div>
                <!--- Tab ofd end ---->

                <!--- Tab ndr start ---->
                <div class="tab-pane" id="ndr" role="tabpanel" aria-labelledby="pills-tab" tabindex="0">
                  <div class="row latest-order-div">
                    
                    <div class="filter-container-custom col-12">
                      <div class="row">

                        <div class="col-5">
   
                        </div>

                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">

                              <button id="ndr-csv" data-bs-toggle="tooltip" data-bs-placement="top" title="CSV" class="icon_btn_1 me-16px ndr_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-download"></i>
                              </button>

                              <button id="ndr-excel" data-bs-toggle="tooltip" data-bs-placement="top" title="Excel" class="icon_btn_1 me-16px ndr_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                              </button>

                              <button id="ndr-pdf" data-bs-toggle="tooltip" data-bs-placement="top" title="PDF" class="icon_btn_1 me-16px ndr_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-pdf-o" aria-hidden="true"></i> 
                              </button>

                              <button id="ndr-print" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" class="icon_btn_1 me-16px ndr_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-print" aria-hidden="true" title="World Health Organization"></i> 
                              </button>
                              
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead1">
                              <table class="table table-striped table-hover no-wrap admin_ndr" id="admin_ndr">
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
                                    <th style="text-align: center">Last PD Comment</th>
                                    <th style="text-align: center">Last Customer Comment</th>
                                    <th style="text-align: center">Intransit Days Count</th>
                                    <th style="text-align: center">OFD Count</th>
                                    <th style="text-align: center">User</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                  </div>
                </div>
                <!--- Tab ndr end ---->

                <!--- Tab delivered start ---->
                <div class="tab-pane" id="delivered" role="tabpanel" aria-labelledby="pills-tab" tabindex="0">
                  <div class="row latest-order-div">
                    
                    <div class="filter-container-custom col-12">
                      <div class="row">

                        <div class="col-5">
   
                        </div>

                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">

                              <button id="delivered-csv" data-bs-toggle="tooltip" data-bs-placement="top" title="CSV" class="icon_btn_1 me-16px delivered_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-download"></i>
                              </button>

                              <button id="delivered-excel" data-bs-toggle="tooltip" data-bs-placement="top" title="Excel" class="icon_btn_1 me-16px delivered_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                              </button>

                              <button id="delivered-pdf" data-bs-toggle="tooltip" data-bs-placement="top" title="PDF" class="icon_btn_1 me-16px delivered_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-pdf-o" aria-hidden="true"></i> 
                              </button>

                              <button id="delivered-print" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" class="icon_btn_1 me-16px delivered_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-print" aria-hidden="true" title="World Health Organization"></i> 
                              </button>
                              
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead1">
                              <table class="table table-striped table-hover no-wrap admin_delivered" id="admin_delivered">
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
                                    <th style="text-align: center">COD Amount</th>
                                    <th style="text-align: center">User</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                  </div>
                </div>
                <!--- Tab delivered end ---->

                <!--- Tab rto-intransit start ---->
                <div class="tab-pane" id="rto-intransit" role="tabpanel" aria-labelledby="pills-tab" tabindex="0">
                  <div class="row latest-order-div">
                    
                    <div class="filter-container-custom col-12">
                      <div class="row">

                        <div class="col-5">
   
                        </div>

                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">

                              <button id="rto-intransit-csv" data-bs-toggle="tooltip" data-bs-placement="top" title="CSV" class="icon_btn_1 me-16px rto-intransit_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-download"></i>
                              </button>

                              <button id="rto-intransit-excel" data-bs-toggle="tooltip" data-bs-placement="top" title="Excel" class="icon_btn_1 me-16px rto-intransit_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                              </button>

                              <button id="rto-intransit-pdf" data-bs-toggle="tooltip" data-bs-placement="top" title="PDF" class="icon_btn_1 me-16px rto-intransit_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-pdf-o" aria-hidden="true"></i> 
                              </button>

                              <button id="rto-intransit-print" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" class="icon_btn_1 me-16px rto-intransit_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-print" aria-hidden="true" title="World Health Organization"></i> 
                              </button>
                              
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead1">
                              <table class="table table-striped table-hover no-wrap admin_rto-intransit" id="admin_rto-intransit">
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
                                    <th style="text-align: center">Last PD Comment</th>
                                    <th style="text-align: center">Intransit Days Count</th>
                                    <th style="text-align: center">User</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                  </div>
                </div>
                <!--- Tab rto-intransit end ---->

                <!--- Tab rto-delivered start ---->
                <div class="tab-pane" id="rto-delivered" role="tabpanel" aria-labelledby="pills-tab" tabindex="0">
                  <div class="row latest-order-div">
                    
                    <div class="filter-container-custom col-12">
                      <div class="row">

                        <div class="col-5">
   
                        </div>

                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">

                              <button id="rto-delivered-csv" data-bs-toggle="tooltip" data-bs-placement="top" title="CSV" class="icon_btn_1 me-16px rto-delivered_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-download"></i>
                              </button>

                              <button id="rto-delivered-excel" data-bs-toggle="tooltip" data-bs-placement="top" title="Excel" class="icon_btn_1 me-16px rto-delivered_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                              </button>

                              <button id="rto-delivered-pdf" data-bs-toggle="tooltip" data-bs-placement="top" title="PDF" class="icon_btn_1 me-16px rto-delivered_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-pdf-o" aria-hidden="true"></i> 
                              </button>

                              <button id="rto-delivered-print" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" class="icon_btn_1 me-16px rto-delivered_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-print" aria-hidden="true" title="World Health Organization"></i> 
                              </button>
                              
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead1">
                              <table class="table table-striped table-hover no-wrap admin_rto-delivered" id="admin_rto-delivered">
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
                                    <th style="text-align: center">User</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                  </div>
                </div>
                <!--- Tab rto-delivered end ---->

                <!--- Tab error start ---->
                <div class="tab-pane" id="error" role="tabpanel" aria-labelledby="pills-tab" tabindex="0">
                  <div class="row latest-order-div">
                    
                    <div class="filter-container-custom col-12">
                      <div class="row">

                        <div class="col-5">
   
                        </div>

                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">

                              <button id="error-csv" data-bs-toggle="tooltip" data-bs-placement="top" title="CSV" class="icon_btn_1 me-16px error_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-download"></i>
                              </button>

                              <button id="error-excel" data-bs-toggle="tooltip" data-bs-placement="top" title="Excel" class="icon_btn_1 me-16px error_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                              </button>

                              <button id="error-pdf" data-bs-toggle="tooltip" data-bs-placement="top" title="PDF" class="icon_btn_1 me-16px error_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-pdf-o" aria-hidden="true"></i> 
                              </button>

                              <button id="error-print" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" class="icon_btn_1 me-16px error_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-print" aria-hidden="true" title="World Health Organization"></i> 
                              </button>
                              
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead1">
                              <table class="table table-striped table-hover no-wrap admin_error" id="admin_error">
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
                                    <th style="text-align: center">Remarks</th>
                                    <th style="text-align: center">User</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                  </div>
                </div>
                <!--- Tab error end ---->

                <!--- Tab waiting start ---->
                <div class="tab-pane" id="waiting" role="tabpanel" aria-labelledby="pills-tab" tabindex="0">
                  <div class="row latest-order-div">
                    
                    <div class="filter-container-custom col-12">
                      <div class="row">

                        <div class="col-5">
   
                        </div>

                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">

                              <button id="waiting-csv" data-bs-toggle="tooltip" data-bs-placement="top" title="CSV" class="icon_btn_1 me-16px waiting_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-download"></i>
                              </button>

                              <button id="waiting-excel" data-bs-toggle="tooltip" data-bs-placement="top" title="Excel" class="icon_btn_1 me-16px waiting_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                              </button>

                              <button id="waiting-pdf" data-bs-toggle="tooltip" data-bs-placement="top" title="PDF" class="icon_btn_1 me-16px waiting_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-pdf-o" aria-hidden="true"></i> 
                              </button>

                              <button id="waiting-print" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" class="icon_btn_1 me-16px waiting_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-print" aria-hidden="true" title="World Health Organization"></i> 
                              </button>
                              
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead1">
                              <table class="table table-striped table-hover no-wrap admin_waiting" id="admin_waiting">
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
                                    <th style="text-align: center">Remarks</th>
                                    <th style="text-align: center">User</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                  </div>
                </div>
                <!--- Tab waiting end ---->
                
                <!--- Tab cancel start ---->
                <div class="tab-pane" id="cancel" role="tabpanel" aria-labelledby="pills-tab" tabindex="0">
                  <div class="row latest-order-div">
                    
                    <div class="filter-container-custom col-12">
                      <div class="row">

                        <div class="col-5">
   
                        </div>

                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">

                              <button id="cancel-csv" data-bs-toggle="tooltip" data-bs-placement="top" title="CSV" class="icon_btn_1 me-16px cancel_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-download"></i>
                              </button>

                              <button id="cancel-excel" data-bs-toggle="tooltip" data-bs-placement="top" title="Excel" class="icon_btn_1 me-16px cancel_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                              </button>

                              <button id="cancel-pdf" data-bs-toggle="tooltip" data-bs-placement="top" title="PDF" class="icon_btn_1 me-16px cancel_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-pdf-o" aria-hidden="true"></i> 
                              </button>

                              <button id="cancel-print" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" class="icon_btn_1 me-16px cancel_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-print" aria-hidden="true" title="World Health Organization"></i> 
                              </button>
                              
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead1">
                              <table class="table table-striped table-hover no-wrap admin_cancel" id="admin_cancel">
                                <thead>
                                  <tr>
                                    <th style="text-align: center">Order ID</th>
                                    <th style="text-align: center">Order Number</th>
                                    <th style="text-align: center">Airwaybill Number</th>
                                    <th style="text-align: center">Logistic Name</th>
                                    <th style="text-align: center">Customer Name</th>
                                    <th style="text-align: center">Customer Number</th>
                                    <th style="text-align: center">Order Type</th>
                                    <th style="text-align: center">Processing Date</th>
                                    <th style="text-align: center">Payment Status</th>
                                    <th style="text-align: center">User</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                  </div>
                </div>
                <!--- Tab cancel end ---->

                <!--- Tab shopify-waiting start ---->
                <div class="tab-pane" id="shopify-waiting" role="tabpanel" aria-labelledby="pills-tab" tabindex="0">
                  <div class="row latest-order-div">
                    
                    <div class="filter-container-custom col-12">
                      <div class="row">

                        <div class="col-5">
   
                        </div>

                        <div class="col-5">
                          <div class="group-position1  d-lg-block">
                            <div class="d-flex align-items-center ng-star-inserted">

                              <button id="shopify-waiting-csv" data-bs-toggle="tooltip" data-bs-placement="top" title="CSV" class="icon_btn_1 me-16px shopify-waiting_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-download"></i>
                              </button>

                              <button id="shopify-waiting-excel" data-bs-toggle="tooltip" data-bs-placement="top" title="Excel" class="icon_btn_1 me-16px shopify-waiting_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                              </button>

                              <button id="shopify-waiting-pdf" data-bs-toggle="tooltip" data-bs-placement="top" title="PDF" class="icon_btn_1 me-16px shopify-waiting_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-file-pdf-o" aria-hidden="true"></i> 
                              </button>

                              <button id="shopify-waiting-print" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" class="icon_btn_1 me-16px shopify-waiting_exports" data-bs-original-title="Download Report" aria-label="Download Report">
                              <i class="fa fa-print" aria-hidden="true" title="World Health Organization"></i> 
                              </button>
                              
                              <mat-menu class="ng-star-inserted"></mat-menu>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead1">
                              <table class="table table-striped table-hover no-wrap admin_shopify-waiting" id="admin_shopify-waiting">
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
                                    <th style="text-align: center">Shipping Charge</th>
                                    <th style="text-align: center">Remark</th>
                                    <th style="text-align: center">User</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                  </div>
                </div>
                <!--- Tab shopify-waiting end ---->


                
              </div>
              

            </div>
          </div>
        </div>
        <!-- main-body-panel end -->





        <!-- orderDetailModal start -->
        <div class="modal fade orderDetailModal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
          <div>
          <div class="modal-header">
            <strong>COD Remittance Detail 11</strong>
            <span>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </span>
          </div>
          <div class="modal-body">
            <div class="form-group">
            <div>
            <table id="order_detail_table" class="table table-bordered order_detail_table">
                <thead>
                    <tr>
                        <th>Airwaybill Number</th>
                        <th>COD Amount</th>
                        <th>Delivery Date</th>
                        <th>Paid Date</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
          </div>
        </div>


        <div class="modal-dialog">
          <div class="modal-content">
          <div>
          <div class="modal-header">
            <strong>COD Remittance Detail 12</strong>
            <span>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </span>
          </div>
          <div class="modal-body">
            <div class="form-group">
            <div>
            <table id="order_tracking_table" class="table table-bordered order_tracking_table">
                <thead>
                    <tr>
                        <th>Scan Date</th>
                        <th>Scan</th>
                        <th>Location</th>
                        <th>Remark</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
          </div>
        </div>

    </div>
    <!-- orderDetailModal end -->






@endsection



