@extends('layouts.main')

@section('title')
Add Warehouse  
@endsection

@section('class')
warehouse-page complaints-page courier-priority user-page single-order-page
@endsection

<!--
@section('page_title_con')
@endsection
-->

@section('body')
<!-- main-body-panel start -->

<div class="main-panel">
          <div class="content-wrapper">
            <div class="text-right mb-2">
              <button class="btn btn-add-warehouse btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="mdi mdi-plus"></i> Add Warehouse Address </button>
            </div>
            <!-- body content -->
            <div class="card-body">
              <h3 class="heading">Add Warehouse Addresses for Pickup and Return</h3>


              
              <div class="row">
              @foreach ($records as $record)
                <div class="col-md-5">
                  <div class="address-wrapper">
                    <p> {{ $record->address1.', '.$record->address2 }}, <br> {{ $record->landmark }}, <br> {{ $record->city.', '.$record->state.', '.$record->pincode }} <br>
                      <i class="fa fa-phone"></i> {{ $record->phone_no }} <br>
                    </p>
                  </div>
                </div>
                @endforeach
             
                <div class="col-md-2"></div>
              </div>
            
            </div>
            <!-- modal content start -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div>
                    <div class="modal-header">
                      <strong>Add Warehouse Address</strong>
                      <span>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </span>
                    </div>
                    <div class="modal-body">
                      <form class="ng-pristine ng-invalid ng-touched addWarehouseAddressForm" action="{{ route('user.user.addWarehouseAddress') }}" method="POST">
                      @csrf
                        <div>

                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Address Line 1*</label>
                                  <input name="address1" type="text" class="form-control order-inputs ng-pristine ng-invalid ng-touched">
                                  <span class="text-danger error-text address1_err"></span>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Address Line 2*</label>
                                  <input name="address2" type="text" class="form-control order-inputs ng-untouched ng-pristine ng-invalid">
                                  <span class="text-danger error-text address2_err"></span>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Land Mark</label>
                                  <input name="landmark" type="text" class="form-control order-inputs ng-untouched ng-pristine ng-valid">
                                  <span class="text-danger error-text landmark_err"></span>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>City*</label>
                                  <input name="city" type="text" class="form-control order-inputs ng-untouched ng-pristine">
                                  <span class="text-danger error-text city_err"></span>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>State*</label>
                                  <input name="state" type="text" class="form-control order-inputs ng-untouched ng-pristine">
                                  <span class="text-danger error-text state_err"></span>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Pincode*</label>
                                  <input name="pincode" type="text" class="form-control order-inputs ng-untouched ng-pristine ng-invalid">
                                  <span class="text-danger error-text pincode_err"></span>
                                </div>
                              </div>
                            </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group d-flex">
                                <div>
                                  <label>Phone No*</label>
                                  <input name="phone_no" type="text"  class="form-control order-inputs ng-untouched ng-pristine ng-invalid">
                                  <span class="text-danger error-text phone_no_err"></span>
                                </div>
                              </div>   
                            </div>
                          </div>

                        </div>
                        <div class="form-group mb0 text-end">
                          <button type="submit" class="addWarehouseAddressSubmit">Submit</button>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                        
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- modal content end -->
          </div>
          <!-- main-panel ends -->
        </div>

<!-- main-body-panel end -->
@endsection