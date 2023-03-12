@extends('layouts.main')

@section('title')
Pending Customers
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

          <h1>Kyc Pending Customers</h1>
            
            <!-- body content -->
            <div class="card-body">
              <!--<h3 class="heading">Kyc Pending Customers</h3>-->


              
              <div class="row">

                  <div class="col-12 table-responsive">
                    <table id="userTable" class="table table-bordered admin_pending">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Website</th>
                                <th>Phone</th>
                                <th>Pickup Address</th>
                                <th>City</th>
                                <th>Pincode</th>
                                <th>Created Date</th>
                                <th>Status</th>
                                <!--<th>Is_active</th>-->
                                <th width="100px">Is_active</th>
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


<!-- main-body-panel end -->
@endsection

