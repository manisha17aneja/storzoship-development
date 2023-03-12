@extends('layouts.main')

@section('title')
Customer Credit
@endsection

@section('class')
warehouse-page complaints-page courier-priority address-page single-order-page request_weight_freeze_page
@endsection

<!--
@section('page_title_con')
@endsection
-->

@section('body')
<!-- main-body-panel start -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<div class="main-panel">
          <div class="content-wrapper">


            <div class="bg-white py-4 px-2">
                <div class="header-wrapper">

                  <div class="right-strip-wrapper" ng-click="showAboutWF()" data-bs-toggle="modal" data-bs-target=".editModal">
                    <button class="btn btn-add-warehouse btn-primary" data-bs-toggle="modal" data-bs-target=".editModal">
                      <i class="mdi mdi-plus"></i> Allow Credit
                    </button>
                  </div>

                  <div class="type-header mt-sm">
                  Customer Credit
                    <br/>
                  </div>
                  <div class="mt-sm mb-lg">
                    <p class="type-header-2" style="font-size: 16px">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    </p>
                  </div>
                
                </div>
            </div>

            <!--<div class="text-right mb-2">
              <button class="btn btn-add-warehouse btn-primary" data-bs-toggle="modal" data-bs-target=".addModal">
                <i class="mdi mdi-plus"></i> Add Pickup Address </button>
            </div>-->
            <!-- body content -->
            <div class="card-body">
              <!--<h3 class="heading">Pickup Address</h3>-->


              
              <div class="row">

                  <div class="col-12 table-responsive">
                    <table id="customer_allow_credit" class="table table-bordered customer_allow_credit">
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Customer Email</th>
                                <th>Allow Credit Amount</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>

              </div>
              

            </div>

     

          </div>
          <!-- main-panel ends -->
        </div>


        
            <!-- editModal start -->
            <div class="modal fade editModal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div>
                    <div class="modal-header">
                      <strong>Allow Credit</strong>
                      <span>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </span>
                    </div>
                    <div class="modal-body">
                      <form class="ng-pristine ng-invalid ng-touched updateCustomerAllowCreditForm" action="{{ route('finance.update') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div>


                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Select Customer*</label>
                              <select id="customer_id" name="customer_id" class="form-select allow_customer_id">
                                  <option value="">Select Customer</option>
                                  @foreach ($users as $data)
                                  <option value="{{$data->id}}"> {{$data->name.' - '.$data->email}}</option>
                                  @endforeach
                              </select>
                              <span class="text-danger error-text customer_id_err"></span>
                            </div>
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Allow Credit ?</label>
                              <label class="switch switch-left-right"><input class="switch-input allow_credit" id="allow_credit" name="allow_credit" type="checkbox"><span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
                              <span class="text-danger error-text allow_credit_err"></span>
                            </div>
                          </div>
                        </div>

                       
                        <div class="row div_allow_credit_limit" style="display: none">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Credit Limit</label>
                              <input id="allow_credit_limit" name="allow_credit_limit" type="text" class="form-control" value="">
                              <span class="text-danger error-text allow_credit_limit_err"></span>
                            </div>
                          </div>
                        </div>

                        </div>
                        <div class="form-group mb0 text-end">
                          <button type="submit" class="updateCustomerAllowCreditSubmit">Submit</button>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                        
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- editModal end -->




 


<!-- main-body-panel end -->
@endsection

