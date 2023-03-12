@extends('layouts.main')

@section('title')
Cod Remittance
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
             
              <div class="type-header mt-sm">Cod Remittance</div>
              <div class="mt-sm mb-lg">
                <p class="type-header-2" style="margin-bottom: 0">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
                
              </div>
            </div>
            <!-- card wrarpper -->
            <div class="row pt-sm order-cards">

              <div class="col-lg-3 col-sm-6 p-md">
                <div class="card" style="height: 90px">
                  <p class="card-heading">TOTAL COD GENERATED</p>
                  <div class="d-inline-block">
                    <h3 ng-if="weightDiscrepancies" class="card-title ng-binding ng-scope">
                    &#8377; <?= $total_cod_generated; ?>
                    </h3>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 p-md">
                <div class="card" style="height: 90px">
                  <p class="card-heading">
                    TOTAL BILL ADJUSTED &nbsp;
                  </p>
                  <div class="d-inline-block">
                    <h3 ng-if="weightDiscrepancies" class="card-title ng-binding ng-scope">
                    &#8377; <?= $total_bill_adjusted; ?>
                    </h3>
                 
                  </div>
                </div>
              </div>

               <div class="col-lg-3 col-sm-6 p-md">
                <div class="card" style="height: 90px">
                  <p class="card-heading">
                  TOTAL REFUND ADJUSTED &nbsp;
                  </p>
                  <div class="d-inline-block">
                    <h3 ng-if="weightDiscrepancies" class="card-title ng-binding ng-scope">
                    Coming Soon
                    </h3>
                 
                  </div>
                </div>
              </div>

               <div class="col-lg-3 col-sm-6 p-md">
                <div class="card" style="height: 90px">
                  <p class="card-heading">
                  TOTAL ADVANCED HOLD &nbsp;
                  </p>
                  <div class="d-inline-block">
                    <h3 ng-if="weightDiscrepancies" class="card-title ng-binding ng-scope">
                    Coming Soon
                    </h3>
                 
                  </div>
                </div>
              </div>
              
            </div>

            <div class="row pt-sm order-cards">

                <div class="col-lg-3 col-sm-6 p-md">
                <div class="card" style="height: 90px">
                    <p class="card-heading">TOTAL COD REMITTED</p>
                    <div class="d-inline-block">
                    <h3 ng-if="weightDiscrepancies" class="card-title ng-binding ng-scope">
                    &#8377; <?= $total_cod_remmitted; ?>
                    </h3>
                    </div>
                </div>
                </div>

                <div class="col-lg-3 col-sm-6 p-md">
                <div class="card" style="height: 90px">
                    <p class="card-heading">
                    WALLET TRANSFERED &nbsp;
                    </p>
                    <div class="d-inline-block">
                    <h3 ng-if="weightDiscrepancies" class="card-title ng-binding ng-scope">
                    &#8377; <?= $wallet_transfered; ?>
                    </h3>
                
                    </div>
                </div>
                </div>

                <div class="col-lg-3 col-sm-6 p-md">
                <div class="card" style="height: 90px">
                    <p class="card-heading">
                    UNREMITTED COD &nbsp;
                    </p>
                    <div class="d-inline-block">
                    <h3 ng-if="weightDiscrepancies" class="card-title ng-binding ng-scope">
                    &#8377; <?= $unremmited_cod; ?>
                    </h3>
                
                    </div>
                </div>
                </div>

                <div class="col-lg-3 col-sm-6 p-md">
                <div class="card" style="height: 90px">
                    <p class="card-heading">
                    NEXT REMITTANCE &nbsp;
                    </p>
                    <div class="d-inline-block">
                    <h3 ng-if="weightDiscrepancies" class="card-title ng-binding ng-scope">
                    &#8377; <?= $next_remmitance; ?>
                    </h3>
                
                    </div>
                </div>
                </div>

                </div>

            <!-- filter -->
          
         
            <div class="bg-white py-4 px-2">

              <div class="row mt-3">
                <div class="col-md-10 col-lg-10">
                  <ul class="nav nav-pills border-0 p-0" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 closedEl btn-primary active" id="pills-tab" data-bs-toggle="pill" data-bs-target="#remittance" type="button" role="tab" aria-controls="pills" aria-selected="true"> Remittance </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 closedEl btn-primary" id="pills-tab" data-bs-toggle="pill" data-bs-target="#walletTransactions" type="button" role="tab" aria-controls="pills" aria-selected="false"> Wallet Transactions </button>
                    </li>

                    <li class="nav-item" role="presentation">
                      <button class="btn nav-link mr-1 closedEl btn-primary" id="pills-tab" data-bs-toggle="pill" data-bs-target="#shippingCharges" type="button" role="tab" aria-controls="pills" aria-selected="false"> Shipping Charges </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="btn nav-link mr-1 closedEl btn-primary" id="pills-tab" data-bs-toggle="pill" data-bs-target="#billSummary" type="button" role="tab" aria-controls="pills" aria-selected="false"> Bill Summary </button>
                    </li>

                
                 
                  </ul>
                </div>
                
              </div>

              
              <div class="tab-content border-0" id="pills-tabContent">


                <!--- Tab remittance start ---->
                <div class="tab-pane fade show active" id="remittance" role="tabpanel" aria-labelledby="pills-tab" tabindex="0">
                  <div class="row latest-order-div">
                    
                    <div class="filter-container-custom col-12"></div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead">
                              <table class="table table-striped table-hover no-wrap cod_remittance" id="cod_remittance">
                                <thead>
                                  <tr>
                                    <th style="text-align: center">Remitted Date</th>
                                    <th style="text-align: center">Remitted Amount</th>
                                    <th style="text-align: center">Note</th>
                                    <th style="text-align: center">Action</th>
                                    <th style="text-align: center">Customer</th>
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
                <!--- Tab remittance end ---->

                <!--- Tab walletTransactions start ---->
                <div class="tab-pane" id="walletTransactions" role="tabpanel" aria-labelledby="pills-tab" tabindex="0">
                  <div class="row latest-order-div">
                    
                  <div class="filter-container-custom col-12"></div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead1">
                              <table class="table table-striped table-hover no-wrap cod_wallet_transactions" id="cod_wallet_transactions">
                                <thead>
                                  <tr>
                                    <th style="text-align: center">Date & Time </th>
                                    <th style="text-align: center">Transaction ID </th>
                                    <th style="text-align: center">Debit</th>
                                    <th style="text-align: center">Credit</th>
                                    <th style="text-align: center">Balance</th>
                                    <th style="text-align: center">Remarks</th>
                                  
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
                <!--- Tab walletTransactions end ---->

               <!--- Tab shippingCharges start ---->
                <div class="tab-pane" id="shippingCharges" role="tabpanel" aria-labelledby="pills-tab" tabindex="0">
                  <div class="row latest-order-div">
                    
                  <div class="filter-container-custom col-12"></div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead1">
                              <table class="table table-striped table-hover no-wrap" id="">
                                <thead>
                                  <tr>
                                
                                    <th style="text-align: center">Invoice No.</th>
                                    <th style="text-align: center">Invoice Date</th>
                                    <th style="text-align: center">Order Id</th>
                                    <th style="text-align: center">AWB No.</th>
                                    <th style="text-align: center">Logistics</th>
                                    <th style="text-align: center">Order Status</th>
                                    <th style="text-align: center">Order Date</th>
                                    <th style="text-align: center">Zone</th>
                                    <th style="text-align: center">Billing Weight</th>
                                    <th style="text-align: center">Total Freight Charge</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th colspan="10">
                                            <center>
                                                <h3 style="color: #616161;">Coming Soon</h3>
                                            </center>
                                        </th>
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
                <!--- Tab shippingCharges end ---->

                <!--- Tab billSummary start ---->
                <div class="tab-pane" id="billSummary" role="tabpanel" aria-labelledby="pills-tab" tabindex="0">
                  <div class="row latest-order-div">
                    
                  <div class="filter-container-custom col-12"></div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div>
                        <div class="card p-0">
                          <div class="card-body p-0">
                            <div class="table-responsive order-container tableFixHead1">
                              <table class="table table-striped table-hover no-wrap" id="">
                                <thead>
                                  <tr>
                                    <th style="text-align: center">ID</th>
                                    <th style="text-align: center">Date</th>
                                    <th style="text-align: center">Due Date</th>
                                    <th style="text-align: center">Amount</th>
                                    <th style="text-align: center">COD Adjusted</th>
                                    <th style="text-align: center">Credit Note</th>
                                    <th style="text-align: center">TDS</th>
                                    <th style="text-align: center">Wallet Adjusted</th>
                                    <th style="text-align: center">Amount Received</th>
                                    <th style="text-align: center">Paid Amount</th>
                                    <th style="text-align: center">Outstanding</th>
                                    <th style="text-align: center">Status</th>
                                    <th style="text-align: center">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th colspan="13">
                                            <center>
                                                <h3 style="color: #616161;">Coming Soon</h3>
                                            </center>
                                        </th>
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
                <!--- Tab billSummary end ---->


            </div>
          </div>

           
            
            
          </div>
        </div>




            <!-- viewDetailModal start -->
            <div class="modal fade viewDetailModal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                  <div>
                  <div class="modal-header">
                    <strong>COD Remittance Detail</strong>
                    <span>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </span>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                    <div>
                    <table id="cod_remittance_order_detail_table" class="table table-bordered cod_remittance_order_detail_table">
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
            </div>
            <!-- viewDetailModal end -->


<!-- main-body-panel end -->
@endsection