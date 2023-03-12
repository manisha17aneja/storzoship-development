@extends('layouts.main')

@section('title')
Preawb Dashboard List 
@endsection

@section('class')
warehouse-page complaints-page courier-priority user-page single-order-page activities-page
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

          <h1>Preawb Dashboard List</h1>

            <!-- body content -->
            <div class="card-body">
              <!--<h3 class="heading">Preawb Dashboard List</h3>-->


              
              <div class="row">

                  <div class="col-12 table-responsive">
                    <table id="userTable" class="table table-bordered admin_customer_pre_awb">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Is Preawb Allow</th>
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
                      <strong>Add User</strong>
                      <span>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </span>
                    </div>
                    <div class="modal-body">
                      <form class="ng-pristine ng-invalid ng-touched addUserForm" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div>


                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>User Type*</label>
                              <!--<input name="link" type="text" class="form-control">-->
                              <select name="type" class="form-control">
                                  <option value="">Select</option>
                                  <option value="1"> Admin</option>
                                  <option value="2"> Member</option>
                                  <option value="3"> Accountant</option>
                              </select>
                              <span class="text-danger error-text type_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>First Name*</label>
                              <input name="first_name" type="text" class="form-control">
                              <span class="text-danger error-text first_name_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Last Name*</label>
                              <input name="last_name" type="text" class="form-control">
                              <span class="text-danger error-text last_name_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Phone No*</label>
                              <input name="phone" type="text" class="form-control">
                              <span class="text-danger error-text phone_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Email*</label>
                              <input name="email" type="text" class="form-control">
                              <span class="text-danger error-text email_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Password*</label>
                              <input name="password" type="password" class="form-control">
                                <span class="p-viewer-signIn clickable">
                                    <i class="eye fa fa-eye-slash"></i>
                                </span>
                              <span class="text-danger error-text password_err"></span>
                            </div>
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Status*</label>
                              <!--<input name="link" type="text" class="form-control">-->
                              <select name="is_active" class="form-control">
                                  <option value="2"> Active</option>
                                  <option value="1"> Inactive</option>
                              </select>
                              <span class="text-danger error-text is_active"></span>
                            </div>
                          </div>
                        </div>
                        
                    
                        </div>
                        <div class="form-group mb0 text-end">
                          <button type="submit" class="addUserSubmit">Submit</button>
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
                      <strong>Edit User</strong>
                      <span>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </span>
                    </div>
                    <div class="modal-body">
                      <form class="ng-pristine ng-invalid ng-touched updateUserForm" action="{{ route('users.update') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>User Type*</label>
                              <!--<input name="link" type="text" class="form-control">-->
                              <select id="edit_type" name="edit_type" class="form-control">
                                  <option value="">Select</option>
                                  <option value="1"> Admin</option>
                                  <option value="2"> Member</option>
                                  <option value="3"> Accountant</option>
                              </select>
                              <span class="text-danger error-text edit_type_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>First Name*</label>
                              <input id="edit_first_name" name="edit_first_name" type="text" class="form-control">
                              <span class="text-danger error-text edit_first_name_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Last Name*</label>
                              <input id="edit_last_name" name="edit_last_name" type="text" class="form-control">
                              <span class="text-danger error-text edit_last_name_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Phone No*</label>
                              <input id="edit_phone" name="edit_phone" type="text" class="form-control">
                              <span class="text-danger error-text edit_phone_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Email*</label>
                              <input id="edit_email" name="edit_email" type="text" class="form-control">
                              <span class="text-danger error-text edit_email_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Password*</label>
                              <input id="edit_password" name="edit_password" type="password" class="form-control">
                                <span class="p-viewer-signIn clickable">
                                    <i class="eye fa fa-eye-slash"></i>
                                </span>
                              <span class="text-danger error-text edit_password_err"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Status*</label>
                              <!--<input name="link" type="text" class="form-control">-->
                              <select id="edit_is_active" name="edit_is_active" class="form-control">
                                  <option value="2"> Active</option>
                                  <option value="1"> Inactive</option>
                              </select>
                              <span class="text-danger error-text edit_is_active"></span>
                            </div>
                          </div>
                        </div>
                        
                    
                        </div>
                        <div class="form-group mb0 text-end">
                        <input type="hidden" id="user_id" name="user_id" value="0">
                          <button type="submit" id="updateUserSubmit">Submit</button>
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

