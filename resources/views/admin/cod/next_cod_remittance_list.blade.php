@extends('layouts.main')

@section('title')
Next COD Remmitance
@endsection

@section('class')
warehouse-page complaints-page rate-calculator-page recharge-page payment-recharge user-remittance-page reports-page user-page single-order-page
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
                  <h3 class="fs-20px text-dark mb-0">Next COD Remmitance</h3>
                </div>
               
              </div>
      
              <div class="tab-content border-0" id="pills-tabContent">


                <!--- Tab search start ---->
                <div class="tab-pane fade show active" id="search" role="tabpanel" aria-labelledby="pills-tab" tabindex="0">
                  <div class="row latest-order-div">
                    
                    <div class="filter-container-custom col-12">
                        <div class="row">
                            <div class="col-5">
                            </div>

                            <div class="col-5">
                                <div class="group-position1  d-lg-block">
                                    <div class="d-flex align-items-center ng-star-inserted">

                                        <div class="form-group mb0">
                                            <input name="from_date" id="from_date" type="date" class="form-control" placeholder="From Date">
                                        </div>

                                        <div class="form-group mb0">
                                            <input name="to_date" id="to_date" type="date" class="form-control" placeholder="To Date">
                                        </div>

                                        <div class="form-group mb0 text-end">
                                            <button type="button" name="seach_next_cod_remittance_list" id="seach_next_cod_remittance_list">Submit</button>

                                            <button type="button" name="reset" id="reset_next_cod_remittance_list" class="btn btn-primary">Reset</button>
                                        </div>

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
                              <table class="table table-striped table-hover no-wrap nextCodRemittanceList" id="nextCodRemittanceList">
                                <thead>
                                  <tr>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Order Count</th>
                                    <th>COD Remmitance Amount</th>
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
                <!--- Tab search end ---->

                
              </div>
              

            </div>
          </div>
        </div>
        <!-- main-body-panel end -->
@endsection



