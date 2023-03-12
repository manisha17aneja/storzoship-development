@extends('layouts.main')

@section('title')
NDR
@endsection

@section('class')
warehouse-page complaints-page rate-calculator-page recharge-page payment-recharge user-remittance-page reports-page statement_page ndr_pending_page
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
              <div class="btn-row-custom">
                <span class="type-header pull-left" style="font-size: 23px;font-weight: 600;">NDR</span>
                <div class="btn-group dropdown p0" uib-dropdown="dropdown">
                  <button data-bs-toggle="tooltip" data-bs-placement="top" title="" class="icon_btn_1 me-16px" data-bs-original-title="Download Report" aria-label="Download Report">
                    <img data-src="/assets/images/icons/download-disable.svg" alt="download" src="https://app.shiprocket.in/seller//assets/images/icons/download-disable.svg">
                  </button>
                </div>
                
              </div>
              <div class="row mt-3">
                <div class="col-md-10 col-lg-10">
                  <ul class="nav nav-pills border-0 p-0" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 closedEl btn-primary active" id="pills-closed-tab" data-bs-toggle="pill" data-bs-target="#pills-closed" type="button" role="tab" aria-controls="pills-closed" aria-selected="true"> Action Required </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 pending btn-primary" id="pills-pending-tab" data-bs-toggle="pill" data-bs-target="#pills-pending" type="button" role="tab" aria-controls="pills-pending" aria-selected="false" tabindex="-1">Action Requested</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 Delivered btn-primary" id="pills-Delivered-tab" data-bs-toggle="pill" data-bs-target="#pills-Delivered" type="button" role="tab" aria-controls="pills-Delivered" aria-selected="false" tabindex="-1">Delivered</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 Undelivered btn-primary" id="pills-Undelivered-tab" data-bs-toggle="pill" data-bs-target="#pills-Undelivered" type="button" role="tab" aria-controls="pills-Undelivered" aria-selected="false" tabindex="-1">RTO</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 RTOIntransit btn-primary" id="pills-RTOIntransit-tab" data-bs-toggle="pill" data-bs-target="#pills-RTOIntransit" type="button" role="tab" aria-controls="pills-RTOIntransit" aria-selected="false" tabindex="-1">Upload Bulk NDR:</button>
                    </li>
                   
                  </ul>
                </div>
                
              </div>
              <div class="tab-content border-0" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-closed" role="tabpanel" aria-labelledby="pills-closed-tab" tabindex="0">
                  <div class="row latest-order-div">
                    <div class="row ndr-count-panel">
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ndr-round-border" style="height: 100%">
                          <h5><strong>NDR Attempt</strong>&nbsp;<i> (Last 30 Days)</i></h5>
                          <div class="row mt text-center mb">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Total Count</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Attempt 1</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Attempt 2</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Attempt 3</strong>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ndr-round-border" style="height: 100%">
                          <h5 class="clearfix">
                            <strong>NDR Distribution</strong>&nbsp;<i> (Last 30 Days)</i
                            ><a
                              class="pull-right"
                              ng-click="redirectToNdrDashboard('Action Required')"
                              >View in Detail <i class="fa fa-arrow-right"></i
                            ></a>
                          </h5>
                          <div class="row mt text-center mb">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">Buyer Positive Response</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">Seller Positive Response</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Delivered</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">RTO Delivered</strong>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 ndr-mb">
                      <div class="ndr-filter-section">
                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mob-padding-right">
                                <label class="" style="width: 100%; position: relative">
                                  <input
                                    style="font-size: 11px; font-weight: 400; padding-left: 30px"
                                    ng-model="search_awb_no"
                                    ng-keyup="searchNdrData($event)"
                                    class="form-control round-border ng-pristine ng-untouched ng-valid ng-empty"
                                    type="text"
                                    placeholder="Search By AWB"
                                  />
                                  <button
                                    type="button"
                                    class="ndr-search-btn"
                                    ng-click="searchNdrDatabtn($event)"
                                  >
                                    <i class="fa fa-search"></i>
                                  </button>
                                </label>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mob-padding-left">
                                <label class="" style="width: 100%; position: relative">
                                  <input
                                    style="font-size: 11px; font-weight: 400; padding-left: 30px"
                                    ng-model="search_customer_info"
                                    ng-keyup="searchNdrData($event)"
                                    class="form-control round-border ng-pristine ng-untouched ng-valid ng-empty"
                                    type="text"
                                    placeholder="Search By Email/Phone Number"
                                  />
                                  <button
                                    type="button"
                                    class="ndr-search-btn"
                                    ng-click="searchNdrDatabtn($event)"
                                  >
                                    <i class="fa fa-search"></i>
                                  </button>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="ndr-round-border-mob mt-mob">
                              <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mt-xs-10">
                                  <strong
                                    class="text-right text-xs-left"
                                    style="display: block; margin-top: 9px"
                                    >Filter By:</strong
                                  >
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                  <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mt-xs-10">
                                      <div class="round-border form-control new-multifileter">
                                        <span>NDR Reason</span>
                                        <div
                                          class="orders-filter pull-right filter-dashboard ng-isolate-scope"
                                          apply-table-filter-val="true"
                                          filter-model="ndr_status"
                                          options-data="all_ndr_status"
                                          filter-key="ndr_status"
                                          order-function="filterByStatus()"
                                          filter-title=""
                                        >
                                          <span>
                                            <a
                                              tabindex="0"
                                              role="button"
                                              data-toggle="popover"
                                              data-trigger="focus"
                                              ng-click="showProductPopup($event);"
                                              ><i class="fa fa-filter"></i
                                            ></a>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mt-xs-10">
                                      <div class="round-border form-control new-multifileter">
                                        <span>All Attempts</span>
                                        <div
                                          class="orders-filter pull-right filter-dashboard ng-isolate-scope"
                                          apply-table-filter-val="true"
                                          filter-model="attempts"
                                          options-data="attemptsData"
                                          filter-key="attempts"
                                          order-function="filterByStatus()"
                                          filter-title=""
                                        >
                                          <span>
                                            <a
                                              tabindex="0"
                                              role="button"
                                              data-toggle="popover"
                                              data-trigger="focus"
                                              ng-click="showProductPopup($event);"
                                              ><i class="fa fa-filter"></i
                                            ></a>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mt-xs-10">
                                      <div class="ndr-select-box round-border">
                                        <select
                                          class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                          ng-options="Esclation.id as Esclation.value for Esclation in esclateData"
                                          ng-model="escalation_status"
                                          ng-change="singleFilter()"
                                        >
                                          <option value="" selected="selected" class="">
                                            All Escalation
                                          </option>
                                          <option label="Escalation" value="string:1">
                                            Escalation
                                          </option>
                                          <option label="Re-Escalation" value="string:2">
                                            Re-Escalation
                                          </option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                      <div class="ndr-select-box round-border">
                                        <select
                                          class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                          ng-options="agingItem.id as agingItem.value for agingItem in agingData"
                                          ng-model="aging"
                                          ng-change="singleFilter()"
                                        >
                                          <option value="" selected="selected" class="">
                                            All Aging
                                          </option>
                                          <option label="Today" value="string:0">Today</option>
                                          <option label="Yesterday" value="string:-1">
                                            Yesterday
                                          </option>
                                          <option label="2 days ago" value="string:-2">
                                            2 days ago
                                          </option>
                                        </select>
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
                    
                    <!-- table -->
                    <div class="panel-body bl">
                      <div>
                        <table
                          id="ordertable"
                          class="table table-bordered table-hover fixed-table statement-wrappers"
                          style="display: table"
                        >
                          <thead>
                            <tr>
                              <th class="item-9" style="width: 13%">
                                NDR Raised At
                              </th>
                              
                              <th>
                                NDR Reason
                              </th>
                              <th>
                                Order Details
                              </th>
                              <th>
                                Customer Details
                              </th>
                              <th>
                                Shipment Details
                              </th>
                              <th>
                                Delivery Address
                              </th>
                              <th>
                                Escalation Information
                              </th>
                              <th>
                                Last Action Taken By
                              </th>
                              <th>
                                Actions
                              </th>
                             
                            </tr>
                          </thead>
                          <tbody style="height: 417px">
                            <tr
                              ng-repeat="item in statement"
                              on-finish-render=""
                              eventname="statement"
                              class="br ng-scope"
                            >
                              <td colspan="11">
                                <div
                                    class="bg-white text-center custom_class"
                                    style="margin: 30px; border-radius: 20px; padding: 50px 0"
                                  >
                                    <img
                                      alt=""
                                      style="width: 200px"
                                      src="https://app.shiprocket.in/app/img/no_data/remittance_0.png"
                                    />
                                    <h3 class="text-md pt-xl text-info ng-binding">
                                      Your remittance is on its way
                                    </h3>
                                    <h5 class="pt-10 ng-binding">
                                      Hey J K, We release COD remittance 3 times in a week and on the 8th day from
                                      the date of delivery.
                                    </h5>
                                    <div class="pt-xl">
                                      <div ng-if="res.CTA.length == 1" class="ng-scope" style="">
                                        <div ng-if="res.CTA[0].cta_label == 'Learn More'" class="ng-scope">
                                          <a
                                            ng-href="https://support.shiprocket.in/support/solutions/articles/43000463560-how-soon-can-i-receive-my-cod-amount-in-my-bank-account-"
                                            target="_blank"
                                            role="button"
                                            class="btn btn-oval bg-info-dark ng-binding"
                                            style="padding: 10px 60px; margin-bottom: 15px; margin-right: 10px"
                                            href="https://support.shiprocket.in/support/solutions/articles/43000463560-how-soon-can-i-receive-my-cod-amount-in-my-bank-account-"
                                            >Learn More</a
                                          >
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    
                    
                    
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab" tabindex="0">
                  <div class="row latest-order-div">
                    <div class="row ndr-count-panel">
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ndr-round-border" style="height: 100%">
                          <h5><strong>NDR Attempt</strong>&nbsp;<i> (Last 30 Days)</i></h5>
                          <div class="row mt text-center mb">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Total Count</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Attempt 1</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Attempt 2</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Attempt 3</strong>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ndr-round-border" style="height: 100%">
                          <h5 class="clearfix">
                            <strong>NDR Distribution</strong>&nbsp;<i> (Last 30 Days)</i
                            ><a
                              class="pull-right"
                              ng-click="redirectToNdrDashboard('Action Required')"
                              >View in Detail <i class="fa fa-arrow-right"></i
                            ></a>
                          </h5>
                          <div class="row mt text-center mb">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">Buyer Positive Response</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">Seller Positive Response</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Delivered</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">RTO Delivered</strong>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 ndr-mb">
                      <div class="ndr-filter-section">
                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mob-padding-right">
                                <label class="" style="width: 100%; position: relative">
                                  <input
                                    style="font-size: 11px; font-weight: 400; padding-left: 30px"
                                    ng-model="search_awb_no"
                                    ng-keyup="searchNdrData($event)"
                                    class="form-control round-border ng-pristine ng-untouched ng-valid ng-empty"
                                    type="text"
                                    placeholder="Search By AWB"
                                  />
                                  <button
                                    type="button"
                                    class="ndr-search-btn"
                                    ng-click="searchNdrDatabtn($event)"
                                  >
                                    <i class="fa fa-search"></i>
                                  </button>
                                </label>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mob-padding-left">
                                <label class="" style="width: 100%; position: relative">
                                  <input
                                    style="font-size: 11px; font-weight: 400; padding-left: 30px"
                                    ng-model="search_customer_info"
                                    ng-keyup="searchNdrData($event)"
                                    class="form-control round-border ng-pristine ng-untouched ng-valid ng-empty"
                                    type="text"
                                    placeholder="Search By Email/Phone Number"
                                  />
                                  <button
                                    type="button"
                                    class="ndr-search-btn"
                                    ng-click="searchNdrDatabtn($event)"
                                  >
                                    <i class="fa fa-search"></i>
                                  </button>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="ndr-round-border-mob mt-mob">
                              <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mt-xs-10">
                                  <strong
                                    class="text-right text-xs-left"
                                    style="display: block; margin-top: 9px"
                                    >Filter By:</strong
                                  >
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                  <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mt-xs-10">
                                      <div class="round-border form-control new-multifileter">
                                        <span>NDR Reason</span>
                                        <div
                                          class="orders-filter pull-right filter-dashboard ng-isolate-scope"
                                          apply-table-filter-val="true"
                                          filter-model="ndr_status"
                                          options-data="all_ndr_status"
                                          filter-key="ndr_status"
                                          order-function="filterByStatus()"
                                          filter-title=""
                                        >
                                          <span>
                                            <a
                                              tabindex="0"
                                              role="button"
                                              data-toggle="popover"
                                              data-trigger="focus"
                                              ng-click="showProductPopup($event);"
                                              ><i class="fa fa-filter"></i
                                            ></a>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mt-xs-10">
                                      <div class="round-border form-control new-multifileter">
                                        <span>All Attempts</span>
                                        <div
                                          class="orders-filter pull-right filter-dashboard ng-isolate-scope"
                                          apply-table-filter-val="true"
                                          filter-model="attempts"
                                          options-data="attemptsData"
                                          filter-key="attempts"
                                          order-function="filterByStatus()"
                                          filter-title=""
                                        >
                                          <span>
                                            <a
                                              tabindex="0"
                                              role="button"
                                              data-toggle="popover"
                                              data-trigger="focus"
                                              ng-click="showProductPopup($event);"
                                              ><i class="fa fa-filter"></i
                                            ></a>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mt-xs-10">
                                      <div class="ndr-select-box round-border">
                                        <select
                                          class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                          ng-options="Esclation.id as Esclation.value for Esclation in esclateData"
                                          ng-model="escalation_status"
                                          ng-change="singleFilter()"
                                        >
                                          <option value="" selected="selected" class="">
                                            All Escalation
                                          </option>
                                          <option label="Escalation" value="string:1">
                                            Escalation
                                          </option>
                                          <option label="Re-Escalation" value="string:2">
                                            Re-Escalation
                                          </option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                      <div class="ndr-select-box round-border">
                                        <select
                                          class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                          ng-options="agingItem.id as agingItem.value for agingItem in agingData"
                                          ng-model="aging"
                                          ng-change="singleFilter()"
                                        >
                                          <option value="" selected="selected" class="">
                                            All Aging
                                          </option>
                                          <option label="Today" value="string:0">Today</option>
                                          <option label="Yesterday" value="string:-1">
                                            Yesterday
                                          </option>
                                          <option label="2 days ago" value="string:-2">
                                            2 days ago
                                          </option>
                                        </select>
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
                    
                    <!-- table -->
                    <div class="panel-body bl">
                      <div>
                        <table
                          id="ordertable"
                          class="table table-bordered table-hover fixed-table statement-wrappers"
                          style="display: table"
                        >
                          <thead>
                            <tr>
                              <th class="item-9" style="width: 13%">
                                NDR Raised At
                              </th>
                              
                              <th>
                                NDR Reason
                              </th>
                              <th>
                                Order Details
                              </th>
                              <th>
                                Customer Details
                              </th>
                              <th>
                                Shipment Details
                              </th>
                              <th>
                                Delivery Address
                              </th>
                              <th>
                                Escalation Information
                              </th>
                              <th>
                                Last Action Taken By
                              </th>
                              <th>
                                Actions
                              </th>
                             
                            </tr>
                          </thead>
                          <tbody style="height: 417px">
                            <tr
                              ng-repeat="item in statement"
                              on-finish-render=""
                              eventname="statement"
                              class="br ng-scope"
                            >
                              <td colspan="11">
                                <div
                                    class="bg-white text-center custom_class"
                                    style="margin: 30px; border-radius: 20px; padding: 50px 0"
                                  >
                                    <img
                                      alt=""
                                      style="width: 200px"
                                      src="https://app.shiprocket.in/app/img/no_data/remittance_0.png"
                                    />
                                    <h3 class="text-md pt-xl text-info ng-binding">
                                      Your remittance is on its way
                                    </h3>
                                    <h5 class="pt-10 ng-binding">
                                      Hey J K, We release COD remittance 3 times in a week and on the 8th day from
                                      the date of delivery.
                                    </h5>
                                    <div class="pt-xl">
                                      <div ng-if="res.CTA.length == 1" class="ng-scope" style="">
                                        <div ng-if="res.CTA[0].cta_label == 'Learn More'" class="ng-scope">
                                          <a
                                            ng-href="https://support.shiprocket.in/support/solutions/articles/43000463560-how-soon-can-i-receive-my-cod-amount-in-my-bank-account-"
                                            target="_blank"
                                            role="button"
                                            class="btn btn-oval bg-info-dark ng-binding"
                                            style="padding: 10px 60px; margin-bottom: 15px; margin-right: 10px"
                                            href="https://support.shiprocket.in/support/solutions/articles/43000463560-how-soon-can-i-receive-my-cod-amount-in-my-bank-account-"
                                            >Learn More</a
                                          >
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    
                    
                    
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-Delivered" role="tabpanel" aria-labelledby="pills-Delivered-tab" tabindex="0">
                  <div class="row latest-order-div">
                    <div class="row ndr-count-panel">
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ndr-round-border" style="height: 100%">
                          <h5><strong>NDR Attempt</strong>&nbsp;<i> (Last 30 Days)</i></h5>
                          <div class="row mt text-center mb">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Total Count</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Attempt 1</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Attempt 2</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Attempt 3</strong>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ndr-round-border" style="height: 100%">
                          <h5 class="clearfix">
                            <strong>NDR Distribution</strong>&nbsp;<i> (Last 30 Days)</i
                            ><a
                              class="pull-right"
                              ng-click="redirectToNdrDashboard('Action Required')"
                              >View in Detail <i class="fa fa-arrow-right"></i
                            ></a>
                          </h5>
                          <div class="row mt text-center mb">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">Buyer Positive Response</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">Seller Positive Response</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Delivered</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">RTO Delivered</strong>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 ndr-mb">
                      <div class="ndr-filter-section">
                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mob-padding-right">
                                <label class="" style="width: 100%; position: relative">
                                  <input
                                    style="font-size: 11px; font-weight: 400; padding-left: 30px"
                                    ng-model="search_awb_no"
                                    ng-keyup="searchNdrData($event)"
                                    class="form-control round-border ng-pristine ng-untouched ng-valid ng-empty"
                                    type="text"
                                    placeholder="Search By AWB"
                                  />
                                  <button
                                    type="button"
                                    class="ndr-search-btn"
                                    ng-click="searchNdrDatabtn($event)"
                                  >
                                    <i class="fa fa-search"></i>
                                  </button>
                                </label>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mob-padding-left">
                                <label class="" style="width: 100%; position: relative">
                                  <input
                                    style="font-size: 11px; font-weight: 400; padding-left: 30px"
                                    ng-model="search_customer_info"
                                    ng-keyup="searchNdrData($event)"
                                    class="form-control round-border ng-pristine ng-untouched ng-valid ng-empty"
                                    type="text"
                                    placeholder="Search By Email/Phone Number"
                                  />
                                  <button
                                    type="button"
                                    class="ndr-search-btn"
                                    ng-click="searchNdrDatabtn($event)"
                                  >
                                    <i class="fa fa-search"></i>
                                  </button>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="ndr-round-border-mob mt-mob">
                              <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mt-xs-10">
                                  <strong
                                    class="text-right text-xs-left"
                                    style="display: block; margin-top: 9px"
                                    >Filter By:</strong
                                  >
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                  <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mt-xs-10">
                                      <div class="round-border form-control new-multifileter">
                                        <span>NDR Reason</span>
                                        <div
                                          class="orders-filter pull-right filter-dashboard ng-isolate-scope"
                                          apply-table-filter-val="true"
                                          filter-model="ndr_status"
                                          options-data="all_ndr_status"
                                          filter-key="ndr_status"
                                          order-function="filterByStatus()"
                                          filter-title=""
                                        >
                                          <span>
                                            <a
                                              tabindex="0"
                                              role="button"
                                              data-toggle="popover"
                                              data-trigger="focus"
                                              ng-click="showProductPopup($event);"
                                              ><i class="fa fa-filter"></i
                                            ></a>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mt-xs-10">
                                      <div class="round-border form-control new-multifileter">
                                        <span>All Attempts</span>
                                        <div
                                          class="orders-filter pull-right filter-dashboard ng-isolate-scope"
                                          apply-table-filter-val="true"
                                          filter-model="attempts"
                                          options-data="attemptsData"
                                          filter-key="attempts"
                                          order-function="filterByStatus()"
                                          filter-title=""
                                        >
                                          <span>
                                            <a
                                              tabindex="0"
                                              role="button"
                                              data-toggle="popover"
                                              data-trigger="focus"
                                              ng-click="showProductPopup($event);"
                                              ><i class="fa fa-filter"></i
                                            ></a>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mt-xs-10">
                                      <div class="ndr-select-box round-border">
                                        <select
                                          class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                          ng-options="Esclation.id as Esclation.value for Esclation in esclateData"
                                          ng-model="escalation_status"
                                          ng-change="singleFilter()"
                                        >
                                          <option value="" selected="selected" class="">
                                            All Escalation
                                          </option>
                                          <option label="Escalation" value="string:1">
                                            Escalation
                                          </option>
                                          <option label="Re-Escalation" value="string:2">
                                            Re-Escalation
                                          </option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                      <div class="ndr-select-box round-border">
                                        <select
                                          class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                          ng-options="agingItem.id as agingItem.value for agingItem in agingData"
                                          ng-model="aging"
                                          ng-change="singleFilter()"
                                        >
                                          <option value="" selected="selected" class="">
                                            All Aging
                                          </option>
                                          <option label="Today" value="string:0">Today</option>
                                          <option label="Yesterday" value="string:-1">
                                            Yesterday
                                          </option>
                                          <option label="2 days ago" value="string:-2">
                                            2 days ago
                                          </option>
                                        </select>
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
                    
                    <!-- table -->
                    <div class="panel-body bl">
                      <div>
                        <table
                          id="ordertable"
                          class="table table-bordered table-hover fixed-table statement-wrappers"
                          style="display: table"
                        >
                          <thead>
                            <tr>
                              <th class="item-9" style="width: 13%">
                                NDR Raised At
                              </th>
                              
                              <th>
                                NDR Reason
                              </th>
                              <th>
                                Order Details
                              </th>
                              <th>
                                Customer Details
                              </th>
                              <th>
                                Shipment Details
                              </th>
                              <th>
                                Delivery Address
                              </th>
                              <th>
                                Escalation Information
                              </th>
                              <th>
                                Last Action Taken By
                              </th>
                              <th>
                                Actions
                              </th>
                             
                            </tr>
                          </thead>
                          <tbody style="height: 417px">
                            <tr
                              ng-repeat="item in statement"
                              on-finish-render=""
                              eventname="statement"
                              class="br ng-scope"
                            >
                              <td colspan="11">
                                <div
                                    class="bg-white text-center custom_class"
                                    style="margin: 30px; border-radius: 20px; padding: 50px 0"
                                  >
                                    <img
                                      alt=""
                                      style="width: 200px"
                                      src="https://app.shiprocket.in/app/img/no_data/remittance_0.png"
                                    />
                                    <h3 class="text-md pt-xl text-info ng-binding">
                                      Your remittance is on its way
                                    </h3>
                                    <h5 class="pt-10 ng-binding">
                                      Hey J K, We release COD remittance 3 times in a week and on the 8th day from
                                      the date of delivery.
                                    </h5>
                                    <div class="pt-xl">
                                      <div ng-if="res.CTA.length == 1" class="ng-scope" style="">
                                        <div ng-if="res.CTA[0].cta_label == 'Learn More'" class="ng-scope">
                                          <a
                                            ng-href="https://support.shiprocket.in/support/solutions/articles/43000463560-how-soon-can-i-receive-my-cod-amount-in-my-bank-account-"
                                            target="_blank"
                                            role="button"
                                            class="btn btn-oval bg-info-dark ng-binding"
                                            style="padding: 10px 60px; margin-bottom: 15px; margin-right: 10px"
                                            href="https://support.shiprocket.in/support/solutions/articles/43000463560-how-soon-can-i-receive-my-cod-amount-in-my-bank-account-"
                                            >Learn More</a
                                          >
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    
                    
                    
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-Undelivered" role="tabpanel" aria-labelledby="pills-Undelivered-tab" tabindex="0">
                  <div class="row latest-order-div">
                    <div class="row ndr-count-panel">
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ndr-round-border" style="height: 100%">
                          <h5><strong>NDR Attempt</strong>&nbsp;<i> (Last 30 Days)</i></h5>
                          <div class="row mt text-center mb">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Total Count</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Attempt 1</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Attempt 2</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Attempt 3</strong>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ndr-round-border" style="height: 100%">
                          <h5 class="clearfix">
                            <strong>NDR Distribution</strong>&nbsp;<i> (Last 30 Days)</i
                            ><a
                              class="pull-right"
                              ng-click="redirectToNdrDashboard('Action Required')"
                              >View in Detail <i class="fa fa-arrow-right"></i
                            ></a>
                          </h5>
                          <div class="row mt text-center mb">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">Buyer Positive Response</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">Seller Positive Response</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Delivered</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">RTO Delivered</strong>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 ndr-mb">
                      <div class="ndr-filter-section">
                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mob-padding-right">
                                <label class="" style="width: 100%; position: relative">
                                  <input
                                    style="font-size: 11px; font-weight: 400; padding-left: 30px"
                                    ng-model="search_awb_no"
                                    ng-keyup="searchNdrData($event)"
                                    class="form-control round-border ng-pristine ng-untouched ng-valid ng-empty"
                                    type="text"
                                    placeholder="Search By AWB"
                                  />
                                  <button
                                    type="button"
                                    class="ndr-search-btn"
                                    ng-click="searchNdrDatabtn($event)"
                                  >
                                    <i class="fa fa-search"></i>
                                  </button>
                                </label>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mob-padding-left">
                                <label class="" style="width: 100%; position: relative">
                                  <input
                                    style="font-size: 11px; font-weight: 400; padding-left: 30px"
                                    ng-model="search_customer_info"
                                    ng-keyup="searchNdrData($event)"
                                    class="form-control round-border ng-pristine ng-untouched ng-valid ng-empty"
                                    type="text"
                                    placeholder="Search By Email/Phone Number"
                                  />
                                  <button
                                    type="button"
                                    class="ndr-search-btn"
                                    ng-click="searchNdrDatabtn($event)"
                                  >
                                    <i class="fa fa-search"></i>
                                  </button>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="ndr-round-border-mob mt-mob">
                              <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mt-xs-10">
                                  <strong
                                    class="text-right text-xs-left"
                                    style="display: block; margin-top: 9px"
                                    >Filter By:</strong
                                  >
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                  <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mt-xs-10">
                                      <div class="round-border form-control new-multifileter">
                                        <span>NDR Reason</span>
                                        <div
                                          class="orders-filter pull-right filter-dashboard ng-isolate-scope"
                                          apply-table-filter-val="true"
                                          filter-model="ndr_status"
                                          options-data="all_ndr_status"
                                          filter-key="ndr_status"
                                          order-function="filterByStatus()"
                                          filter-title=""
                                        >
                                          <span>
                                            <a
                                              tabindex="0"
                                              role="button"
                                              data-toggle="popover"
                                              data-trigger="focus"
                                              ng-click="showProductPopup($event);"
                                              ><i class="fa fa-filter"></i
                                            ></a>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mt-xs-10">
                                      <div class="round-border form-control new-multifileter">
                                        <span>All Attempts</span>
                                        <div
                                          class="orders-filter pull-right filter-dashboard ng-isolate-scope"
                                          apply-table-filter-val="true"
                                          filter-model="attempts"
                                          options-data="attemptsData"
                                          filter-key="attempts"
                                          order-function="filterByStatus()"
                                          filter-title=""
                                        >
                                          <span>
                                            <a
                                              tabindex="0"
                                              role="button"
                                              data-toggle="popover"
                                              data-trigger="focus"
                                              ng-click="showProductPopup($event);"
                                              ><i class="fa fa-filter"></i
                                            ></a>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mt-xs-10">
                                      <div class="ndr-select-box round-border">
                                        <select
                                          class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                          ng-options="Esclation.id as Esclation.value for Esclation in esclateData"
                                          ng-model="escalation_status"
                                          ng-change="singleFilter()"
                                        >
                                          <option value="" selected="selected" class="">
                                            All Escalation
                                          </option>
                                          <option label="Escalation" value="string:1">
                                            Escalation
                                          </option>
                                          <option label="Re-Escalation" value="string:2">
                                            Re-Escalation
                                          </option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                      <div class="ndr-select-box round-border">
                                        <select
                                          class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                          ng-options="agingItem.id as agingItem.value for agingItem in agingData"
                                          ng-model="aging"
                                          ng-change="singleFilter()"
                                        >
                                          <option value="" selected="selected" class="">
                                            All Aging
                                          </option>
                                          <option label="Today" value="string:0">Today</option>
                                          <option label="Yesterday" value="string:-1">
                                            Yesterday
                                          </option>
                                          <option label="2 days ago" value="string:-2">
                                            2 days ago
                                          </option>
                                        </select>
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
                    
                    <!-- table -->
                    <div class="panel-body bl">
                      <div>
                        <table
                          id="ordertable"
                          class="table table-bordered table-hover fixed-table statement-wrappers"
                          style="display: table"
                        >
                          <thead>
                            <tr>
                              <th class="item-9" style="width: 13%">
                                NDR Raised At
                              </th>
                              
                              <th>
                                NDR Reason
                              </th>
                              <th>
                                Order Details
                              </th>
                              <th>
                                Customer Details
                              </th>
                              <th>
                                Shipment Details
                              </th>
                              <th>
                                Delivery Address
                              </th>
                              <th>
                                Escalation Information
                              </th>
                              <th>
                                Last Action Taken By
                              </th>
                              <th>
                                Actions
                              </th>
                             
                            </tr>
                          </thead>
                          <tbody style="height: 417px">
                            <tr
                              ng-repeat="item in statement"
                              on-finish-render=""
                              eventname="statement"
                              class="br ng-scope"
                            >
                              <td colspan="11">
                                <div
                                    class="bg-white text-center custom_class"
                                    style="margin: 30px; border-radius: 20px; padding: 50px 0"
                                  >
                                    <img
                                      alt=""
                                      style="width: 200px"
                                      src="https://app.shiprocket.in/app/img/no_data/remittance_0.png"
                                    />
                                    <h3 class="text-md pt-xl text-info ng-binding">
                                      Your remittance is on its way
                                    </h3>
                                    <h5 class="pt-10 ng-binding">
                                      Hey J K, We release COD remittance 3 times in a week and on the 8th day from
                                      the date of delivery.
                                    </h5>
                                    <div class="pt-xl">
                                      <div ng-if="res.CTA.length == 1" class="ng-scope" style="">
                                        <div ng-if="res.CTA[0].cta_label == 'Learn More'" class="ng-scope">
                                          <a
                                            ng-href="https://support.shiprocket.in/support/solutions/articles/43000463560-how-soon-can-i-receive-my-cod-amount-in-my-bank-account-"
                                            target="_blank"
                                            role="button"
                                            class="btn btn-oval bg-info-dark ng-binding"
                                            style="padding: 10px 60px; margin-bottom: 15px; margin-right: 10px"
                                            href="https://support.shiprocket.in/support/solutions/articles/43000463560-how-soon-can-i-receive-my-cod-amount-in-my-bank-account-"
                                            >Learn More</a
                                          >
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    
                    
                    
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-RTOIntransit" role="tabpanel" aria-labelledby="pills-RTOIntransit-tab" tabindex="0">
                  <div class="row latest-order-div">
                    <div class="row ndr-count-panel">
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ndr-round-border" style="height: 100%">
                          <h5><strong>NDR Attempt</strong>&nbsp;<i> (Last 30 Days)</i></h5>
                          <div class="row mt text-center mb">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Total Count</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Attempt 1</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Attempt 2</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Attempt 3</strong>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ndr-round-border" style="height: 100%">
                          <h5 class="clearfix">
                            <strong>NDR Distribution</strong>&nbsp;<i> (Last 30 Days)</i
                            ><a
                              class="pull-right"
                              ng-click="redirectToNdrDashboard('Action Required')"
                              >View in Detail <i class="fa fa-arrow-right"></i
                            ></a>
                          </h5>
                          <div class="row mt text-center mb">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">Buyer Positive Response</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">Seller Positive Response</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">NDR Delivered</strong>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                              <span class="ndr-circle mb ng-binding ng-scope" ng-if="!showNdrCount"
                                >0</span
                              >
                              <strong style="display: block">RTO Delivered</strong>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 ndr-mb">
                      <div class="ndr-filter-section">
                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mob-padding-right">
                                <label class="" style="width: 100%; position: relative">
                                  <input
                                    style="font-size: 11px; font-weight: 400; padding-left: 30px"
                                    ng-model="search_awb_no"
                                    ng-keyup="searchNdrData($event)"
                                    class="form-control round-border ng-pristine ng-untouched ng-valid ng-empty"
                                    type="text"
                                    placeholder="Search By AWB"
                                  />
                                  <button
                                    type="button"
                                    class="ndr-search-btn"
                                    ng-click="searchNdrDatabtn($event)"
                                  >
                                    <i class="fa fa-search"></i>
                                  </button>
                                </label>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mob-padding-left">
                                <label class="" style="width: 100%; position: relative">
                                  <input
                                    style="font-size: 11px; font-weight: 400; padding-left: 30px"
                                    ng-model="search_customer_info"
                                    ng-keyup="searchNdrData($event)"
                                    class="form-control round-border ng-pristine ng-untouched ng-valid ng-empty"
                                    type="text"
                                    placeholder="Search By Email/Phone Number"
                                  />
                                  <button
                                    type="button"
                                    class="ndr-search-btn"
                                    ng-click="searchNdrDatabtn($event)"
                                  >
                                    <i class="fa fa-search"></i>
                                  </button>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="ndr-round-border-mob mt-mob">
                              <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 mt-xs-10">
                                  <strong
                                    class="text-right text-xs-left"
                                    style="display: block; margin-top: 9px"
                                    >Filter By:</strong
                                  >
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                  <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mt-xs-10">
                                      <div class="round-border form-control new-multifileter">
                                        <span>NDR Reason</span>
                                        <div
                                          class="orders-filter pull-right filter-dashboard ng-isolate-scope"
                                          apply-table-filter-val="true"
                                          filter-model="ndr_status"
                                          options-data="all_ndr_status"
                                          filter-key="ndr_status"
                                          order-function="filterByStatus()"
                                          filter-title=""
                                        >
                                          <span>
                                            <a
                                              tabindex="0"
                                              role="button"
                                              data-toggle="popover"
                                              data-trigger="focus"
                                              ng-click="showProductPopup($event);"
                                              ><i class="fa fa-filter"></i
                                            ></a>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mt-xs-10">
                                      <div class="round-border form-control new-multifileter">
                                        <span>All Attempts</span>
                                        <div
                                          class="orders-filter pull-right filter-dashboard ng-isolate-scope"
                                          apply-table-filter-val="true"
                                          filter-model="attempts"
                                          options-data="attemptsData"
                                          filter-key="attempts"
                                          order-function="filterByStatus()"
                                          filter-title=""
                                        >
                                          <span>
                                            <a
                                              tabindex="0"
                                              role="button"
                                              data-toggle="popover"
                                              data-trigger="focus"
                                              ng-click="showProductPopup($event);"
                                              ><i class="fa fa-filter"></i
                                            ></a>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mt-xs-10">
                                      <div class="ndr-select-box round-border">
                                        <select
                                          class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                          ng-options="Esclation.id as Esclation.value for Esclation in esclateData"
                                          ng-model="escalation_status"
                                          ng-change="singleFilter()"
                                        >
                                          <option value="" selected="selected" class="">
                                            All Escalation
                                          </option>
                                          <option label="Escalation" value="string:1">
                                            Escalation
                                          </option>
                                          <option label="Re-Escalation" value="string:2">
                                            Re-Escalation
                                          </option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                      <div class="ndr-select-box round-border">
                                        <select
                                          class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                          ng-options="agingItem.id as agingItem.value for agingItem in agingData"
                                          ng-model="aging"
                                          ng-change="singleFilter()"
                                        >
                                          <option value="" selected="selected" class="">
                                            All Aging
                                          </option>
                                          <option label="Today" value="string:0">Today</option>
                                          <option label="Yesterday" value="string:-1">
                                            Yesterday
                                          </option>
                                          <option label="2 days ago" value="string:-2">
                                            2 days ago
                                          </option>
                                        </select>
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
                    
                    <!-- table -->
                    <div class="panel-body bl">
                      <div>
                        <table
                          id="ordertable"
                          class="table table-bordered table-hover fixed-table statement-wrappers"
                          style="display: table"
                        >
                          <thead>
                            <tr>
                              <th class="item-9" style="width: 13%">
                                NDR Raised At
                              </th>
                              
                              <th>
                                NDR Reason
                              </th>
                              <th>
                                Order Details
                              </th>
                              <th>
                                Customer Details
                              </th>
                              <th>
                                Shipment Details
                              </th>
                              <th>
                                Delivery Address
                              </th>
                              <th>
                                Escalation Information
                              </th>
                              <th>
                                Last Action Taken By
                              </th>
                              <th>
                                Actions
                              </th>
                             
                            </tr>
                          </thead>
                          <tbody style="height: 417px">
                            <tr
                              ng-repeat="item in statement"
                              on-finish-render=""
                              eventname="statement"
                              class="br ng-scope"
                            >
                              <td colspan="11">
                                <div
                                    class="bg-white text-center custom_class"
                                    style="margin: 30px; border-radius: 20px; padding: 50px 0"
                                  >
                                    <img
                                      alt=""
                                      style="width: 200px"
                                      src="https://app.shiprocket.in/app/img/no_data/remittance_0.png"
                                    />
                                    <h3 class="text-md pt-xl text-info ng-binding">
                                      Your remittance is on its way
                                    </h3>
                                    <h5 class="pt-10 ng-binding">
                                      Hey J K, We release COD remittance 3 times in a week and on the 8th day from
                                      the date of delivery.
                                    </h5>
                                    <div class="pt-xl">
                                      <div ng-if="res.CTA.length == 1" class="ng-scope" style="">
                                        <div ng-if="res.CTA[0].cta_label == 'Learn More'" class="ng-scope">
                                          <a
                                            ng-href="https://support.shiprocket.in/support/solutions/articles/43000463560-how-soon-can-i-receive-my-cod-amount-in-my-bank-account-"
                                            target="_blank"
                                            role="button"
                                            class="btn btn-oval bg-info-dark ng-binding"
                                            style="padding: 10px 60px; margin-bottom: 15px; margin-right: 10px"
                                            href="https://support.shiprocket.in/support/solutions/articles/43000463560-how-soon-can-i-receive-my-cod-amount-in-my-bank-account-"
                                            >Learn More</a
                                          >
                                        </div>
                                      </div>
                                    </div>
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
            </div>
          </div>
        </div>



<!-- main-body-panel end -->
@endsection