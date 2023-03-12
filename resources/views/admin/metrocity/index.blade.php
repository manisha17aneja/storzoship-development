@extends('layouts.main')

@section('title')
Metrocity 
@endsection

@section('class')
warehouse-page complaints-page courier-priority metrocity-page single-order-page request_weight_freeze_page
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
                    <i class="mdi mdi-plus"></i> Add Metrocity
                  </button>
                </div>

                <div class="type-header mt-sm">
                Metrocity
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
                <i class="mdi mdi-plus"></i> Add Metrocity </button>
            </div>-->
            <!-- body content -->
            <div class="card-body">
              <!--<h3 class="heading">Metrocity</h3>-->


              
              <div class="row">

                  <div class="col-12 table-responsive">
                    <table id="metrocityTable" class="table table-bordered admin_metrocity">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Metrocity Name</th>
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
                      <strong>Add Metrocity</strong>
                      <span>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </span>
                    </div>
                    <div class="modal-body">
                      <form class="ng-pristine ng-invalid ng-touched addMetrocityForm" action="{{ route('metrocity.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div>


                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Metrocity Name*</label>
                              <input name="name" type="text" class="form-control" placeholder="Metrocity Name">
                              <span class="text-danger error-text name_err"></span>
                            </div>
                          </div>
                        </div>

                        
                        </div>
                        <div class="form-group mb0 text-end">
                          <button type="submit" class="addMetrocitySubmit">Submit</button>
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
                      <strong>Edit Metrocity</strong>
                      <span>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </span>
                    </div>
                    <div class="modal-body">
                      <form class="ng-pristine ng-invalid ng-touched updateMetrocityForm" action="{{ route('metrocity.update') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Metrocity Name*</label>
                              <input id="edit_name" name="edit_name" type="text" class="form-control" placeholder="Metrocity Name">
                              <span class="text-danger error-text edit_name_err"></span>
                            </div>
                          </div>
                        </div>


                    
                        </div>
                        <div class="form-group mb0 text-end">
                        <input type="hidden" id="metrocity_id" name="metrocity_id" value="0">
                          <button type="submit" id="updateMetrocitySubmit">Submit</button>
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

