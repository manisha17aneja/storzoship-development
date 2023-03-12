@extends('layouts.main')

@section('title')
Manage Logistic Priority
@endsection

@section('class')
warehouse-page complaints-page courier-priority logisticPriority-page single-order-page request_weight_freeze_page
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
                    <i class="mdi mdi-plus"></i> Add Logistic Priority  
                  </button>
                </div>

                <div class="type-header mt-sm">
                Manage Logistic Priority
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
                <i class="mdi mdi-plus"></i> Add Single LogisticPriority Price </button>
            </div>-->
            <!-- body content -->
            <div class="card-body">
              <!--<h3 class="heading">LogisticPriority Price List</h3>-->


              
              <div class="row">

                  <div class="col-12 table-responsive">
                    <table id="logisticPriorityTable" class="table table-bordered admin_logisticPriority">
                        <thead>
                            <tr>
                                <th>Logistic Name</th>
                                <th>Priority</th>
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
                      <strong>Add Logistic Priority </strong>
                      <span>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </span>
                    </div>
                    <div class="modal-body">
                      <form class="ng-pristine ng-invalid ng-touched addLogisticPriorityForm" action="{{ route('logisticPriority.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div>


                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Logistic Name*</label>
                              <select name="logistic_id" class="form-select">
                                  <option value="">Select</option>
                                  @foreach ($logistics as $logistic)
                                  <option value="{{$logistic->id}}"> {{$logistic->logistic_name}}</option>
                                  @endforeach
                              </select>
                              <span class="text-danger error-text logistic_id_err"></span>
                            </div>
                          </div>
                        </div>

      

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Priority Set*</label>
                              <input name="priority" type="text" class="form-control">
                              <span class="text-danger error-text priority_err"></span>
                            </div>
                          </div>
                        </div>

                        
                        </div>
                        <div class="form-group mb0 text-end">
                          <button type="submit" class="addLogisticPrioritySubmit">Submit</button>
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
                      <strong>Edit Logistic Priority</strong>
                      <span>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </span>
                    </div>
                    <div class="modal-body">
                      <form class="ng-pristine ng-invalid ng-touched updateLogisticPriorityForm" action="{{ route('logisticPriority.update') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div>


                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Logistic Name*</label>
                              <select id="edit_logistic_id" name="edit_logistic_id" class="form-control">
                                  <option value="">Select</option>
                                  @foreach ($logistics as $logistic)
                                  <option value="{{$logistic->id}}"> {{$logistic->logistic_name}}</option>
                                  @endforeach
                              </select>
                              <span class="text-danger error-text edit_logistic_id_err"></span>
                            </div>
                          </div>
                        </div>

      

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Priority Set*</label>
                              <input id="edit_priority" name="edit_priority" type="text" class="form-control">
                              <span class="text-danger error-text edit_priority_err"></span>
                            </div>
                          </div>
                        </div>


                    
                        </div>
                        <div class="form-group mb0 text-end">
                        <input type="hidden" id="logisticPriority_id" name="logisticPriority_id" value="0">
                          <button type="submit" id="updateLogisticPrioritySubmit">Submit</button>
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

