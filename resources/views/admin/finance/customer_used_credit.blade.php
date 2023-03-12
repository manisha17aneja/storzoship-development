@extends('layouts.main')

@section('title')
Customer Used Credit
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
                  <h3 class="fs-20px text-dark mb-0">Customer Used Credit</h3>
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
                                            <select id="user_id" name="user_id" class="form-select">
                                                <option value="">Select Customer</option>
                                                @foreach ($users as $user)
                                                <option value="{{$user->id}}"> {{$user->name.' - '.$user->email}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group mb0">
                                            <input name="from_date" id="from_date" type="date" class="form-control" placeholder="From Date">
                                        </div>

                                        <div class="form-group mb0">
                                            <input name="to_date" id="to_date" type="date" class="form-control" placeholder="To Date">
                                        </div>

                                        <div class="form-group mb0 text-end">
                                            <button type="button" name="seach_used_credit" id="seach_used_credit" class="btn-purple-bg px-5 h-3rem rounded-0-5rem text-white fs-14px">Submit</button>

                                            <button type="button" name="reset" id="reset_used_credit" class="btn-purple-border text-purple px-5 h-3rem rounded-0-5rem ml-16px fs-14px">Reset</button>

                  
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
                              <table class="table table-striped table-hover no-wrap customerUsedCredit" id="customerUsedCredit">
                                <thead>
                                  <tr>
                                  <th style="text-align: center">Customer Name</th>
                                    <th style="text-align: center">Customer Email</th>
                                    <th style="text-align: center">Used Credit Amount</th>
                                    <th style="text-align: center">Allow Credit Amount</th>
                                   
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



