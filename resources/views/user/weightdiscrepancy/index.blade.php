@extends('layouts.main')

@section('title')
Weight Discrepancies
@endsection

@section('class')
warehouse-page complaints-page rate-calculator-page recharge-page payment-recharge user-remittance-page reports-page billing-charge-details
@endsection

<!--
@section('page_title_con')
@endsection
-->

@section('body')
<!-- main-body-panel start -->

<div class="main-panel">
          <div class="content-wrapper">
            <div class="header-wrapper">
              <div class="right-strip-wrapper" ng-click="showAboutWD()">
                Learn More in 2 Minutes
                <img src="https://app.shiprocket.in/app/img/arrow-right.png" style="width: 14px; margin-left: 5px" />
              </div>
              <div class="type-header mt-sm">Weight Discrepancies</div>
              <div class="mt-sm mb-lg">
                <p class="type-header-2" style="margin-bottom: 0">
                  Take action on your pending weight discrepancies, track weight disputes,
                  and view history.
                </p>
                <div class="mt-sm mb-lg" style="display: none">
                  <span class="link" style="color: #285fdb !important"
                    >Learn how to request Weight Discrepancy</span
                  >
                </div>
              </div>
            </div>
            <!-- card wrarpper -->
            <div class="row pt-sm order-cards">
              <div class="col-lg-3 col-sm-6 p-md">
                <div class="card" style="height: 90px">
                  <p class="card-heading">Total Weight Discrepancies</p>
                  <div class="d-inline-block">
                    <h3 ng-if="weightDiscrepancies" class="card-title ng-binding ng-scope">
                      0
                    </h3>
            
                    <span class="card-last-days ng-binding">Last 30 Days </span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 p-md">
                <div class="card" style="height: 90px">
                  <p class="card-heading">
                    Discrepancies Accepted &nbsp;
                    <i
                      class="fa fa-info-circle fa-sm"
                      style="vertical-align: 15%; font-size: 12px"
                      tooltip-placement="top"
                      uib-tooltip="Count of discrepancies accepted by you or auto accepted due to no action from your end"
                    ></i>
                  </p>
                  <div class="d-inline-block">
                    <h3 ng-if="weightDiscrepancies" class="card-title ng-binding ng-scope">
                      0
                    </h3>
            
                    <span class="card-last-days ng-binding">Last 30 Days</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 p-md">
                <div class="card" style="height: 90px">
                  <p class="card-heading">Disputes Accepted by Courier</p>
                  <div class="d-inline-block">
                    <h3 ng-if="weightDiscrepancies" class="card-title ng-binding ng-scope">
                      0
                    </h3>
            
                    <span class="card-last-days ng-binding">Last 30 Days</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 p-md">
                <div class="card" style="height: 90px">
                  <p class="card-heading">Disputes Rejected by Courier</p>
                  <div class="d-inline-block">
                    <h3 ng-if="weightDiscrepancies" class="card-title ng-binding ng-scope">
                      0
                    </h3>
            
                    <span class="card-last-days ng-binding">Last 30 Days</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- filter -->
            <div class="row display_order_filter pt-sm order-search">
              <div class="col-6">
                <div class=" pl-sm pr-sm pb-sm s-opt search_order">
                  <span class="search-button-prepend" ng-click="updateState()"
                    ><i class="fa fa-search"></i>
                  </span>
                  <input
                    type="text"
                    class="form-control input-sm search-product ng-pristine ng-valid ng-empty ng-touched"
                    placeholder="Order Id or AWB No."
                    uib-tooltip="Enter to search"
                    ng-model="searchText"
                    ng-keyup="searchBy($event)"
                  />
                </div>
                <div class="pl-sm pr-sm pb-sm s-opt status_order">
                  <select
                    class="form-control input-sm payment-filter ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched"
                    ng-model="transferObject.searchStatus"
                    ng-change="updateState()"
                  >
                    <option
                      ng-repeat="x in statusFilters"
                      value="0"
                      class="ng-binding ng-scope"
                    >
                      All Statuses
                    </option>
                    <option
                      ng-repeat="x in statusFilters"
                      value="1"
                      class="ng-binding ng-scope"
                    >
                      New Discrepancy
                    </option>
              
                    <option
                      ng-repeat="x in statusFilters"
                      value="2"
                      class="ng-binding ng-scope"
                    >
                      Auto Accepted Discrepancy
                    </option>
                    <option
                      ng-repeat="x in statusFilters"
                      value="3"
                      class="ng-binding ng-scope"
                    >
                      Discrepancy Accepted
                    </option>
                    <option
                      ng-repeat="x in statusFilters"
                      value="4"
                      class="ng-binding ng-scope"
                    >
                      Dispute Raised
                    </option>
                    <option
                      ng-repeat="x in statusFilters"
                      value="5"
                      class="ng-binding ng-scope"
                    >
                      Dispute Accepted by Courier
                    </option>
                    <option
                      ng-repeat="x in statusFilters"
                      value="6"
                      class="ng-binding ng-scope"
                    >
                      Dispute Rejected by Courier
                    </option>
                    <option
                      ng-repeat="x in statusFilters"
                      value="7"
                      class="ng-binding ng-scope"
                    >
                      SR Credit
                    </option>
                    <option
                      ng-repeat="x in statusFilters"
                      value="8"
                      class="ng-binding ng-scope"
                    >
                      Escalation Raised
                    </option>
                    <option
                      ng-repeat="x in statusFilters"
                      value="9"
                      class="ng-binding ng-scope"
                    >
                      Escalation In Progress
                    </option>
                    <option
                      ng-repeat="x in statusFilters"
                      value="10"
                      class="ng-binding ng-scope"
                    >
                      Escalation Resolved
                    </option>
                    <option
                      ng-repeat="x in statusFilters"
                      value="11"
                      class="ng-binding ng-scope"
                    >
                      Escalation Closed
                    </option>
                  </select>
                </div>
                <div class="pl-sm pr-sm pb-sm s-opt status_order">
                  <select
                    class="form-control input-sm payment-filter ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched"
                    ng-model="transferObject.searchStatus"
                    ng-change="updateState()"
                  >
                    <option
                      ng-repeat="x in statusFilters"
                      value="0"
                      class="ng-binding ng-scope"
                    >
                      All Statuses
                    </option>
                
                    <option
                      ng-repeat="x in statusFilters"
                      value="1"
                      class="ng-binding ng-scope"
                    >
                      New Discrepancy
                    </option>
                
                    <option
                      ng-repeat="x in statusFilters"
                      value="2"
                      class="ng-binding ng-scope"
                    >
                      Auto Accepted Discrepancy
                    </option>
                
                    <option
                      ng-repeat="x in statusFilters"
                      value="3"
                      class="ng-binding ng-scope"
                    >
                      Discrepancy Accepted
                    </option>
                
                    <option
                      ng-repeat="x in statusFilters"
                      value="4"
                      class="ng-binding ng-scope"
                    >
                      Dispute Raised
                    </option>
                
                    <option
                      ng-repeat="x in statusFilters"
                      value="5"
                      class="ng-binding ng-scope"
                    >
                      Dispute Accepted by Courier
                    </option>
                
                    <option
                      ng-repeat="x in statusFilters"
                      value="6"
                      class="ng-binding ng-scope"
                    >
                      Dispute Rejected by Courier
                    </option>
                
                    <option
                      ng-repeat="x in statusFilters"
                      value="7"
                      class="ng-binding ng-scope"
                    >
                      SR Credit
                    </option>
                
                    <option
                      ng-repeat="x in statusFilters"
                      value="8"
                      class="ng-binding ng-scope"
                    >
                      Escalation Raised
                    </option>
                
                    <option
                      ng-repeat="x in statusFilters"
                      value="9"
                      class="ng-binding ng-scope"
                    >
                      Escalation In Progress
                    </option>
                
                    <option
                      ng-repeat="x in statusFilters"
                      value="10"
                      class="ng-binding ng-scope"
                    >
                      Escalation Resolved
                    </option>
                
                    <option
                      ng-repeat="x in statusFilters"
                      value="11"
                      class="ng-binding ng-scope"
                    >
                      Escalation Closed
                    </option>
                  </select>
                </div>
                
              </div>
              <div class="col-6">
                <button data-bs-toggle="tooltip" data-bs-placement="top" title="" class="icon_btn_1 me-16px" data-bs-original-title="Download Report" aria-label="Download Report">
                  <img data-src="/assets/images/icons/download-disable.svg" alt="download" src="https://app.shiprocket.in/seller//assets/images/icons/download-disable.svg">
                </button>
                <div>
                  <select>
                    <option value="All Statuses">All Statuses</option>
                    <option value="New Discrepancy">New Discrepancy</option>
                  </select>
                </div>
                
              </div>
              
            </div>
            <div class="bg-white text-center custom_class" style="margin: 30px;border-radius: 20px;padding: 50px 0;">
              <img ng-src="img" alt="" style="width: 200px;" src="https://app.shiprocket.in/app/img/no_data/weight_discrepancy_0.png">
              <h3 class="text-md pt-xl text-info ng-binding">Great! You have 0 weight discrepancies</h3>
              <h5 class="pt-10 ng-binding">Hey J K, Read more about weight discrepancy and how to avoid it by clicking the button below</h5>
              <div class="pt-xl">
                 <div ng-if="res.CTA.length == 1" class="ng-scope" >
                   <div ng-if="res.CTA[0].cta_label == 'Learn More'" class="ng-scope">
                       <a ng-href="https://shiprocket.freshdesk.com/support/solutions/articles/43000326499-why-there-is-a-weight-discrepancy-pop-up-on-my-screen-" target="_blank" role="button" class="btn btn-oval bg-info-dark ng-binding" style="padding: 10px 60px; margin-bottom:15px;margin-right:10px;" href="https://shiprocket.freshdesk.com/support/solutions/articles/43000326499-why-there-is-a-weight-discrepancy-pop-up-on-my-screen-">Learn More</a>
                    </div>
                 </div>
              </div>
           </div>

           
            
            
          </div>
        </div>


<!-- main-body-panel end -->
@endsection