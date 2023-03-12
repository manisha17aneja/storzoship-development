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
                      Add Warehouse Addresses for Pickup and Return
                   
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
              @foreach ($records as $record)
                <div class="col-md-5">
                  <div class="address-wrapper">
                    <p> {{ $record->warehouse_name}} <br> {{ $record->address_line_1.', '.$record->address_line_2 }}, <br>{{ $record->city.', '.$record->state.', '.$record->pincode }} <br>
                      @if($record->contact_no) 
                        <i class="fa fa-phone"></i> {{ $record->contact_no }} <br>
                      @endif
                      @if($record->contact_email)
                        <i class="fa fa-envelope"></i> {{ $record->contact_email }} <br>
                      @endif
                      @if($record->website)
                        <i class="fa fa-globe"></i> {{ $record->website }} <br>
                      @endif

                      <button class="btn btn-sm btn-info updateAddress" data-id="{{ $record->id }}" data-bs-toggle="modal" data-bs-target=".editModal">Edit</button> 
                      <button class="btn btn-sm btn-danger deleteAddress" data-id="{{ $record->id }}">Delete</button></td>
                    </p>
                  </div>
                </div>
                @endforeach
                {{ $records->links() }}
                <div class="col-md-2"></div>
              </div>
              
            <!-- <div class="row">

                  <div class="col-12 table-responsive">
                    <table id="addressTable" class="table table-bordered admin_address">
                        <thead>
                            <tr>
                               
                                <th>Warehouse Name</th>
                                <th>Contact Person Name</th>
                                <th>Contact No</th>
                                <th>Contact Email</th>
                                <th>Website</th>
                                <th>Address Line 1</th>
                                <th>Address Line 2</th>
                                <th>Pincode</th>
                                <th>State</th>
                                <th>City</th>
                                <th width="100px">Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>

              </div>-->
              

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

