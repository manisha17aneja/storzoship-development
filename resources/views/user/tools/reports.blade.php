@extends('layouts.main')

@section('title')
Reports
@endsection

@section('class')
warehouse-page complaints-page rate-calculator-page recharge-page payment-recharge user-remittance-page reports-page billing-charge-details seller-channels-page new-reports-page
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
          <h1>Reports</h1>
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Active</a>
            </li>
          </ul>

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
                        <div style="width: 150px">Report Generated On</div>
                      </th>
                      <th>
                        <div style="width: 150px">Title</div>
                      </th>
                      <th>
                        <div style="width: 100px">Report Type</div>
                      </th>
                      <th>
                        <div style="width: 150px">User</div>
                      </th>
                      <th>
                        <div style="width: 150px">Report Date Range</div>
                      </th>
                      <th>
                        <div style="width: 80px">Action</div>
                      </th>
                      <th>
                        <div style="width: 80px">Size</div>
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
                          14-Dec-2022 11:40 PM
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          weight discrepancy
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 100px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          shipments
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          J K SOLANKI
                        </div>
                      </td>
                      <td>
                        <div style="width: 150px">
                          <span ng-if="reportdata.from" class="ng-binding ng-scope">
                            13 Dec 2022 - 13 Dec 2022
                          </span>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px">
                          <a
                            target="_blank"
                            ng-if="reportdata.url &amp;&amp; !isAdminAsSeller &amp;&amp; !reportdata.is_report_downloadable"
                            href="https://s3-ap-southeast-1.amazonaws.com/kr-shipmultichannel/imports/c_31064/70f1848185ac45bb38927ca054d87b7e.csv"
                            class="ng-scope"
                          >
                            <span
                              class="p-xs text-center ng-binding accept-btn"
                              style="
                                color: white;
                                max-width: 72px;
                                display: block;
                                border-radius: 2px;
                              "
                              >Download
                            </span>
                          </a>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px" class="ng-binding">439.00 B</div>
                      </td>
                    </tr>
                    <tr
                      class="br ng-scope"
                      ng-repeat="reportdata in reportData"
                      on-finish-render=""
                      eventname="ndrOrder"
                    >
                      <td>
                        <div style="width: 150px" class="ng-binding">
                          2-Apr-2022 01:31 PM
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          monthly reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 100px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          smart_reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          J K SOLANKI
                        </div>
                      </td>
                      <td>
                        <div style="width: 150px">
                          <span ng-if="reportdata.from" class="ng-binding ng-scope">
                            1 Mar 2022 - 31 Mar 2022
                          </span>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px">
                          <a
                            target="_blank"
                            ng-if="reportdata.url &amp;&amp; !isAdminAsSeller &amp;&amp; !reportdata.is_report_downloadable"
                            href="https://kr-shipmultichannel.s3.ap-southeast-1.amazonaws.com/imports/c_31064/reports/1485165364_monthly_smart_report_apr_2022.xls"
                            class="ng-scope"
                          >
                            <span
                              class="p-xs text-center ng-binding accept-btn"
                              style="
                                color: white;
                                max-width: 72px;
                                display: block;
                                border-radius: 2px;
                              "
                              >Download
                            </span>
                          </a>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px" class="ng-binding">9.22 kB</div>
                      </td>
                    </tr>
          
                    <tr
                      class="br ng-scope"
                      ng-repeat="reportdata in reportData"
                      on-finish-render=""
                      eventname="ndrOrder"
                    >
                      <td>
                        <div style="width: 150px" class="ng-binding">
                          17-Mar-2022 01:35 PM
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          biweekly reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 100px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          smart_reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          J K SOLANKI
                        </div>
                      </td>
                      <td>
                        <div style="width: 150px">
                          <span ng-if="reportdata.from" class="ng-binding ng-scope">
                            1 Mar 2022 - 15 Mar 2022
                          </span>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px">
                          <a
                            target="_blank"
                            ng-if="reportdata.url &amp;&amp; !isAdminAsSeller &amp;&amp; !reportdata.is_report_downloadable"
                            href="https://kr-shipmultichannel.s3.ap-southeast-1.amazonaws.com/imports/c_31064/reports/844276774_biweekly_report_mar_2022smart.xls"
                            class="ng-scope"
                          >
                            <span
                              class="p-xs text-center ng-binding accept-btn"
                              style="
                                color: white;
                                max-width: 72px;
                                display: block;
                                border-radius: 2px;
                              "
                              >Download
                            </span>
                          </a>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px" class="ng-binding">9.22 kB</div>
                      </td>
                    </tr>
          
                    <tr
                      class="br ng-scope"
                      ng-repeat="reportdata in reportData"
                      on-finish-render=""
                      eventname="ndrOrder"
                    >
                      <td>
                        <div style="width: 150px" class="ng-binding">
                          2-Mar-2022 01:38 PM
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          monthly reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 100px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          smart_reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          J K SOLANKI
                        </div>
                      </td>
                      <td>
                        <div style="width: 150px">
                          <span ng-if="reportdata.from" class="ng-binding ng-scope">
                            1 Feb 2022 - 28 Feb 2022
                          </span>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px">
                          <a
                            target="_blank"
                            ng-if="reportdata.url &amp;&amp; !isAdminAsSeller &amp;&amp; !reportdata.is_report_downloadable"
                            href="https://kr-shipmultichannel.s3.ap-southeast-1.amazonaws.com/imports/c_31064/reports/462443201_monthly_smart_report_mar_2022.xls"
                            class="ng-scope"
                          >
                            <span
                              class="p-xs text-center ng-binding accept-btn"
                              style="
                                color: white;
                                max-width: 72px;
                                display: block;
                                border-radius: 2px;
                              "
                              >Download
                            </span>
                          </a>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px" class="ng-binding">9.22 kB</div>
                      </td>
                    </tr>
          
                    <tr
                      class="br ng-scope"
                      ng-repeat="reportdata in reportData"
                      on-finish-render=""
                      eventname="ndrOrder"
                    >
                      <td>
                        <div style="width: 150px" class="ng-binding">
                          17-Feb-2022 02:40 PM
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          biweekly reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 100px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          smart_reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          J K SOLANKI
                        </div>
                      </td>
                      <td>
                        <div style="width: 150px">
                          <span ng-if="reportdata.from" class="ng-binding ng-scope">
                            1 Feb 2022 - 15 Feb 2022
                          </span>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px">
                          <a
                            target="_blank"
                            ng-if="reportdata.url &amp;&amp; !isAdminAsSeller &amp;&amp; !reportdata.is_report_downloadable"
                            href="https://kr-shipmultichannel.s3.ap-southeast-1.amazonaws.com/imports/c_31064/reports/1926248753_biweekly_report_feb_2022smart.xls"
                            class="ng-scope"
                          >
                            <span
                              class="p-xs text-center ng-binding accept-btn"
                              style="
                                color: white;
                                max-width: 72px;
                                display: block;
                                border-radius: 2px;
                              "
                              >Download
                            </span>
                          </a>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px" class="ng-binding">9.22 kB</div>
                      </td>
                    </tr>
                    <tr
                      class="br ng-scope"
                      ng-repeat="reportdata in reportData"
                      on-finish-render=""
                      eventname="ndrOrder"
                    >
                      <td>
                        <div style="width: 150px" class="ng-binding">
                          2-Feb-2022 01:44 PM
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          monthly reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 100px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          smart_reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          J K SOLANKI
                        </div>
                      </td>
                      <td>
                        <div style="width: 150px">
                          <span ng-if="reportdata.from" class="ng-binding ng-scope">
                            1 Jan 2022 - 31 Jan 2022
                          </span>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px">
                          <a
                            target="_blank"
                            ng-if="reportdata.url &amp;&amp; !isAdminAsSeller &amp;&amp; !reportdata.is_report_downloadable"
                            href="https://kr-shipmultichannel.s3.ap-southeast-1.amazonaws.com/imports/c_31064/reports/32607888_monthly_smart_report_feb_2022.xls"
                            class="ng-scope"
                          >
                            <span
                              class="p-xs text-center ng-binding accept-btn"
                              style="
                                color: white;
                                max-width: 72px;
                                display: block;
                                border-radius: 2px;
                              "
                              >Download
                            </span>
                          </a>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px" class="ng-binding">9.22 kB</div>
                      </td>
                    </tr>
                    <tr
                      class="br ng-scope"
                      ng-repeat="reportdata in reportData"
                      on-finish-render=""
                      eventname="ndrOrder"
                    >
                      <td>
                        <div style="width: 150px" class="ng-binding">
                          17-Jan-2022 02:10 PM
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          biweekly reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 100px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          smart_reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          J K SOLANKI
                        </div>
                      </td>
                      <td>
                        <div style="width: 150px">
                          <span ng-if="reportdata.from" class="ng-binding ng-scope">
                            1 Jan 2022 - 15 Jan 2022
                          </span>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px">
                          <a
                            target="_blank"
                            ng-if="reportdata.url &amp;&amp; !isAdminAsSeller &amp;&amp; !reportdata.is_report_downloadable"
                            href="https://kr-shipmultichannel.s3.ap-southeast-1.amazonaws.com/imports/c_31064/reports/104293465_biweekly_report_jan_2022smart.xls"
                            class="ng-scope"
                          >
                            <span
                              class="p-xs text-center ng-binding accept-btn"
                              style="
                                color: white;
                                max-width: 72px;
                                display: block;
                                border-radius: 2px;
                              "
                              >Download
                            </span>
                          </a>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px" class="ng-binding">9.22 kB</div>
                      </td>
                    </tr>
                    <tr
                      class="br ng-scope"
                      ng-repeat="reportdata in reportData"
                      on-finish-render=""
                      eventname="ndrOrder"
                    >
                      <td>
                        <div style="width: 150px" class="ng-binding">
                          2-Jan-2022 01:52 PM
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          monthly reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 100px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          smart_reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          J K SOLANKI
                        </div>
                      </td>
                      <td>
                        <div style="width: 150px">
                          <span ng-if="reportdata.from" class="ng-binding ng-scope">
                            1 Dec 2021 - 31 Dec 2021
                          </span>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px">
                          <a
                            target="_blank"
                            ng-if="reportdata.url &amp;&amp; !isAdminAsSeller &amp;&amp; !reportdata.is_report_downloadable"
                            href="https://kr-shipmultichannel.s3.ap-southeast-1.amazonaws.com/imports/c_31064/reports/1555811982_monthly_smart_report_jan_2022.xls"
                            class="ng-scope"
                          >
                            <span
                              class="p-xs text-center ng-binding accept-btn"
                              style="
                                color: white;
                                max-width: 72px;
                                display: block;
                                border-radius: 2px;
                              "
                              >Download
                            </span>
                          </a>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px" class="ng-binding">9.22 kB</div>
                      </td>
                    </tr>
                    <tr
                      class="br ng-scope"
                      ng-repeat="reportdata in reportData"
                      on-finish-render=""
                      eventname="ndrOrder"
                    >
                      <td>
                        <div style="width: 150px" class="ng-binding">
                          17-Dec-2021 02:07 PM
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          biweekly reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 100px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          smart_reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          J K SOLANKI
                        </div>
                      </td>
                      <td>
                        <div style="width: 150px">
                          <span ng-if="reportdata.from" class="ng-binding ng-scope">
                            1 Dec 2021 - 15 Dec 2021
                          </span>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px">
                          <a
                            target="_blank"
                            ng-if="reportdata.url &amp;&amp; !isAdminAsSeller &amp;&amp; !reportdata.is_report_downloadable"
                            href="https://kr-shipmultichannel.s3.ap-southeast-1.amazonaws.com/imports/c_31064/reports/1586187528_biweekly_report_dec_2021smart.xls"
                            class="ng-scope"
                          >
                            <span
                              class="p-xs text-center ng-binding accept-btn"
                              style="
                                color: white;
                                max-width: 72px;
                                display: block;
                                border-radius: 2px;
                              "
                              >Download
                            </span>
                          </a>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px" class="ng-binding">9.22 kB</div>
                      </td>
                    </tr>
                    <tr
                      class="br ng-scope"
                      ng-repeat="reportdata in reportData"
                      on-finish-render=""
                      eventname="ndrOrder"
                    >
                      <td>
                        <div style="width: 150px" class="ng-binding">
                          2-Dec-2021 02:19 PM
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          monthly reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 100px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          smart_reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          J K SOLANKI
                        </div>
                      </td>
                      <td>
                        <div style="width: 150px">
                          <span ng-if="reportdata.from" class="ng-binding ng-scope">
                            1 Nov 2021 - 30 Nov 2021
                          </span>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px">
                          <a
                            target="_blank"
                            ng-if="reportdata.url &amp;&amp; !isAdminAsSeller &amp;&amp; !reportdata.is_report_downloadable"
                            href="https://kr-shipmultichannel.s3.ap-southeast-1.amazonaws.com/imports/c_31064/reports/626915315_monthly_smart_report_dec_2021.xls"
                            class="ng-scope"
                          >
                            <span
                              class="p-xs text-center ng-binding accept-btn"
                              style="
                                color: white;
                                max-width: 72px;
                                display: block;
                                border-radius: 2px;
                              "
                              >Download
                            </span>
                          </a>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px" class="ng-binding">9.22 kB</div>
                      </td>
                    </tr>
                    <tr
                      class="br ng-scope"
                      ng-repeat="reportdata in reportData"
                      on-finish-render=""
                      eventname="ndrOrder"
                    >
                      <td>
                        <div style="width: 150px" class="ng-binding">
                          17-Nov-2021 02:33 PM
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          biweekly reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 100px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          smart_reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          J K SOLANKI
                        </div>
                      </td>
                      <td>
                        <div style="width: 150px">
                          <span ng-if="reportdata.from" class="ng-binding ng-scope">
                            1 Nov 2021 - 15 Nov 2021
                          </span>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px">
                          <a
                            target="_blank"
                            ng-if="reportdata.url &amp;&amp; !isAdminAsSeller &amp;&amp; !reportdata.is_report_downloadable"
                            href="https://kr-shipmultichannel.s3.ap-southeast-1.amazonaws.com/imports/c_31064/reports/1671470606_biweekly_report_nov_2021smart.xls"
                            class="ng-scope"
                          >
                            <span
                              class="p-xs text-center ng-binding accept-btn"
                              style="
                                color: white;
                                max-width: 72px;
                                display: block;
                                border-radius: 2px;
                              "
                              >Download
                            </span>
                          </a>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px" class="ng-binding">9.22 kB</div>
                      </td>
                    </tr>
                    <tr
                      class="br ng-scope"
                      ng-repeat="reportdata in reportData"
                      on-finish-render=""
                      eventname="ndrOrder"
                    >
                      <td>
                        <div style="width: 150px" class="ng-binding">
                          2-Nov-2021 01:20 PM
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          monthly reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 100px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          smart_reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          J K SOLANKI
                        </div>
                      </td>
                      <td>
                        <div style="width: 150px">
                          <span ng-if="reportdata.from" class="ng-binding ng-scope">
                            1 Oct 2021 - 31 Oct 2021
                          </span>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px">
                          <a
                            target="_blank"
                            ng-if="reportdata.url &amp;&amp; !isAdminAsSeller &amp;&amp; !reportdata.is_report_downloadable"
                            href="https://kr-shipmultichannel.s3.ap-southeast-1.amazonaws.com/imports/c_31064/reports/1222280052_monthly_smart_report_nov_2021.xls"
                            class="ng-scope"
                          >
                            <span
                              class="p-xs text-center ng-binding accept-btn"
                              style="
                                color: white;
                                max-width: 72px;
                                display: block;
                                border-radius: 2px;
                              "
                              >Download
                            </span>
                          </a>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px" class="ng-binding">9.22 kB</div>
                      </td>
                    </tr>
                    <tr
                      class="br ng-scope"
                      ng-repeat="reportdata in reportData"
                      on-finish-render=""
                      eventname="ndrOrder"
                    >
                      <td>
                        <div style="width: 150px" class="ng-binding">
                          17-Oct-2021 02:25 PM
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          biweekly reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 100px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          smart_reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          J K SOLANKI
                        </div>
                      </td>
                      <td>
                        <div style="width: 150px">
                          <span ng-if="reportdata.from" class="ng-binding ng-scope">
                            1 Oct 2021 - 15 Oct 2021
                          </span>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px">
                          <a
                            target="_blank"
                            ng-if="reportdata.url &amp;&amp; !isAdminAsSeller &amp;&amp; !reportdata.is_report_downloadable"
                            href="https://kr-shipmultichannel.s3.ap-southeast-1.amazonaws.com/imports/c_31064/reports/230708758_biweekly_report_oct_2021smart.xls"
                            class="ng-scope"
                          >
                            <span
                              class="p-xs text-center ng-binding accept-btn"
                              style="
                                color: white;
                                max-width: 72px;
                                display: block;
                                border-radius: 2px;
                              "
                              >Download
                            </span>
                          </a>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px" class="ng-binding">9.22 kB</div>
                      </td>
                    </tr>
                    <tr
                      class="br ng-scope"
                      ng-repeat="reportdata in reportData"
                      on-finish-render=""
                      eventname="ndrOrder"
                    >
                      <td>
                        <div style="width: 150px" class="ng-binding">
                          2-Oct-2021 01:18 PM
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          monthly reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 100px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          smart_reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          J K SOLANKI
                        </div>
                      </td>
                      <td>
                        <div style="width: 150px">
                          <span ng-if="reportdata.from" class="ng-binding ng-scope">
                            1 Sep 2021 - 30 Sep 2021
                          </span>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px">
                          <a
                            target="_blank"
                            ng-if="reportdata.url &amp;&amp; !isAdminAsSeller &amp;&amp; !reportdata.is_report_downloadable"
                            href="https://kr-shipmultichannel.s3.ap-southeast-1.amazonaws.com/imports/c_31064/reports/741175516_monthly_smart_report_oct_2021.xls"
                            class="ng-scope"
                          >
                            <span
                              class="p-xs text-center ng-binding accept-btn"
                              style="
                                color: white;
                                max-width: 72px;
                                display: block;
                                border-radius: 2px;
                              "
                              >Download
                            </span>
                          </a>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px" class="ng-binding">9.22 kB</div>
                      </td>
                    </tr>
          
                    <tr
                      class="br ng-scope"
                      ng-repeat="reportdata in reportData"
                      on-finish-render=""
                      eventname="ndrOrder"
                    >
                      <td>
                        <div style="width: 150px" class="ng-binding">
                          17-Sep-2021 02:11 PM
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          biweekly reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 100px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          smart_reports
                        </div>
                      </td>
                      <td>
                        <div
                          style="width: 150px; text-transform: capitalize"
                          class="ng-binding"
                        >
                          J K SOLANKI
                        </div>
                      </td>
                      <td>
                        <div style="width: 150px">
                          <span ng-if="reportdata.from" class="ng-binding ng-scope">
                            1 Sep 2021 - 15 Sep 2021
                          </span>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px">
                          <a
                            target="_blank"
                            ng-if="reportdata.url &amp;&amp; !isAdminAsSeller &amp;&amp; !reportdata.is_report_downloadable"
                            href="https://kr-shipmultichannel.s3.ap-southeast-1.amazonaws.com/imports/c_31064/reports/1961444348_biweekly_report_sep_2021smart.xls"
                            class="ng-scope"
                          >
                            <span
                              class="p-xs text-center ng-binding accept-btn"
                              style="
                                color: white;
                                max-width: 72px;
                                display: block;
                                border-radius: 2px;
                              "
                              >Download
                            </span>
                          </a>
                        </div>
                      </td>
                      <td>
                        <div style="width: 80px" class="ng-binding">9.22 kB</div>
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