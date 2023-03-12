@extends('layouts.main')

@section('title')
Activity Logs
@endsection

@section('class')
warehouse-page complaints-page rate-calculator-page recharge-page payment-recharge user-remittance-page reports-page billing-charge-details seller-channels-page new-reports-page activities-page
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
          <!-- Reports -->
          <h1>Activity Logs</h1>

          <!-- filter -->
          <div class="filter-container-custom col-12">
            <div class="row">
              <div class="col-3">
                <select
                      class="text-capitalize form-control input-sm ng-pristine ng-valid ng-empty ng-touched"
                      ng-options="x.id as x.name for x in allTypes"
                    >
                      <option value="" class="" selected="selected">All</option>
                      <option label="Orders" value="number:1">Orders</option>
                      <option label="Shipments" value="number:3">Shipments</option>
                      <option label="Returns" value="number:2">Returns</option>
                      <option label="Billing" value="number:4">Billing</option>
                      <option label="Channels" value="number:5">Channels</option>
                      <option label="Reports" value="number:8">Reports</option>
                      <option label="All Refunds" value="number:8">All Refunds</option>
                      <option label="B2b Orders" value="number:14">B2b Orders</option>
                      <option label="QC Downloads" value="number:15">QC Downloads</option>
                    </select>

               
              </div>
              <div class="col-3">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img alt="image" class="ng-tns-c156-102" src="https://app.shiprocket.in/seller//assets/images/calender.svg"> Last 30 days </button>
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
              </div>
            </div>
          </div>

          <!-- data table -->
          <div>
            <div class="panel-body" style="overflow: hidden !important">
              <div class="bl">
                <table
                  id="ordertable"
                  class="table table-bordered table-hover ndr-pannelColsed-wrapper"
                  style="display: table"
                  ng-class="noData ? 'fixed-table': ''"
                >
                  <thead>
                    <tr>
                      <th>
                        <div style="width: 150px">Activity</div>
                      </th>
                      <th>
                        <div style="width: 150px">Start Time</div>
                      </th>
                      <th>
                        <div style="width: 100px">End Time</div>
                      </th>
                      <th>
                        <div style="width: 150px">Success Count</div>
                      </th>
                      <th>
                        <div style="width: 150px">Error Count</div>
                      </th>
                      <th>
                        <div style="width: 80px">Total Count</div>
                      </th>
                      <th>
                        <div style="width: 80px">Report</div>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr
                      class="br ng-scope"
                      ng-repeat="reportdata in reportData"
                      on-finish-render=""
                      eventname="ndrOrder"
                      style=""
                    >
                      <td>
                        <div style="width: 150px" class="ng-binding">
                          Bulk Assign
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                        15-Dec-2022 <br> 15:32
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 100px; text-transform: capitalize"
                          class="ng-binding"
                        >
                        15-Dec-2022 <br> 15:32
                        </div>
                      </td>
                      <td>
                        0
                      </td>
                      <td>
                        <div style="width: 150px">
                         0
                        </div>
                      </td>
                      <td>
                        0
                      </td>
                      <td>
                        N/A
                      </td>
                    </tr>
                    <tr
                    class="br ng-scope"
                    ng-repeat="reportdata in reportData"
                    on-finish-render=""
                    eventname="ndrOrder"
                    style=""
                  >
                    <td>
                      <div style="width: 150px" class="ng-binding">
                        Bulk Assign
                      </div>
                    </td>
                    <td>
                      <div
                        style="width: 150px; text-transform: capitalize"
                        class="ng-binding"
                      >
                      15-Dec-2022 <br> 15:32
                      </div>
                    </td>
                    <td>
                      <div
                        style="width: 100px; text-transform: capitalize"
                        class="ng-binding"
                      >
                      15-Dec-2022 <br> 15:32
                      </div>
                    </td>
                    <td>
                      0
                    </td>
                    <td>
                      <div style="width: 150px">
                       0
                      </div>
                    </td>
                    <td>
                      0
                    </td>
                    <td>
                      N/A
                    </td>
                  </tr>
                  <tr
                    class="br ng-scope"
                    ng-repeat="reportdata in reportData"
                    on-finish-render=""
                    eventname="ndrOrder"
                    style=""
                  >
                    <td>
                      <div style="width: 150px" class="ng-binding">
                        Bulk Assign
                      </div>
                    </td>
                    <td>
                      <div
                        style="width: 150px; text-transform: capitalize"
                        class="ng-binding"
                      >
                      15-Dec-2022 <br> 15:32
                      </div>
                    </td>
                    <td>
                      <div
                        style="width: 100px; text-transform: capitalize"
                        class="ng-binding"
                      >
                      15-Dec-2022 <br> 15:32
                      </div>
                    </td>
                    <td>
                      0
                    </td>
                    <td>
                      <div style="width: 150px">
                       0
                      </div>
                    </td>
                    <td>
                      0
                    </td>
                    <td>
                      N/A
                    </td>
                  </tr>
                  <tr
                    class="br ng-scope"
                    ng-repeat="reportdata in reportData"
                    on-finish-render=""
                    eventname="ndrOrder"
                    style=""
                  >
                    <td>
                      <div style="width: 150px" class="ng-binding">
                        Bulk Assign
                      </div>
                    </td>
                    <td>
                      <div
                        style="width: 150px; text-transform: capitalize"
                        class="ng-binding"
                      >
                      15-Dec-2022 <br> 15:32
                      </div>
                    </td>
                    <td>
                      <div
                        style="width: 100px; text-transform: capitalize"
                        class="ng-binding"
                      >
                      15-Dec-2022 <br> 15:32
                      </div>
                    </td>
                    <td>
                      0
                    </td>
                    <td>
                      <div style="width: 150px">
                       0
                      </div>
                    </td>
                    <td>
                      0
                    </td>
                    <td>
                      N/A
                    </td>
                  </tr>
                  <tr
                    class="br ng-scope"
                    ng-repeat="reportdata in reportData"
                    on-finish-render=""
                    eventname="ndrOrder"
                    style=""
                  >
                    <td>
                      <div style="width: 150px" class="ng-binding">
                        Bulk Assign
                      </div>
                    </td>
                    <td>
                      <div
                        style="width: 150px; text-transform: capitalize"
                        class="ng-binding"
                      >
                      15-Dec-2022 <br> 15:32
                      </div>
                    </td>
                    <td>
                      <div
                        style="width: 100px; text-transform: capitalize"
                        class="ng-binding"
                      >
                      15-Dec-2022 <br> 15:32
                      </div>
                    </td>
                    <td>
                      0
                    </td>
                    <td>
                      <div style="width: 150px">
                       0
                      </div>
                    </td>
                    <td>
                      0
                    </td>
                    <td>
                      N/A
                    </td>
                  </tr>
                  <tr
                    class="br ng-scope"
                    ng-repeat="reportdata in reportData"
                    on-finish-render=""
                    eventname="ndrOrder"
                    style=""
                  >
                    <td>
                      <div style="width: 150px" class="ng-binding">
                        Bulk Assign
                      </div>
                    </td>
                    <td>
                      <div
                        style="width: 150px; text-transform: capitalize"
                        class="ng-binding"
                      >
                      15-Dec-2022 <br> 15:32
                      </div>
                    </td>
                    <td>
                      <div
                        style="width: 100px; text-transform: capitalize"
                        class="ng-binding"
                      >
                      15-Dec-2022 <br> 15:32
                      </div>
                    </td>
                    <td>
                      0
                    </td>
                    <td>
                      <div style="width: 150px">
                       0
                      </div>
                    </td>
                    <td>
                      0
                    </td>
                    <td>
                      N/A
                    </td>
                  </tr>
                  <tr
                    class="br ng-scope"
                    ng-repeat="reportdata in reportData"
                    on-finish-render=""
                    eventname="ndrOrder"
                    style=""
                  >
                    <td>
                      <div style="width: 150px" class="ng-binding">
                        Bulk Assign
                      </div>
                    </td>
                    <td>
                      <div
                        style="width: 150px; text-transform: capitalize"
                        class="ng-binding"
                      >
                      15-Dec-2022 <br> 15:32
                      </div>
                    </td>
                    <td>
                      <div
                        style="width: 100px; text-transform: capitalize"
                        class="ng-binding"
                      >
                      15-Dec-2022 <br> 15:32
                      </div>
                    </td>
                    <td>
                      0
                    </td>
                    <td>
                      <div style="width: 150px">
                       0
                      </div>
                    </td>
                    <td>
                      0
                    </td>
                    <td>
                      N/A
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-sm-4 col-xs-6">
                  <p>
                    Show
                    <select
                      class="ng-pristine ng-untouched ng-valid ng-not-empty"
                      ng-model="selectedItems"
                      ng-options="opt.id as opt.value for opt in itemsPerPage"
                      ng-change="changePerPage()"
                    >
                      <option label="15" value="number:0">15</option>
                      <option label="30" value="number:1">30</option>
                      <option label="60" value="number:2">60</option>
                      <option label="100" value="number:3">100</option></select
                    >items per page
                  </p>
                </div>
                <div class="col-sm-4 text-center">
                  <ul class="pagination">
                    <li class="page-item disabled">
                      <a
                        href=""
                        class="page-link"
                        aria-label="First"
                        tabindex="-1"
                        aria-disabled="true"
                        ><span aria-hidden="true">Previous</span>
                      </a>
                    </li>
                  
                   
                  
                    <li class="page-item active" aria-current="page">
                      <a href="" class="page-link"> 1 </a>
                    </li>
                    
                  
                    <li class="page-item">
                      <a href="" class="page-link" aria-label="Last"
                        ><span aria-hidden="true">Next</span>
                      </a>
                    </li>
                  </ul>
                  
                </div>
                <div class="col-sm-4 text-right hidden-xs">
                  <p ng-hide='totalItems == "10000000"' class="ng-binding" style="">
                    Showing 1-15 of 15 items
                  </p>
                </div>
              </div>
            </div>
          </div>
          
           
            
            
          </div>
        </div>
 
         <!-- main-body-panel end -->
@endsection