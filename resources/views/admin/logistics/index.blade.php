@extends('layouts.main')

@section('title')
Logistics  
@endsection

@section('class')
warehouse-page complaints-page courier-priority logistic-page single-order-page request_weight_freeze_page
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
                    <i class="mdi mdi-plus"></i> Add Logistic
                  </button>
                </div>

                <div class="type-header mt-sm">
                Logistics
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
                <i class="mdi mdi-plus"></i> Add Logistic </button>
            </div>-->
            <!-- body content -->
            <div class="card-body">
              <!--<h3 class="heading">Logistics</h3>-->


              
              <div class="row">

                  <div class="col-12 table-responsive">
                    <table id="logisticTable" class="table table-bordered admin_logistics">
                        <thead>
                            <tr>
                          
                                <th>Logistic Name</th>
                                <th>API Name</th>
                                <th>Cod Price</th>
                                <th>Cod Percentage</th>
                                <th>Image</th>
                                <th>Is_active</th>
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
                      <strong>Add Logistic</strong>
                      <span>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </span>
                    </div>
                    <div class="modal-body">
                      <form class="ng-pristine ng-invalid ng-touched addLogisticForm" action="{{ route('logistics.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div>


                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Logistic Name*</label>
                              <input name="name" type="text" class="form-control">
                              <span class="text-danger error-text name_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Api Name*</label>
                              <input name="api_name" type="text" class="form-control">
                              <span class="text-danger error-text api_name_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Cod Price*</label>
                              <input name="cod_price" type="text" class="form-control">
                              <span class="text-danger error-text cod_price_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Cod Percentage*</label>
                              <input name="cod_percentage" type="text" class="form-control">
                              <span class="text-danger error-text cod_percentage_err"></span>
                            </div>
                          </div>
                        </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Image</label>
                                <input name="image" type="file" class="">
                                <span class="text-danger error-text image_err"></span>
                              </div>
                            </div>
                          </div>

                        
                        </div>
                        <div class="form-group mb0 text-end">
                          <button type="submit" class="addLogisticSubmit">Submit</button>
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
                      <strong>Edit Logistic</strong>
                      <span>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </span>
                    </div>
                    <div class="modal-body">
                      <form class="ng-pristine ng-invalid ng-touched updateLogisticForm" action="{{ route('logistics.update') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Logistic Name*</label>
                              <input id="edit_name" name="edit_name" type="text" class="form-control" placeholder="Logistic Name">
                              <span class="text-danger error-text edit_name_err"></span>
                            </div>
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Api Name*</label>
                              <input id="edit_api_name" name="edit_api_name" type="text" class="form-control">
                              <span class="text-danger error-text edit_api_name_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Cod Price*</label>
                              <input id="edit_cod_price" name="edit_cod_price" type="text" class="form-control">
                              <span class="text-danger error-text edit_cod_price_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Cod Percentage*</label>
                              <input id="edit_cod_percentage" name="edit_cod_percentage" type="text" class="form-control">
                              <span class="text-danger error-text edit_cod_percentage_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Image</label>
                                <input name="image" type="file" class="">
                                <span class="text-danger error-text image_err"></span>
                              </div>
                            </div>
                          </div>

                        
                    
                        </div>
                        <div class="form-group mb0 text-end">
                        <input type="hidden" id="logistic_id" name="logistic_id" value="0">
                          <button type="submit" id="updateLogisticSubmit">Submit</button>
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

