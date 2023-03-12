@extends('layouts.main')

@section('title')
Shipping Price
@endsection

@section('class')
warehouse-page complaints-page courier-priority shipping-page single-order-page request_weight_freeze_page
@endsection

<!-- warehouse-page complaints-page rate-calculator-page recharge-page payment-recharge user-remittance-page reports-page request_weight_freeze_page
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
                    <i class="mdi mdi-plus"></i> Add Shipping Price 
                  </button>
                </div>

                <div class="type-header mt-sm">
                Shipping Price List
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
                <i class="mdi mdi-plus"></i> Add Single Shipping Price </button>
            </div>-->
            <!-- body content -->
            <div class="card-body">
              <!--<h3 class="heading">Shipping Price List</h3>-->


              
              <div class="row">

                  <div class="col-12 table-responsive">
                    <table id="shippingTable" class="table table-bordered admin_shippings">
                        <thead>
                            <tr>
                                <th>Logistic Name</th>
                                <th>Rule</th>
                                <th>Rule Index</th>
                                <th>Shipment Type</th>
                                <th>Within Zone</th>
                                <th>Within City</th>
                                <th>Within State</th>
                                <th>Metro</th>
                                <th>Metro 2</th>
                                <th>Rest Of India</th>
                                <th>Rest Of India 2</th>
                                <th>Special Zone</th>
                                <th>Is COD Return</th>
             
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
                      <strong>Add Single Shipping Price</strong>
                      <span>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </span>
                    </div>
                    <div class="modal-body">
                      <form class="ng-pristine ng-invalid ng-touched addShippingForm" action="{{ route('shippings.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div>


                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Logistic*</label>
                              <select name="logistic_id" class="form-select">
                                  <option value="">Select</option>
                                  @foreach ($logistics as $logistic)
                                  <option value="{{$logistic->id}}"> {{$logistic->logistic_name}}</option>
                                  @endforeach
                              </select>
                              <span class="text-danger error-text logistic_id_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Rule*</label>
                              <select name="rule" class="form-select">
                                  <option value="">Select</option>
                                  @foreach ($rules as $rule)
                                  <option value="{{$rule->id}}"> {{$rule->name}}</option>
                                  @endforeach
                              </select>
                              <span class="text-danger error-text rule_err"></span>
                            </div>
                          </div>

                        </div>

      

                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Shipment Type*</label>
                              <select name="shipment_type" class="form-select">
                                  <option value="1">Forward</option>
                                  <option value="2">Reverse</option>
                              </select>
                              <span class="text-danger error-text shipment_type_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Rule Index*</label>
                              <input name="rule_index" type="text" class="form-control">
                              <span class="text-danger error-text rule_index_err"></span>
                            </div>
                          </div>

                        </div>


                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Within Zone*</label>
                              <input name="within_zone" type="text" class="form-control">
                              <span class="text-danger error-text within_zone_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Within City*</label>
                              <input name="within_city" type="text" class="form-control">
                              <span class="text-danger error-text within_city_err"></span>
                            </div>
                          </div>

                        </div>


                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Within State*</label>
                              <input name="within_state" type="text" class="form-control">
                              <span class="text-danger error-text within_state_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Metro*</label>
                              <input name="metro" type="text" class="form-control">
                              <span class="text-danger error-text metro_err"></span>
                            </div>
                          </div>

                        </div>



                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Metro 2*</label>
                              <input name="metro_2" type="text" class="form-control">
                              <span class="text-danger error-text metro_2_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Rest Of India*</label>
                              <input name="rest_of_india" type="text" class="form-control">
                              <span class="text-danger error-text rest_of_india_err"></span>
                            </div>
                          </div>

                        </div>


                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Rest Of India 2*</label>
                              <input name="rest_of_india_2" type="text" class="form-control">
                              <span class="text-danger error-text rest_of_india_2_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Special Zone*</label>
                              <input name="special_zone" type="text" class="form-control">
                              <span class="text-danger error-text special_zone_err"></span>
                            </div>
                          </div>

                        </div>


                        <div class="row">

                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Cod Charge Return Or Not*</label>
                              <select name="is_cod_charge_return" class="form-select">
                                  <option value="1">No</option>
                                  <option value="2">Yes</option>
                              </select>
                              <span class="text-danger error-text is_cod_charge_return_err"></span>
                            </div>
                          </div>

                        </div>

                        
                        </div>
                        <div class="form-group mb0 text-end">
                          <button type="submit" class="addShippingSubmit">Submit</button>
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
                      <strong>Edit Single Shipping Price</strong>
                      <span>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </span>
                    </div>
                    <div class="modal-body">
                      <form class="ng-pristine ng-invalid ng-touched updateShippingForm" action="{{ route('shippings.update') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div>


                        <div class="row">

                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Logistic*</label>
                                <select id="edit_logistic_id" name="edit_logistic_id" class="form-select">
                                    <option value="">Select</option>
                                    @foreach ($logistics as $logistic)
                                    <option value="{{$logistic->id}}"> {{$logistic->logistic_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger error-text edit_logistic_id_err"></span>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Rule*</label>
                                <select id="edit_rule" name="edit_rule" class="form-select">
                                    <option value="">Select</option>
                                    @foreach ($rules as $rule)
                                    <option value="{{$rule->id}}"> {{$rule->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger error-text edit_rule_err"></span>
                              </div>
                            </div>

                        </div>



                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Shipment Type*</label>
                              <select id="edit_shipment_type" name="edit_shipment_type" class="form-select">
                                  <option value="1">Forward</option>
                                  <option value="2">Reverse</option>
                              </select>
                              <span class="text-danger error-text edit_shipment_type_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Rule Index*</label>
                              <input id="edit_rule_index" name="edit_rule_index" type="text" class="form-control">
                              <span class="text-danger error-text edit_rule_index_err"></span>
                            </div>
                          </div>

                        </div>


                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Within Zone*</label>
                              <input id="edit_within_zone" name="edit_within_zone" type="text" class="form-control">
                              <span class="text-danger error-text edit_within_zone_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Within City*</label>
                              <input id="edit_within_city" name="edit_within_city" type="text" class="form-control">
                              <span class="text-danger error-text edit_within_city_err"></span>
                            </div>
                          </div>

                        </div>


                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Within State*</label>
                              <input id="edit_within_state" name="edit_within_state" type="text" class="form-control">
                              <span class="text-danger error-text edit_within_state_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Metro*</label>
                              <input id="edit_metro" name="edit_metro" type="text" class="form-control">
                              <span class="text-danger error-text edit_metro_err"></span>
                            </div>
                          </div>

                        </div>



                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Metro 2*</label>
                              <input id="edit_metro_2" name="edit_metro_2" type="text" class="form-control">
                              <span class="text-danger error-text edit_metro_2_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Rest Of India*</label>
                              <input id="edit_rest_of_india" name="edit_rest_of_india" type="text" class="form-control">
                              <span class="text-danger error-text edit_rest_of_india_err"></span>
                            </div>
                          </div>

                        </div>


                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Rest Of India 2*</label>
                              <input id="edit_rest_of_india_2" name="edit_rest_of_india_2" type="text" class="form-control">
                              <span class="text-danger error-text edit_rest_of_india_2_err"></span>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Special Zone*</label>
                              <input id="edit_special_zone" name="edit_special_zone" type="text" class="form-control">
                              <span class="text-danger error-text edit_special_zone_err"></span>
                            </div>
                          </div>

                        </div>


                        <div class="row">

                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Cod Charge Return Or Not*</label>
                              <select id="edit_is_cod_charge_return" name="edit_is_cod_charge_return" class="form-select">
                                  <option value="1">No</option>
                                  <option value="2">Yes</option>
                              </select>
                              <span class="text-danger error-text edit_is_cod_charge_return_err"></span>
                            </div>
                          </div>

                        </div>

                        
                    
                        </div>
                        <div class="form-group mb0 text-end">
                        <input type="hidden" id="shipping_id" name="shipping_id" value="0">
                          <button type="submit" id="updateShippingSubmit">Submit</button>
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

