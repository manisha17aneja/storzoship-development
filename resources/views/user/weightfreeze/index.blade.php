@extends('layouts.main')

@section('title')
Weight Freeze
@endsection

@section('class')
warehouse-page complaints-page rate-calculator-page recharge-page payment-recharge user-remittance-page reports-page request_weight_freeze_page
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
              <div class="header-wrapper">
                <div class="right-strip-wrapper" ng-click="showAboutWF()">
                  Learn More in 2 Minutes
                  <img src="https://app.shiprocket.in/app/img/arrow-right.png" style="width: 14px; margin-left: 5px" />
                </div>
                <div class="type-header mt-sm">
                  Weight Freeze
                  <br />
                </div>
                <div class="mt-sm mb-lg">
                  <p class="type-header-2" style="font-size: 16px">
                    Experience weight discrepancy free shipping with our 'Weight Freeze'
                    feature. You can freeze the weight of your products' shipments by sharing
                    <br />data and sample images or by giving consent on the freezing
                    recommendations made by Shiprocket based on your shipment history.
                  </p>
                  <div class="mt-sm mb-lg" style="display: none">
                    <span class="link">Learn how to request Weight Freeze</span>
                  </div>
                </div>
                <div class="pull-right navbar-right ml mt-sm" style="display: none">
                  <div
                    class="fileupload button fileupload-new mr-sm pfx"
                    tooltip-placement="bottom"
                    uib-tooltip="Bulk Upload"
                  >
                    <button
                      type="button"
                      class="btn btn-default upload"
                      ng-click="bulkUploadWeight()"
                    >
                      <i class="icon-logout"></i>
                    </button>
                  </div>
                  <div
                    class="button mr mr-0 pfx ng-scope"
                    ng-controller="DownloadController"
                    tooltip-placement="bottom"
                    uib-tooltip="Download File"
                  >
                    <button
                      ng-disabled="btnDisable"
                      type="button"
                      class="btn btn-default download"
                      id="downloadCSV"
                      data-name="order"
                      ng-click="downloadCSV('product-weight-freeze?export=1', 'Weight_freeze',false,7)"
                    >
                      <i class="icon-login"></i>
                    </button>
                  </div>
                </div>
              </div>
              
              
              <div class="row mt-3">
                <div class="col-md-10 col-lg-10">
                  <ul class="nav nav-pills border-0 p-0" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 closedEl btn-primary active" id="pills-closed-tab" data-bs-toggle="pill" data-bs-target="#pills-closed" type="button" role="tab" aria-controls="pills-closed" aria-selected="true">Action Required</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 pending btn-primary" id="pills-pending-tab" data-bs-toggle="pill" data-bs-target="#pills-pending" type="button" role="tab" aria-controls="pills-pending" aria-selected="false" tabindex="-1">Request Raised</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 Delivered btn-primary" id="pills-Delivered-tab" data-bs-toggle="pill" data-bs-target="#pills-Delivered" type="button" role="tab" aria-controls="pills-Delivered" aria-selected="false" tabindex="-1"> Request Accepted </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 Undelivered btn-primary" id="pills-Undelivered-tab" data-bs-toggle="pill" data-bs-target="#pills-Undelivered" type="button" role="tab" aria-controls="pills-Undelivered" aria-selected="false" tabindex="-1">Request Rejected</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 RTOIntransit btn-primary" id="pills-RTOIntransit-tab" data-bs-toggle="pill" data-bs-target="#pills-RTOIntransit" type="button" role="tab" aria-controls="pills-RTOIntransit" aria-selected="false" tabindex="-1"> Not Requested </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 RTODelivered btn-primary" id="pills-RTODelivered-tab" data-bs-toggle="pill" data-bs-target="#pills-RTODelivered" type="button" role="tab" aria-controls="pills-RTODelivered" aria-selected="false" tabindex="-1"> Un-freezed </button>
                    </li>
                   
                  </ul>
                </div>
                
              </div>
              <div class="tab-content border-0" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-closed" role="tabpanel" aria-labelledby="pills-closed-tab" tabindex="0">
                  <div class="row latest-order-div">
                    <div class="panel-body">
                      <div class="bl">
                        <table id="ordertable" class="table table-bordered table-hover ndr-pannelColsed-wrapper" style="display: table" ng-class="noData ? 'fixed-table': ''">
                          <thead>
                            <tr>
                              <th class="checkbox-col">
                                <input type="checkbox" name="" id="">
                              </th>
                              <th>
                                <div style="width: 150px">PID</div>
                              </th>
                              <th>
                                <div style="width: 150px">Product Name</div>
                              </th>
                              <th>
                                <div style="width: 100px">SKU Summary</div>
                              </th>
                              <th>
                                <div style="width: 150px">Channel</div>
                              </th>
                              <th>
                                <div style="width: 150px">Package Details</div>
                              </th>
                              <th>
                                <div style="width: 80px">Images</div>
                              </th>
                              <th>
                                <div style="width: 80px">Weight Freeze Status</div>
                              </th>
                              <th>
                                <div style="width: 80px">Action</div>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="br ng-scope" ng-repeat="reportdata in reportData" on-finish-render="" eventname="ndrOrder" style="">
                              <td class="checkbox-col"> 
                                <input type="checkbox" name="" id="">
                              </td>
                              <td>
                                <span class="link ng-binding" ng-click="viewAllOrders(listData.pid)">
                                  111982555
                               </span>
                              </td>
                              <td>
                                <div style="width: 150px; text-transform: capitalize" class="ng-binding">
                                  Nike shoes
                                </div>
                              </td>
                              <td>
                                <div>
                                  <span style="display: block"
                                    ><b>Channel SKU: </b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding">Nike-shoes-9</span>
                                  </span>
                                  <span style="display: block"
                                    ><b>Channel Product Id:</b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding"></span>
                                  </span>
                                </div>
                              </td>
                              <td>
                                <div data-fixed-width="true" class="orderchannel processing-order-table-channel">
                                  <div style="text-align: center;"><img  class="ng-scope" src="https://app.shiprocket.in/app/img/logo/CS.png?v=1">
                                  </div>
                               </div>
                              </td>
                              <td>
                                <div>
                                  <div class="clearfix dimension-wrapper">
                                    <div>
                                      <b>Dimensions</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding"
                                        >0.000 x 0.000 x 0.000 cm</span
                                      >
                                      <br />
                                      <b>Dead Weight</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding">0.000 Kg</span>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              
                              <td>
                                <div>
                                  Not Added
                                </div>
                              </td>
                              <td>
                                <div>
                                  Not Requested
                                </div>
                              </td>
                              <td>
                                <button
                                class="btn btn-primary btn-sm w-100i"
                                style="background-color: white; color: #285fdb; border-color: #007bff"
                              >
                                Request Weight Freeze
                              </button>
                              
                              </td>
                            </tr>
                            <tr class="br ng-scope" ng-repeat="reportdata in reportData" on-finish-render="" eventname="ndrOrder" style="">
                              <td class="checkbox-col"> 
                                <input type="checkbox" name="" id="">
                              </td>
                              <td>
                                <span class="link ng-binding" ng-click="viewAllOrders(listData.pid)">
                                  111982555
                               </span>
                              </td>
                              <td>
                                <div style="width: 150px; text-transform: capitalize" class="ng-binding">
                                  Nike shoes
                                </div>
                              </td>
                              <td>
                                <div>
                                  <span style="display: block"
                                    ><b>Channel SKU: </b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding">Nike-shoes-9</span>
                                  </span>
                                  <span style="display: block"
                                    ><b>Channel Product Id:</b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding"></span>
                                  </span>
                                </div>
                              </td>
                              <td>
                                <div data-fixed-width="true" class="orderchannel processing-order-table-channel">
                                  <div style="text-align: center;"><img  class="ng-scope" src="https://app.shiprocket.in/app/img/logo/CS.png?v=1">
                                  </div>
                               </div>
                              </td>
                              <td>
                                <div>
                                  <div class="clearfix dimension-wrapper">
                                    <div>
                                      <b>Dimensions</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding"
                                        >0.000 x 0.000 x 0.000 cm</span
                                      >
                                      <br />
                                      <b>Dead Weight</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding">0.000 Kg</span>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              
                              <td>
                                <div>
                                  Not Added
                                </div>
                              </td>
                              <td>
                                <div>
                                  Not Requested
                                </div>
                              </td>
                              <td>
                                <button
                                class="btn btn-primary btn-sm w-100i"
                                style="background-color: white; color: #285fdb; border-color: #007bff"
                              >
                                Request Weight Freeze
                              </button>
                              
                              </td>
                            </tr>
                            <tr class="br ng-scope" ng-repeat="reportdata in reportData" on-finish-render="" eventname="ndrOrder" style="">
                              <td class="checkbox-col"> 
                                <input type="checkbox" name="" id="">
                              </td>
                              <td>
                                <span class="link ng-binding" ng-click="viewAllOrders(listData.pid)">
                                  111982555
                               </span>
                              </td>
                              <td>
                                <div style="width: 150px; text-transform: capitalize" class="ng-binding">
                                  Nike shoes
                                </div>
                              </td>
                              <td>
                                <div>
                                  <span style="display: block"
                                    ><b>Channel SKU: </b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding">Nike-shoes-9</span>
                                  </span>
                                  <span style="display: block"
                                    ><b>Channel Product Id:</b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding"></span>
                                  </span>
                                </div>
                              </td>
                              <td>
                                <div data-fixed-width="true" class="orderchannel processing-order-table-channel">
                                  <div style="text-align: center;"><img  class="ng-scope" src="https://app.shiprocket.in/app/img/logo/CS.png?v=1">
                                  </div>
                               </div>
                              </td>
                              <td>
                                <div>
                                  <div class="clearfix dimension-wrapper">
                                    <div>
                                      <b>Dimensions</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding"
                                        >0.000 x 0.000 x 0.000 cm</span
                                      >
                                      <br />
                                      <b>Dead Weight</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding">0.000 Kg</span>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              
                              <td>
                                <div>
                                  Not Added
                                </div>
                              </td>
                              <td>
                                <div>
                                  Not Requested
                                </div>
                              </td>
                              <td>
                                <button
                                class="btn btn-primary btn-sm w-100i"
                                style="background-color: white; color: #285fdb; border-color: #007bff"
                              >
                                Request Weight Freeze
                              </button>
                              
                              </td>
                            </tr>
                            <tr class="br ng-scope" ng-repeat="reportdata in reportData" on-finish-render="" eventname="ndrOrder" style="">
                              <td class="checkbox-col"> 
                                <input type="checkbox" name="" id="">
                              </td>
                              <td>
                                <span class="link ng-binding" ng-click="viewAllOrders(listData.pid)">
                                  111982555
                               </span>
                              </td>
                              <td>
                                <div style="width: 150px; text-transform: capitalize" class="ng-binding">
                                  Nike shoes
                                </div>
                              </td>
                              <td>
                                <div>
                                  <span style="display: block"
                                    ><b>Channel SKU: </b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding">Nike-shoes-9</span>
                                  </span>
                                  <span style="display: block"
                                    ><b>Channel Product Id:</b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding"></span>
                                  </span>
                                </div>
                              </td>
                              <td>
                                <div data-fixed-width="true" class="orderchannel processing-order-table-channel">
                                  <div style="text-align: center;"><img  class="ng-scope" src="https://app.shiprocket.in/app/img/logo/CS.png?v=1">
                                  </div>
                               </div>
                              </td>
                              <td>
                                <div>
                                  <div class="clearfix dimension-wrapper">
                                    <div>
                                      <b>Dimensions</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding"
                                        >0.000 x 0.000 x 0.000 cm</span
                                      >
                                      <br />
                                      <b>Dead Weight</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding">0.000 Kg</span>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              
                              <td>
                                <div>
                                  Not Added
                                </div>
                              </td>
                              <td>
                                <div>
                                  Not Requested
                                </div>
                              </td>
                              <td>
                                <button
                                class="btn btn-primary btn-sm w-100i"
                                style="background-color: white; color: #285fdb; border-color: #007bff"
                              >
                                Request Weight Freeze
                              </button>
                              
                              </td>
                            </tr>
                            <tr class="br ng-scope" ng-repeat="reportdata in reportData" on-finish-render="" eventname="ndrOrder" style="">
                              <td class="checkbox-col"> 
                                <input type="checkbox" name="" id="">
                              </td>
                              <td>
                                <span class="link ng-binding" ng-click="viewAllOrders(listData.pid)">
                                  111982555
                               </span>
                              </td>
                              <td>
                                <div style="width: 150px; text-transform: capitalize" class="ng-binding">
                                  Nike shoes
                                </div>
                              </td>
                              <td>
                                <div>
                                  <span style="display: block"
                                    ><b>Channel SKU: </b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding">Nike-shoes-9</span>
                                  </span>
                                  <span style="display: block"
                                    ><b>Channel Product Id:</b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding"></span>
                                  </span>
                                </div>
                              </td>
                              <td>
                                <div data-fixed-width="true" class="orderchannel processing-order-table-channel">
                                  <div style="text-align: center;"><img  class="ng-scope" src="https://app.shiprocket.in/app/img/logo/CS.png?v=1">
                                  </div>
                               </div>
                              </td>
                              <td>
                                <div>
                                  <div class="clearfix dimension-wrapper">
                                    <div>
                                      <b>Dimensions</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding"
                                        >0.000 x 0.000 x 0.000 cm</span
                                      >
                                      <br />
                                      <b>Dead Weight</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding">0.000 Kg</span>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              
                              <td>
                                <div>
                                  Not Added
                                </div>
                              </td>
                              <td>
                                <div>
                                  Not Requested
                                </div>
                              </td>
                              <td>
                                <button
                                class="btn btn-primary btn-sm w-100i"
                                style="background-color: white; color: #285fdb; border-color: #007bff"
                              >
                                Request Weight Freeze
                              </button>
                              
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
                    <div class="panel-body">
                      <div class="bl">
                        <table id="ordertable" class="table table-bordered table-hover ndr-pannelColsed-wrapper" style="display: table" ng-class="noData ? 'fixed-table': ''">
                          <thead>
                            <tr>
                              <th class="checkbox-col">
                                <input type="checkbox" name="" id="">
                              </th>
                              <th>
                                <div style="width: 150px">PID</div>
                              </th>
                              <th>
                                <div style="width: 150px">Product Name</div>
                              </th>
                              <th>
                                <div style="width: 100px">SKU Summary</div>
                              </th>
                              <th>
                                <div style="width: 150px">Channel</div>
                              </th>
                              <th>
                                <div style="width: 150px">Package Details</div>
                              </th>
                              <th>
                                <div style="width: 80px">Images</div>
                              </th>
                              <th>
                                <div style="width: 80px">Weight Freeze Status</div>
                              </th>
                              <th>
                                <div style="width: 80px">Action</div>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="br ng-scope" ng-repeat="reportdata in reportData" on-finish-render="" eventname="ndrOrder" style="">
                              <td colspan="11">
                                <div class="bg-white text-center custom_class" style="margin: 30px; border-radius: 20px; padding: 50px 0">
                                    <img alt="" style="width: 200px" src="https://app.shiprocket.in/app/img/no_data/remittance_0.png">
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
                                          <a ng-href="https://support.shiprocket.in/support/solutions/articles/43000463560-how-soon-can-i-receive-my-cod-amount-in-my-bank-account-" target="_blank" role="button" class="btn btn-oval bg-info-dark ng-binding" style="padding: 10px 60px; margin-bottom: 15px; margin-right: 10px" href="https://support.shiprocket.in/support/solutions/articles/43000463560-how-soon-can-i-receive-my-cod-amount-in-my-bank-account-">Learn More</a>
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
                    <div class="panel-body">
                      <div class="bl">
                        <table id="ordertable" class="table table-bordered table-hover ndr-pannelColsed-wrapper" style="display: table" ng-class="noData ? 'fixed-table': ''">
                          <thead>
                            <tr>
                              <th class="checkbox-col">
                                <input type="checkbox" name="" id="">
                              </th>
                              <th>
                                <div style="width: 150px">PID</div>
                              </th>
                              <th>
                                <div style="width: 150px">Product Name</div>
                              </th>
                              <th>
                                <div style="width: 100px">SKU Summary</div>
                              </th>
                              <th>
                                <div style="width: 150px">Channel</div>
                              </th>
                              <th>
                                <div style="width: 150px">Package Details</div>
                              </th>
                              <th>
                                <div style="width: 80px">Images</div>
                              </th>
                              <th>
                                <div style="width: 80px">Weight Freeze Status</div>
                              </th>
                              <th>
                                <div style="width: 80px">Action</div>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="br ng-scope" ng-repeat="reportdata in reportData" on-finish-render="" eventname="ndrOrder" style="">
                              <td colspan="11">
                                <div class="bg-white text-center custom_class" style="margin: 30px; border-radius: 20px; padding: 50px 0">
                                    <img alt="" style="width: 200px" src="https://app.shiprocket.in/app/img/no_data/remittance_0.png">
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
                                          <a ng-href="https://support.shiprocket.in/support/solutions/articles/43000463560-how-soon-can-i-receive-my-cod-amount-in-my-bank-account-" target="_blank" role="button" class="btn btn-oval bg-info-dark ng-binding" style="padding: 10px 60px; margin-bottom: 15px; margin-right: 10px" href="https://support.shiprocket.in/support/solutions/articles/43000463560-how-soon-can-i-receive-my-cod-amount-in-my-bank-account-">Learn More</a>
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
                    <div class="panel-body">
                      <div class="bl">
                        <table id="ordertable" class="table table-bordered table-hover ndr-pannelColsed-wrapper" style="display: table" ng-class="noData ? 'fixed-table': ''">
                          <thead>
                            <tr>
                              <th class="checkbox-col">
                                <input type="checkbox" name="" id="">
                              </th>
                              <th>
                                <div style="width: 150px">PID</div>
                              </th>
                              <th>
                                <div style="width: 150px">Product Name</div>
                              </th>
                              <th>
                                <div style="width: 100px">SKU Summary</div>
                              </th>
                              <th>
                                <div style="width: 150px">Channel</div>
                              </th>
                              <th>
                                <div style="width: 150px">Package Details</div>
                              </th>
                              <th>
                                <div style="width: 80px">Images</div>
                              </th>
                              <th>
                                <div style="width: 80px">Weight Freeze Status</div>
                              </th>
                              <th>
                                <div style="width: 80px">Action</div>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="br ng-scope" ng-repeat="reportdata in reportData" on-finish-render="" eventname="ndrOrder" style="">
                              <td colspan="11">
                                <div class="bg-white text-center custom_class" style="margin: 30px; border-radius: 20px; padding: 50px 0">
                                    <img alt="" style="width: 200px" src="https://app.shiprocket.in/app/img/no_data/remittance_0.png">
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
                                          <a ng-href="https://support.shiprocket.in/support/solutions/articles/43000463560-how-soon-can-i-receive-my-cod-amount-in-my-bank-account-" target="_blank" role="button" class="btn btn-oval bg-info-dark ng-binding" style="padding: 10px 60px; margin-bottom: 15px; margin-right: 10px" href="https://support.shiprocket.in/support/solutions/articles/43000463560-how-soon-can-i-receive-my-cod-amount-in-my-bank-account-">Learn More</a>
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
                    <div class="panel-body">
                      <div class="bl">
                        <table id="ordertable" class="table table-bordered table-hover ndr-pannelColsed-wrapper" style="display: table" ng-class="noData ? 'fixed-table': ''">
                          <thead>
                            <tr>
                              <th class="checkbox-col">
                                <input type="checkbox" name="" id="">
                              </th>
                              <th>
                                <div style="width: 150px">PID</div>
                              </th>
                              <th>
                                <div style="width: 150px">Product Name</div>
                              </th>
                              <th>
                                <div style="width: 100px">SKU Summary</div>
                              </th>
                              <th>
                                <div style="width: 150px">Channel</div>
                              </th>
                              <th>
                                <div style="width: 150px">Package Details</div>
                              </th>
                              <th>
                                <div style="width: 80px">Images</div>
                              </th>
                              <th>
                                <div style="width: 80px">Weight Freeze Status</div>
                              </th>
                              <th>
                                <div style="width: 80px">Action</div>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="br ng-scope" ng-repeat="reportdata in reportData" on-finish-render="" eventname="ndrOrder" style="">
                              <td class="checkbox-col"> 
                                <input type="checkbox" name="" id="">
                              </td>
                              <td>
                                <span class="link ng-binding" ng-click="viewAllOrders(listData.pid)">
                                  111982555
                               </span>
                              </td>
                              <td>
                                <div style="width: 150px; text-transform: capitalize" class="ng-binding">
                                  Nike shoes
                                </div>
                              </td>
                              <td>
                                <div>
                                  <span style="display: block"
                                    ><b>Channel SKU: </b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding">Nike-shoes-9</span>
                                  </span>
                                  <span style="display: block"
                                    ><b>Channel Product Id:</b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding"></span>
                                  </span>
                                </div>
                              </td>
                              <td>
                                <div data-fixed-width="true" class="orderchannel processing-order-table-channel">
                                  <div style="text-align: center;"><img  class="ng-scope" src="https://app.shiprocket.in/app/img/logo/CS.png?v=1">
                                  </div>
                               </div>
                              </td>
                              <td>
                                <div>
                                  <div class="clearfix dimension-wrapper">
                                    <div>
                                      <b>Dimensions</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding"
                                        >0.000 x 0.000 x 0.000 cm</span
                                      >
                                      <br />
                                      <b>Dead Weight</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding">0.000 Kg</span>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              
                              <td>
                                <div>
                                  Not Added
                                </div>
                              </td>
                              <td>
                                <div>
                                  Not Requested
                                </div>
                              </td>
                              <td>
                                <button
                                class="btn btn-primary btn-sm w-100i"
                                style="background-color: white; color: #285fdb; border-color: #007bff"
                              >
                                Request Weight Freeze
                              </button>
                              
                              </td>
                            </tr>
                            <tr class="br ng-scope" ng-repeat="reportdata in reportData" on-finish-render="" eventname="ndrOrder" style="">
                              <td class="checkbox-col"> 
                                <input type="checkbox" name="" id="">
                              </td>
                              <td>
                                <span class="link ng-binding" ng-click="viewAllOrders(listData.pid)">
                                  111982555
                               </span>
                              </td>
                              <td>
                                <div style="width: 150px; text-transform: capitalize" class="ng-binding">
                                  Nike shoes
                                </div>
                              </td>
                              <td>
                                <div>
                                  <span style="display: block"
                                    ><b>Channel SKU: </b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding">Nike-shoes-9</span>
                                  </span>
                                  <span style="display: block"
                                    ><b>Channel Product Id:</b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding"></span>
                                  </span>
                                </div>
                              </td>
                              <td>
                                <div data-fixed-width="true" class="orderchannel processing-order-table-channel">
                                  <div style="text-align: center;"><img  class="ng-scope" src="https://app.shiprocket.in/app/img/logo/CS.png?v=1">
                                  </div>
                               </div>
                              </td>
                              <td>
                                <div>
                                  <div class="clearfix dimension-wrapper">
                                    <div>
                                      <b>Dimensions</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding"
                                        >0.000 x 0.000 x 0.000 cm</span
                                      >
                                      <br />
                                      <b>Dead Weight</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding">0.000 Kg</span>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              
                              <td>
                                <div>
                                  Not Added
                                </div>
                              </td>
                              <td>
                                <div>
                                  Not Requested
                                </div>
                              </td>
                              <td>
                                <button
                                class="btn btn-primary btn-sm w-100i"
                                style="background-color: white; color: #285fdb; border-color: #007bff"
                              >
                                Request Weight Freeze
                              </button>
                              
                              </td>
                            </tr>
                            <tr class="br ng-scope" ng-repeat="reportdata in reportData" on-finish-render="" eventname="ndrOrder" style="">
                              <td class="checkbox-col"> 
                                <input type="checkbox" name="" id="">
                              </td>
                              <td>
                                <span class="link ng-binding" ng-click="viewAllOrders(listData.pid)">
                                  111982555
                               </span>
                              </td>
                              <td>
                                <div style="width: 150px; text-transform: capitalize" class="ng-binding">
                                  Nike shoes
                                </div>
                              </td>
                              <td>
                                <div>
                                  <span style="display: block"
                                    ><b>Channel SKU: </b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding">Nike-shoes-9</span>
                                  </span>
                                  <span style="display: block"
                                    ><b>Channel Product Id:</b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding"></span>
                                  </span>
                                </div>
                              </td>
                              <td>
                                <div data-fixed-width="true" class="orderchannel processing-order-table-channel">
                                  <div style="text-align: center;"><img  class="ng-scope" src="https://app.shiprocket.in/app/img/logo/CS.png?v=1">
                                  </div>
                               </div>
                              </td>
                              <td>
                                <div>
                                  <div class="clearfix dimension-wrapper">
                                    <div>
                                      <b>Dimensions</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding"
                                        >0.000 x 0.000 x 0.000 cm</span
                                      >
                                      <br />
                                      <b>Dead Weight</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding">0.000 Kg</span>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              
                              <td>
                                <div>
                                  Not Added
                                </div>
                              </td>
                              <td>
                                <div>
                                  Not Requested
                                </div>
                              </td>
                              <td>
                                <button
                                class="btn btn-primary btn-sm w-100i"
                                style="background-color: white; color: #285fdb; border-color: #007bff"
                              >
                                Request Weight Freeze
                              </button>
                              
                              </td>
                            </tr>
                            <tr class="br ng-scope" ng-repeat="reportdata in reportData" on-finish-render="" eventname="ndrOrder" style="">
                              <td class="checkbox-col"> 
                                <input type="checkbox" name="" id="">
                              </td>
                              <td>
                                <span class="link ng-binding" ng-click="viewAllOrders(listData.pid)">
                                  111982555
                               </span>
                              </td>
                              <td>
                                <div style="width: 150px; text-transform: capitalize" class="ng-binding">
                                  Nike shoes
                                </div>
                              </td>
                              <td>
                                <div>
                                  <span style="display: block"
                                    ><b>Channel SKU: </b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding">Nike-shoes-9</span>
                                  </span>
                                  <span style="display: block"
                                    ><b>Channel Product Id:</b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding"></span>
                                  </span>
                                </div>
                              </td>
                              <td>
                                <div data-fixed-width="true" class="orderchannel processing-order-table-channel">
                                  <div style="text-align: center;"><img  class="ng-scope" src="https://app.shiprocket.in/app/img/logo/CS.png?v=1">
                                  </div>
                               </div>
                              </td>
                              <td>
                                <div>
                                  <div class="clearfix dimension-wrapper">
                                    <div>
                                      <b>Dimensions</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding"
                                        >0.000 x 0.000 x 0.000 cm</span
                                      >
                                      <br />
                                      <b>Dead Weight</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding">0.000 Kg</span>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              
                              <td>
                                <div>
                                  Not Added
                                </div>
                              </td>
                              <td>
                                <div>
                                  Not Requested
                                </div>
                              </td>
                              <td>
                                <button
                                class="btn btn-primary btn-sm w-100i"
                                style="background-color: white; color: #285fdb; border-color: #007bff"
                              >
                                Request Weight Freeze
                              </button>
                              
                              </td>
                            </tr>
                            <tr class="br ng-scope" ng-repeat="reportdata in reportData" on-finish-render="" eventname="ndrOrder" style="">
                              <td class="checkbox-col"> 
                                <input type="checkbox" name="" id="">
                              </td>
                              <td>
                                <span class="link ng-binding" ng-click="viewAllOrders(listData.pid)">
                                  111982555
                               </span>
                              </td>
                              <td>
                                <div style="width: 150px; text-transform: capitalize" class="ng-binding">
                                  Nike shoes
                                </div>
                              </td>
                              <td>
                                <div>
                                  <span style="display: block"
                                    ><b>Channel SKU: </b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding">Nike-shoes-9</span>
                                  </span>
                                  <span style="display: block"
                                    ><b>Channel Product Id:</b>
                                    <br />
                                    <span style="color: #707070" class="ng-binding"></span>
                                  </span>
                                </div>
                              </td>
                              <td>
                                <div data-fixed-width="true" class="orderchannel processing-order-table-channel">
                                  <div style="text-align: center;"><img  class="ng-scope" src="https://app.shiprocket.in/app/img/logo/CS.png?v=1">
                                  </div>
                               </div>
                              </td>
                              <td>
                                <div>
                                  <div class="clearfix dimension-wrapper">
                                    <div>
                                      <b>Dimensions</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding"
                                        >0.000 x 0.000 x 0.000 cm</span
                                      >
                                      <br />
                                      <b>Dead Weight</b>
                                      <br />
                                      <span style="color: #707070" class="ng-binding">0.000 Kg</span>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              
                              <td>
                                <div>
                                  Not Added
                                </div>
                              </td>
                              <td>
                                <div>
                                  Not Requested
                                </div>
                              </td>
                              <td>
                                <button
                                class="btn btn-primary btn-sm w-100i"
                                style="background-color: white; color: #285fdb; border-color: #007bff"
                              >
                                Request Weight Freeze
                              </button>
                              
                              </td>
                            </tr>
                           
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-RTODelivered" role="tabpanel" aria-labelledby="pills-RTODelivered-tab" tabindex="0">
                  <div class="row latest-order-div">
                    <div class="panel-body">
                      <div class="bl">
                        <table id="ordertable" class="table table-bordered table-hover ndr-pannelColsed-wrapper" style="display: table" ng-class="noData ? 'fixed-table': ''">
                          <thead>
                            <tr>
                              <th class="checkbox-col">
                                <input type="checkbox" name="" id="">
                              </th>
                              <th>
                                <div style="width: 150px">PID</div>
                              </th>
                              <th>
                                <div style="width: 150px">Product Name</div>
                              </th>
                              <th>
                                <div style="width: 100px">SKU Summary</div>
                              </th>
                              <th>
                                <div style="width: 150px">Channel</div>
                              </th>
                              <th>
                                <div style="width: 150px">Package Details</div>
                              </th>
                              <th>
                                <div style="width: 80px">Images</div>
                              </th>
                              <th>
                                <div style="width: 80px">Weight Freeze Status</div>
                              </th>
                              <th>
                                <div style="width: 80px">Action</div>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="br ng-scope" ng-repeat="reportdata in reportData" on-finish-render="" eventname="ndrOrder" style="">
                              <td colspan="11">
                                <div class="bg-white text-center custom_class" style="margin: 30px; border-radius: 20px; padding: 50px 0">
                                    <img alt="" style="width: 200px" src="https://app.shiprocket.in/app/img/no_data/remittance_0.png">
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
                                          <a ng-href="https://support.shiprocket.in/support/solutions/articles/43000463560-how-soon-can-i-receive-my-cod-amount-in-my-bank-account-" target="_blank" role="button" class="btn btn-oval bg-info-dark ng-binding" style="padding: 10px 60px; margin-bottom: 15px; margin-right: 10px" href="https://support.shiprocket.in/support/solutions/articles/43000463560-how-soon-can-i-receive-my-cod-amount-in-my-bank-account-">Learn More</a>
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