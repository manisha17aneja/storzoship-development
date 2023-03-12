@extends('layouts.main')

@section('title')
Cod Remittance List
@endsection

@section('class')
warehouse-page complaints-page courier-priority address-page single-order-page request_weight_freeze_page reports-page
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

                  <div class="type-header mt-sm">
                  Cod Remittance List
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
                    <table id="allCodRemittanceList" class="table table-bordered allCodRemittanceList">
                        <thead>
                            <tr>
                                <th>Remitted Date</th>
                                <th>Remitted Amount</th>
                                <th>Note</th>
                                <th>Action</th>
                                <th>Customer</th>
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


      

           <!-- viewDetailModal start -->
            <div class="modal fade viewDetailModal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                  <div>
                  <div class="modal-header">
                    <strong>COD Remittance Detail</strong>
                    <span>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </span>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                    <div>
                    <table id="cod_remittance_order_detail_table" class="table table-bordered cod_remittance_order_detail_table">
                        <thead>
                            <tr>
                                <th>Airwaybill Number</th>
                                <th>COD Amount</th>
                                <th>Delivery Date</th>
                                <th>Paid Date</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                  </div>
                </div>
            </div>
            <!-- viewDetailModal end -->




 


<!-- main-body-panel end -->
@endsection

