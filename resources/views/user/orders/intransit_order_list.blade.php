@extends('layouts.main')

@section('title')
Pickup Address 
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

                  <div class="right-strip-wrapper" ng-click="showAboutWF()" data-bs-toggle="modal" data-bs-target=".addModal">
                    <button class="btn btn-add-warehouse btn-primary" data-bs-toggle="modal" data-bs-target=".addModal">
                      <i class="mdi mdi-plus"></i> Add Pickup Address
                    </button>
                  </div>

                  <div class="type-header mt-sm">
                  Pickup Address
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
                    <table id="addressTable" class="table table-bordered admin_intransit">
                        <thead>
                            <tr>   
                              <th>Order ID</th>
                              <th>Order Number</th>
                              <th>Airwaybill Number</th>
                              <th>Logistic Name</th>
                              <th>Customer Name</th>
                              <th>Customer Number</th>
                              <th>Order Type</th>
                              <th>Created Date</th>
                              <th>Last Status Date</th>
                              <th>Order Status</th>
                              <th width="100px">Action</th>
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


        
            <!-- addModal start -->
            <div class="modal fade addModal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div>
                    <div class="modal-header">
                      <strong>Add Pickup Address</strong>
                      <span>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </span>
                    </div>
                    <div class="modal-body">
                      <form class="ng-pristine ng-invalid ng-touched addAddressForm" action="{{ route('address.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div>


                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Warehouse Name*</label>
                              <input name="name" type="text" class="form-control">
                              <span class="text-danger error-text name_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Contact Person Name*</label>
                              <input name="contact_person_name" type="text" class="form-control">
                              <span class="text-danger error-text contact_person_name_err"></span>
                            </div>
                          </div>

                        </div>

                       
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Contact No*</label>
                              <input name="contact_no" type="text" class="form-control">
                              <span class="text-danger error-text contact_no_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Contact Email*</label>
                              <input name="contact_email" type="text" class="form-control">
                              <span class="text-danger error-text contact_email_err"></span>
                            </div>
                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Website*</label>
                              <input name="website" type="text" class="form-control">
                              <span class="text-danger error-text website_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Address Line 1*</label>
                              <input name="address_line_1" type="text" class="form-control">
                              <span class="text-danger error-text address_line_1_err"></span>
                            </div>
                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Address Line 2*</label>
                              <input name="address_line_2" type="text" class="form-control">
                              <span class="text-danger error-text address_line_2_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Pincode*</label>
                              <input name="pincode" type="text" class="form-control">
                              <span class="text-danger error-text pincode_err"></span>
                            </div>
                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>State*</label>
                              <input name="state" type="text" class="form-control">
                              <span class="text-danger error-text state_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>City*</label>
                              <input name="city" type="text" class="form-control">
                              <span class="text-danger error-text city_err"></span>
                            </div>
                          </div>

                        </div>

                        
                        </div>
                        <div class="form-group mb0 text-end">
                          <button type="submit" class="addAddressSubmit">Submit</button>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                        
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- addModal end -->




              <!-- editModal start -->
            <div class="modal fade editModal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div>
                    <div class="modal-header">
                      <strong>Edit Pickup Address</strong>
                      <span>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </span>
                    </div>
                    <div class="modal-body">
                      <form class="ng-pristine ng-invalid ng-touched updateAddressForm" action="{{ route('address.update') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div>

                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Warehouse Name*</label>
                              <input id="edit_name" name="edit_name" type="text" class="form-control">
                              <span class="text-danger error-text edit_name_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Contact Person Name*</label>
                              <input id="edit_contact_person_name" name="edit_contact_person_name" type="text" class="form-control">
                              <span class="text-danger error-text edit_contact_person_name_err"></span>
                            </div>
                          </div>

                        </div>

                       
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Contact No*</label>
                              <input id="edit_contact_no" name="edit_contact_no" type="text" class="form-control">
                              <span class="text-danger error-text edit_contact_no_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Contact Email*</label>
                              <input id="edit_contact_email" name="edit_contact_email" type="text" class="form-control">
                              <span class="text-danger error-text edit_contact_email_err"></span>
                            </div>
                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Website*</label>
                              <input id="edit_website" name="edit_website" type="text" class="form-control">
                              <span class="text-danger error-text edit_website_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Address Line 1*</label>
                              <input id="edit_address_line_1" name="edit_address_line_1" type="text" class="form-control">
                              <span class="text-danger error-text edit_address_line_1_err"></span>
                            </div>
                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Address Line 2*</label>
                              <input id="edit_address_line_2" name="edit_address_line_2" type="text" class="form-control">
                              <span class="text-danger error-text edit_address_line_2_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Pincode*</label>
                              <input id="edit_pincode" name="edit_pincode" type="text" class="form-control">
                              <span class="text-danger error-text edit_pincode_err"></span>
                            </div>
                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>State*</label>
                              <input id="edit_state" name="edit_state" type="text" class="form-control">
                              <span class="text-danger error-text edit_state_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>City*</label>
                              <input id="edit_city" name="edit_city" type="text" class="form-control">
                              <span class="text-danger error-text edit_city_err"></span>
                            </div>
                          </div>

                        </div>


                    
                        </div>
                        <div class="form-group mb0 text-end">
                        <input type="hidden" id="address_id" name="address_id" value="0">
                          <button type="submit" id="updateAddressSubmit">Submit</button>
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

