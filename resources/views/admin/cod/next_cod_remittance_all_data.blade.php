@extends('layouts.main')

@section('title')
Next COD Remmitance
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
                  Next COD Remmitance
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
                    <table id="nextCodRemittanceAllData" class="table table-bordered nextCodRemittanceAllData">
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Customer Email</th>
                                <th>Order Count</th>
                                <th>COD Remmitance Amount</th>
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


      




 


<!-- main-body-panel end -->
@endsection

