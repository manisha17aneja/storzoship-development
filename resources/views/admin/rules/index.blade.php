@extends('layouts.main')

@section('title')
Add Warehouse  
@endsection

@section('class')
warehouse-page complaints-page courier-priority rule-page single-order-page
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
            <div class="text-right mb-2">
              <button class="btn btn-add-warehouse btn-primary" data-bs-toggle="modal" data-bs-target=".addModal">
                <i class="mdi mdi-plus"></i> Add Rule </button>
            </div>
            <!-- body content -->
            <div class="card-body">
              <h3 class="heading">Rules</h3>


              
              <div class="row">

                  <div class="col-12 table-responsive">
                    <table id="ruleTable" class="table table-bordered admin_rules">
                        <thead>
                            <tr>
                          
                                <th>Rule Name</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Status</th>
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
                      <strong>Add Rule</strong>
                      <span>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </span>
                    </div>
                    <div class="modal-body">
                      <form class="ng-pristine ng-invalid ng-touched addRuleForm" action="{{ route('rules.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div>


                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Rule Name*</label>
                              <input name="name" type="text" class="form-control" placeholder="Rule Name">
                              <span class="text-danger error-text name_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>From*</label>
                              <input name="from_kg" type="text" class="form-control" placeholder="From in Kg">
                              <span class="text-danger error-text from_kg_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>To*</label>
                              <input name="to_kg" type="text" class="form-control" placeholder="To in Kg">
                              <span class="text-danger error-text to_kg_err"></span>
                            </div>
                          </div>
                        </div>

                        
                        </div>
                        <div class="form-group mb0 text-end">
                          <button type="submit" class="addRuleSubmit">Submit</button>
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
                      <strong>Edit Rule</strong>
                      <span>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </span>
                    </div>
                    <div class="modal-body">
                      <form class="ng-pristine ng-invalid ng-touched updateRuleForm" action="{{ route('rules.update') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Rule Name*</label>
                              <input id="edit_name" name="edit_name" type="text" class="form-control" placeholder="Rule Name">
                              <span class="text-danger error-text edit_name_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>From*</label>
                              <input id="edit_from_kg" name="edit_from_kg" type="text" class="form-control" placeholder="From in Kg">
                              <span class="text-danger error-text edit_from_kg_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>To*</label>
                              <input id="edit_to_kg" name="edit_to_kg" type="text" class="form-control" placeholder="To in Kg">
                              <span class="text-danger error-text edit_to_kg_err"></span>
                            </div>
                          </div>
                        </div>

                        
                    
                        </div>
                        <div class="form-group mb0 text-end">
                        <input type="hidden" id="rule_id" name="rule_id" value="0">
                          <button type="submit" id="updateRuleSubmit">Submit</button>
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

